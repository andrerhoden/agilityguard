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

        return self::__prepBannerHtml( $results );

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

    private static function __prepBannerHtml( $bannerAtheletes ) 
    {
        $html = '';

        // dump( $bannerAtheletes );

        foreach ( $bannerAtheletes as $bannerAtheleteKey => $bannerAthelete )
        {
            

            $activeBanner = ($bannerAtheleteKey == 0) ? 'active' : '';

            $bannerImages = json_decode($bannerAthelete['Images'], true);
            $dsplyBannerImage = $_ENV['APP_URL'] .'storage/'. $bannerImages[0];
            
            
            $html .= <<<EOT
            <div class="carousel-item {$activeBanner}">            
                <picture>
                    <source media="(max-width: 640px)" srcset="{$dsplyBannerImage}">
                    <img class="d-block w-100" src="{$dsplyBannerImage}" alt="{$bannerAthelete['Name']} - {$bannerAthelete['Awards']}" />
                </picture>            
                <div class="carousel-text">
                    <div class="row">
                    
                        <!--
                        <div class="col-10 col-sm-12 col-md-7 col-lg-6">
                            <h1>Lorem ipsum
                                dolor sit amet.</h1>
                            <h2>Subtext to go here and here</h2>
                            <a href="#" class="button">Learn more</a>
                        </div>
                        -->
                        
                    </div>
                    
                </div>
                <div class="photo-credit">
                    <span class="name">{$bannerAthelete['Name']}</span>
                    <span class="summary">{$bannerAthelete['Awards']}</span>
                </div>            
            </div>
EOT;
        }
        

        return $html;


    }
}
