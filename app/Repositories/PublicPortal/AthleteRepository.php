<?php

namespace App\Repositories\PublicPortal;

use App\Athlete;
use App\Repositories\PublicPortal\RenderHTMLBannerRepository;

class AthleteRepository {
    
    public static function fetchForHomeAthleteBanner() {

        $results = Athlete::select(['*'])
            ->where('display_athlete_banner', 1)
            ->where('deleted_at', NULL)
            ->get()
            ->toArray();

        return $results;        

    }

    public static function fetchTestimonials() {


        $results = Athlete::select(['*'])
            ->where('display_testimony', 1)
            ->where('deleted_at', NULL)
            ->get()
            ->toArray();

        $return = [];

        foreach( $results as $rs )
        {
            $rtnRs = $rs;

            if ( !empty( $rs['Images'] ) )
            {
                $img = json_decode( $rs['Images'], true);
                if( !empty( $img[0] ) )
                {
                    $imgpath = $_ENV['APP_URL'] .'storage/'. $img[0]; 
                    $rtnRs['dplyImg'] = $imgpath;
                }
                
                
                
            }
            
            $return[] = $rtnRs;
        }
        return $return;

    }

    public static function fetchTestimonialsForHomepage() {

        $results = Athlete::select(['*'])
            ->where('display_testimony_homepage', 1)
            ->where('deleted_at', NULL)
            ->get()
            ->toArray();

        return $results;

    }

}
