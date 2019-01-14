<?php

namespace App\Repositories\DentistPortal;

use App\DentalPractice;
use App\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DentalPracticesRepository {
    
	public static function updateProfile($input, $dpUser)
	{

		$dpUser->Name = $input['DentistName'];
		$dpUser->EmailAddress = $input['EmailAddress'];

		$geoCode = self::__geoCodeAddress( $input['address'] . ' ' . $input['city'] . ' ' . $input['prov'] . ' ' . $input['country'] . ' ' . $input['postal'] );	
		if ( 
			empty($geoCode['lat']) 
			|| empty($geoCode['lng']) 
		){
			return "ERROR: Account failed to update. Unable to Geolocate Address.";
		}

		if ( $input['ConfirmPassword'] == $input['Password'] )
		{
			$dpUser->Password = Hash::make($input['Password']);
		}else 
		{
			return "ERROR: Account failed to update. Passwords do not match";
		}

		$dpUser->save();

		$dpUser->dentalPracticeId->Name = $input['DentalPracticeName'];
		$dpUser->dentalPracticeId->Address = $input['address'];
		$dpUser->dentalPracticeId->EmailAddress = $input['email'];
		$dpUser->dentalPracticeId->City = $input['city'];
		$dpUser->dentalPracticeId->Province = $input['prov'];
		$dpUser->dentalPracticeId->Country = $input['country'];
		$dpUser->dentalPracticeId->Postal_code = $input['postal'];
		$dpUser->dentalPracticeId->Website = $input['website'];
		$dpUser->dentalPracticeId->phone_office = $input['phone'];
		$dpUser->dentalPracticeId->lat = $geoCode['lat'];
		$dpUser->dentalPracticeId->long = $geoCode['lng'];

		$dpUser->dentalPracticeId->save();

		

		return true;


		// return "ERROR: Account failed to update. Please contact administrator";
	}

    private static function __geoCodeAddress($address)	
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
			return false;
		}
	}
	

}
