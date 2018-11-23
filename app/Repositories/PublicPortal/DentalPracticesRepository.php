<?php

namespace App\Repositories\PublicPortal;

use App\DentalPractice;
use App\Contact;

class DentalPracticesRepository {
    

    public static function fetchMapDentalPractices( $site, $search ) {

        
        $results = Contact::select()
            ->with('dentalPracticeId')
            ->with('productsId')
            ->get();

        
        return $results;

// https://stackoverflow.com/questions/42299469/many-to-many-relationship-in-voyager-admin-panel        
// https://stackoverflow.com/questions/21615656/get-array-of-eloquent-models-relations



    }

}
