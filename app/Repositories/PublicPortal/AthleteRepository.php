<?php

namespace App\Repositories\PublicPortal;

use App\Athlete;

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

        return $results;

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
