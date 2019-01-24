<?php

namespace App\Repositories\PublicPortal;

use App\Athlete;

class IndexRepository {
    

    public static function fetchTestimonials() {

        $results = Athlete::select(['Testimony', 'Name', 'Awards'])
            ->where('deleted_at', NULL)
            ->get()
            ->toArray();

        return $results;

    }


    public static function getAmateurAtheletes()
    {

        $return = [];
        
        if ($handle = opendir( $_SERVER['DOCUMENT_ROOT'] . $_ENV['APP_IMG_PATH'] . '/storage/HomePageAthletes' )) {

            while (false !== ($entry = readdir($handle))) {
        
                if ($entry != "." && $entry != "..") {
        
                    $return[] = $_ENV['APP_URL'] . '/storage/HomePageAthletes/' . $entry;
                }
            }
        
            closedir($handle);
        }

        return $return;

    }
}
