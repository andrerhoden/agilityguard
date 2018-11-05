<?php

namespace App\Repositories\PublicPortal;

use App\Athlete;

class AthleteRepository {
    

    public static function fetchTestimonials() {

        $results = Athlete::select(['*'])
            ->where('deleted_at', NULL)
            ->get()
            ->toArray();

        return $results;

    }

}
