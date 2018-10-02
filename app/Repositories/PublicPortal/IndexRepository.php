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

}
