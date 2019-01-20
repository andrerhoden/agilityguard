<?php

namespace App\Repositories\PublicPortal;

use App\DentalPractice;
use App\Contact;
use Illuminate\Support\Facades\DB;


class DentalPracticesRepository {
    

	private static function __prepContactsData( $results )
	{
		$returnResults = [];

		foreach ( $results->get() as $rs )
        {

			

			$contacts = [];
			foreach( $rs->Contacts()->select('*')->with('productsId')->get() as $rsContact )
			{

				$contactProducts = [];
				if ( $rsContact->productsId ) foreach( $rsContact->productsId as $rsProd )
				{
					$contactProducts[] = [
						'Name' => $rsProd->name,
						'Icon' => $rsProd->icon,
						'Slug' => $rsProd->slug
					];
					
				}

				$contacts[] = [
					"Name" => $rsContact->Name,
					"EmailAddress" => $rsContact->EmailAddress,
					"Products" => $contactProducts
				];

				
			}
			
			$returnResults[] = [
                'Photo' => $rs->Photo,
                'Name' => $rs->Name,
                'EmailAddress' => $rs->EmailAddress,
                'Description' => $rs->Description,
                'Lat' => $rs->Lat,
                'Long' => $rs->Long,
                'Address' => $rs->Address,
                'City' => $rs->City,
                'Province' => $rs->Province,
                'Country' => $rs->Country,
                'Postal_code' => $rs->Postal_code,
                'Website' => $rs->Website,
				'Contacts' => $contacts
                
            ];
		}
		
		return $returnResults;
	}

    public static function fetchMapDentalPractices( $site, $search, $distance, $unit ) {

        $coordinates = self::GeoCodeAddress($search);				
            if ( is_string($coordinates) )
                return $coordinates; // ret error str
        
        if ($unit == 'miles')
            $xUnit = 3959;
        elseif ($unit == 'km')
            $xUnit = 6371;
        else 
            return 'ERROR: unit incorrect';
                
        $distance = intval($distance);

        $sqlDistance = $xUnit . " * ACOS( 
            COS( RADIANS(" . $coordinates['lat'] . ") ) * COS( RADIANS( Lat ) ) * COS( RADIANS( `Long` ) - RADIANS(". $coordinates['lng'] .") ) + SIN( RADIANS(" . $coordinates['lat'] . ") ) * SIN( RADIANS( Lat ) )  
        ) AS distance, `*` ";
		$results = DentalPractice::select( DB::raw( $sqlDistance ) )
			->where('display_on_website', 1)
            ->having('distance', '<', $distance );
            
		
        return self::__prepContactsData( $results );

	}
	
	public static function fetchPageLoadMapDentalPractices() {

		$results = DentalPractice::select()
			->where('display_on_website', 1);
        return self::__prepContactsData( $results );

    }

    public static function GeoCodeAddress($address)
	
	{
		
		
		$base_url ="https://maps.googleapis.com/maps/api/geocode/xml?sensor=true";
		$key = "&key=" . $_ENV['GOOGLE_API_KEY'];
		$request_url = $base_url . "&address=" . urlencode($address) . $key;
		$xml = simplexml_load_file($request_url) or die("url not loading");

		if ($xml->status == 'OK') // Successfull
		{
			
			return array(
				'lat' => (float)$xml->result->geometry->location->lat,
				'lng' => (float)$xml->result->geometry->location->lng,
			);
			
			
		} else {
			return "Address '" . $address . "' failed to geocode. Received status " . $xml->status;
		}
	}
	

}
