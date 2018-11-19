<?php

namespace App\Repositories\PublicPortal;

use App\DentalPractice;

class DentalPracticesRepository {
    

    public static function fetchMapDentalPractices( $site, $search ) {

        dump( $site, $search );
        $results = DentalPractice::select()
            ->where('deleted_at', NULL)
            ->get();

        return $results;

    }

}
