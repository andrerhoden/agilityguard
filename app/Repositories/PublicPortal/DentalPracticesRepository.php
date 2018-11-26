<?php

namespace App\Repositories\PublicPortal;

use App\DentalPractice;
use App\Contact;
use Illuminate\Support\Facades\DB;


class DentalPracticesRepository {
    

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
            ->having('distance', '<', $distance );
            
        $returnResults = [];
        foreach ( $results->get() as $rs )
        {

            // dump( $rs->Contacts()->select('Name', 'EmailAddress', 'Photo', 'products_id')->get()->toArray() );
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

                'Contacts' => [
					[
						"Name" => "Andre Rhoden-PHI",
						"EmailAddress" => "admin@admin.com",
						"Photo" => null,
						"Products" => [
							[
								'Name' => 'PHI',
								'Slug' => 'phi',
								'Photo' => '["products\/November2018\/Zh5IqssMMUY9GRjFpGz5.jpg"]'
							],
							[
								'Name' => 'Trophy',
								'Slug' => 'phi',
								'Photo' => '["["products\/November2018\/9x4XjE2sS8Ez4yidqqbT.jpg"]"]'
							]
						]
					],[
						"Name" => "Zariia Rhoden-trophy",
						"EmailAddress" => "admin@admin.com",
						"Photo" => "contacts/November2018/mSR9Mws0Q45mUuu1IhI1.jpeg",
						"Products" => [
							[
								'Name' => 'PHI',
								'Slug' => 'phi',
								'Photo' => '["products\/November2018\/Zh5IqssMMUY9GRjFpGz5.jpg"]'
							]
						]
					]
			  	]//$rs->Contacts()->select('Name', 'EmailAddress', 'Photo', 'products_id')->get()
            ];
        }
        

        return $returnResults;

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
        


/*        

    private function getDentistsForMap ($addressSearch, $distance, $unit)
    {
        
        try
        {
            global $db;
            global $sugar_config;
            
            $coordinates = $this->GeoCodeAddress($addressSearch);				
            if ( is_string($coordinates) )
                return $coordinates; // ret error str
            
            
            if ($unit == 'miles')
                $xUnit = 3959;
            elseif ($unit == 'kilometers')
                $xUnit = 6371;
            else 
                return 'ERROR: unit incorrect';
                
            $distance = intval($distance);
                        
            $query = "
                        
                SELECT 
                    contacts.id AS DentistID,
                    contacts_cstm.dentist_photo_c,
                    contacts.salutation,
                    contacts.first_name,
                    contacts.last_name,
                    contacts.title,
                    accounts.id as account_id,
                    accounts.name as account_name, 
                    accounts.billing_address_street,
                    accounts.billing_address_city,
                    accounts.billing_address_state,
                    accounts.billing_address_postalcode,
                    accounts.billing_address_country, 
                    accounts.phone_office,
                    accounts.website,
                    accounts_cstm.latitude_c,
                    accounts_cstm.longitude_c,
                    
                        
                    ". $xUnit ." * ACOS( 
                        COS( RADIANS(" . $coordinates['lat'] . ") ) * COS( RADIANS( accounts_cstm.latitude_c ) ) * COS( RADIANS( accounts_cstm.longitude_c ) - RADIANS(". $coordinates['lng'] .") ) + SIN( RADIANS(" . $coordinates['lat'] . ") ) * SIN( RADIANS( accounts_cstm.latitude_c ) )  
                    ) AS distance
                    
                FROM contacts
                LEFT JOIN contacts_cstm ON (contacts_cstm.id_c = contacts.id)
                LEFT JOIN accounts_contacts ON (accounts_contacts.contact_id = contacts.id)
                LEFT JOIN accounts ON (accounts_contacts.account_id = accounts.id)
                LEFT JOIN accounts_cstm ON (accounts_cstm.id_c = accounts.id)
                
                WHERE 
                    contacts_cstm.dentist_c = 1
                    AND accounts.deleted = 0
                    AND contacts.deleted = 0
                    AND accounts_contacts.deleted = 0
                    
                HAVING
                    distance < ". $distance ."	
                ORDER BY 
                    distance,
                    contacts.last_name
            ";
            
        
            $result = $db->query($query);
            
            while ($row = $db->fetchByAssoc($result))
            {
                $sea = new SugarEmailAddress;
                $addresses = $sea->getAddressesByGUID($row['account_id'], 'Accounts');

                if (isset($addresses[0]['email_address']))
                    $emailAddress = $addresses[0]['email_address'];
                else
                    $emailAddress = '';
                
                if ($row['website'] == 'http://')
                    $website = '';
                else
                    $website = $row['website'];
                
                $retDentalPractices[] = array
                (
                    'account_id' => $row['account_id'],
                    'photo_url' => $sugar_config['site_url'] . '/' . $sugar_config['DentistPhotoPath'] . $row['dentist_photo_c'],
                    'dentist_name' => $this->cleanNullValue($row['salutation']) . ' ' . $this->cleanNullValue($row['first_name']) . ' ' . $this->cleanNullValue($row['last_name']),
                    'title' => $this->cleanNullValue($row['title']),
                    'dental_practice_name' => $this->cleanNullValue($row['account_name']),
                    'billing_address_street' => $this->cleanNullValue($row['billing_address_street']),
                    'billing_address_city' => $this->cleanNullValue($row['billing_address_city']),
                    'billing_address_state' => $this->cleanNullValue($row['billing_address_state']),
                    'billing_address_postalcode' => $this->cleanNullValue($row['billing_address_postalcode']),
                    'billing_address_country' => $this->cleanNullValue($row['billing_address_country']),
                    'phone_office' => $this->cleanNullValue($row['phone_office']),
                    'website' => $website,
                    'practice_emailAddress' => $emailAddress,
                    'latitude_c' => $row['latitude_c'],
                    'longitude_c' => $row['longitude_c'],	
                    'distance' => number_format($row['distance'], 1),	
                    'unit' => $unit, 			
                    'products' => $this->getDentistProducts($row['DentistID'], false), 
                );
                
            }
            
            if (!empty($retDentalPractices))
                return json_encode($retDentalPractices); //return serialize($retDentalPractices);
            else
                return false;
        
        } catch(Exception $e) {
            return $e->getMessage(); 
        } 
    }
















/*
    function cleanNullValue ($x)
		{
			if ( is_null($x) )
				return '';
			else
				return $x;
		}
		
		

		public function GeoCodeAddress($address)
		
		{
			global $sugar_config;

			$base_url ="https://maps.googleapis.com/maps/api/geocode/xml?sensor=true";
			$request_url = $base_url . "&address=" . urlencode($address);
			$xml = simplexml_load_file($request_url) or die("url not loading");

			if ($xml->status == 'OK') // Successfull
			{
				
				return array(
					'lat' => $xml->result->geometry->location->lat,
					'lng' => $xml->result->geometry->location->lng,
				);
				
				
			} else {
				return "Address '" . $address . "' failed to geocode. Received status " . $xml->status;
			}
		}
		
		public function getDentistsForMap ($addressSearch, $distance, $unit)
		{
			
			try
			{
				global $db;
				global $sugar_config;
				
				$coordinates = $this->GeoCodeAddress($addressSearch);				
				if ( is_string($coordinates) )
					return $coordinates; // ret error str
				
				
				if ($unit == 'miles')
					$xUnit = 3959;
				elseif ($unit == 'kilometers')
					$xUnit = 6371;
				else 
					return 'ERROR: unit incorrect';
					
				$distance = intval($distance);
							
				$query = "
						 
					SELECT 
						contacts.id AS DentistID,
						contacts_cstm.dentist_photo_c,
						contacts.salutation,
						contacts.first_name,
						contacts.last_name,
						contacts.title,
						accounts.id as account_id,
						accounts.name as account_name, 
						accounts.billing_address_street,
						accounts.billing_address_city,
						accounts.billing_address_state,
						accounts.billing_address_postalcode,
						accounts.billing_address_country, 
						accounts.phone_office,
						accounts.website,
						accounts_cstm.latitude_c,
						accounts_cstm.longitude_c,
						
						 
						". $xUnit ." * ACOS( 
							COS( RADIANS(" . $coordinates['lat'] . ") ) * COS( RADIANS( accounts_cstm.latitude_c ) ) * COS( RADIANS( accounts_cstm.longitude_c ) - RADIANS(". $coordinates['lng'] .") ) + SIN( RADIANS(" . $coordinates['lat'] . ") ) * SIN( RADIANS( accounts_cstm.latitude_c ) )  
						) AS distance
						
					FROM contacts
					LEFT JOIN contacts_cstm ON (contacts_cstm.id_c = contacts.id)
					LEFT JOIN accounts_contacts ON (accounts_contacts.contact_id = contacts.id)
					LEFT JOIN accounts ON (accounts_contacts.account_id = accounts.id)
					LEFT JOIN accounts_cstm ON (accounts_cstm.id_c = accounts.id)
					
					WHERE 
						contacts_cstm.dentist_c = 1
						AND accounts.deleted = 0
						AND contacts.deleted = 0
						AND accounts_contacts.deleted = 0
						
					HAVING
						distance < ". $distance ."	
					ORDER BY 
						distance,
						contacts.last_name
				";
				
			
				$result = $db->query($query);
				
				while ($row = $db->fetchByAssoc($result))
				{
					$sea = new SugarEmailAddress;
					$addresses = $sea->getAddressesByGUID($row['account_id'], 'Accounts');

					if (isset($addresses[0]['email_address']))
						$emailAddress = $addresses[0]['email_address'];
					else
						$emailAddress = '';
					
					if ($row['website'] == 'http://')
						$website = '';
					else
						$website = $row['website'];
					
					$retDentalPractices[] = array
					(
						'account_id' => $row['account_id'],
						'photo_url' => $sugar_config['site_url'] . '/' . $sugar_config['DentistPhotoPath'] . $row['dentist_photo_c'],
						'dentist_name' => $this->cleanNullValue($row['salutation']) . ' ' . $this->cleanNullValue($row['first_name']) . ' ' . $this->cleanNullValue($row['last_name']),
						'title' => $this->cleanNullValue($row['title']),
						'dental_practice_name' => $this->cleanNullValue($row['account_name']),
						'billing_address_street' => $this->cleanNullValue($row['billing_address_street']),
						'billing_address_city' => $this->cleanNullValue($row['billing_address_city']),
						'billing_address_state' => $this->cleanNullValue($row['billing_address_state']),
						'billing_address_postalcode' => $this->cleanNullValue($row['billing_address_postalcode']),
						'billing_address_country' => $this->cleanNullValue($row['billing_address_country']),
						'phone_office' => $this->cleanNullValue($row['phone_office']),
						'website' => $website,
						'practice_emailAddress' => $emailAddress,
						'latitude_c' => $row['latitude_c'],
						'longitude_c' => $row['longitude_c'],	
						'distance' => number_format($row['distance'], 1),	
						'unit' => $unit, 			
						'products' => $this->getDentistProducts($row['DentistID'], false), 
					);
					
				}
				
				if (!empty($retDentalPractices))
					return json_encode($retDentalPractices); //return serialize($retDentalPractices);
				else
					return false;
			
			} catch(Exception $e) {
				return $e->getMessage(); 
			} 
		}
		
		public function getDentistProducts($DentistID, $SerializeReturnData = true)
		{
			global $db;
			$query = "
				SELECT
					ag_products.name AS product_name,
					ag_products.id,
					ag_products_cstm.lab_fee_c
					
				FROM ag_products
				LEFT JOIN ag_products_cstm ON (ag_products.id = ag_products_cstm.id_c)			
				LEFT JOIN ag_products_contacts_c ON (ag_products.id = ag_products_contacts_c.ag_prod8fdcucts_ida)
						
				WHERE
					ag_products_contacts_c.ag_prod6edcacts_idb = '" . $DentistID . "'
					AND ag_products_contacts_c.deleted = 0
					AND ag_products.deleted = 0	
				
				ORDER BY 
					product_name	
			";
			$result = $db->query($query);
			
			$retProducts = array();	
			while ($row = $db->fetchByAssoc($result))
			{
				$retProducts[] = array
				(
					'id' => $row['id'],
					'name' => $row['product_name'],
					'msrp_c' => number_format($row['lab_fee_c'], 2)  // Derrick will need to update DP CMS to accept lab_fee. For now its the same as before "msrp_c".
				);
			}
			
			if ($SerializeReturnData == true)
				return serialize($retProducts);
			else
				return $retProducts;
		}
		
		
		public function getDentistDetails($DentistID)
		{
			
			try
			{
				
				global $db;
				global $sugar_config;
				
				$query = "
						 
					SELECT 
						contacts.id AS DentistID,
						contacts_cstm.dentist_photo_c,
						contacts.salutation,
						contacts.first_name,
						contacts.last_name,
						contacts.title,
						accounts.id as account_id,
						accounts.name as account_name, 
						accounts.billing_address_street,
						accounts.billing_address_city,
						accounts.billing_address_state,
						accounts.billing_address_postalcode,
						accounts.billing_address_country, 
						accounts.phone_office,
						accounts.website,
						accounts_cstm.latitude_c,
						accounts_cstm.longitude_c
					FROM contacts
					LEFT JOIN contacts_cstm ON (contacts_cstm.id_c = contacts.id)
					LEFT JOIN accounts_contacts ON (accounts_contacts.contact_id = contacts.id)
					LEFT JOIN accounts ON (accounts_contacts.account_id = accounts.id)
					LEFT JOIN accounts_cstm ON (accounts_cstm.id_c = accounts.id)
					
					WHERE 
						contacts.id = '" . $DentistID . "'
						AND contacts_cstm.dentist_c = 1
						AND accounts.deleted = 0
						AND contacts.deleted = 0
						AND accounts_contacts.deleted = 0											
				";
				
			
				$result = $db->query($query);
				
				while ($row = $db->fetchByAssoc($result))
				{
					$sea = new SugarEmailAddress;
					$addresses = $sea->getAddressesByGUID($row['DentistID'], 'Contacts');

					if (isset($addresses[0]['email_address']))
						$dentist_emailAddress = $addresses[0]['email_address'];
					else
						$dentist_emailAddress = '';
					
	
					$addresses = $sea->getAddressesByGUID($row['account_id'], 'Accounts');
					if (isset($addresses[0]['email_address']))
						$practice_emailAddress = $addresses[0]['email_address'];
					else
						$practice_emailAddress = '';
	
	
	
					if ($row['website'] == 'http://')
						$website = '';
					else
						$website = $row['website'];
					
					$retDentalPractices[] = array
					(
						'account_id' => $row['account_id'],
						'photo_url' => $sugar_config['site_url'] . '/' . $sugar_config['DentistPhotoPath'] . $row['dentist_photo_c'],
						'dentist_name' => $this->cleanNullValue($row['salutation']) . ' ' . $this->cleanNullValue($row['first_name']) . ' ' . $this->cleanNullValue($row['last_name']),
						'title' => $this->cleanNullValue($row['title']),
						'dental_practice_name' => $this->cleanNullValue($row['account_name']),
						'billing_address_street' => $this->cleanNullValue($row['billing_address_street']),
						'billing_address_city' => $this->cleanNullValue($row['billing_address_city']),
						'billing_address_state' => $this->cleanNullValue($row['billing_address_state']),
						'billing_address_postalcode' => $this->cleanNullValue($row['billing_address_postalcode']),
						'billing_address_country' => $this->cleanNullValue($row['billing_address_country']),
						'phone_office' => $this->cleanNullValue($row['phone_office']),
						'website' => $website,
						'practice_emailAddress' => $practice_emailAddress,
						'dentist_emailAddress' => $dentist_emailAddress,
						'latitude_c' => $row['latitude_c'],
						'longitude_c' => $row['longitude_c'],	
						'products' => $this->getDentistProducts($row['DentistID'], false), 
					);
					
				}
				
				if (!empty($retDentalPractices))
					return serialize($retDentalPractices);
				else
					return false;
			



			} catch(Exception $e) {
				return $e->getMessage(); 
			} 		}
	*/
}
