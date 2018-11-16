<?php

namespace App\Repositories\PublicPortal;

use App\Athlete;

class RenderHTMLBannerRepository {
    
    public static function RenderProductsBannerHtml( $bannerProducts ) 
    {
        $html = '';
        $prependBillboardSet = false;
        if ( !empty( setting('site.homepage_prepend_billboard') ) )
        {
            $prependBillboardSet = true;
            $html = setting('site.homepage_prepend_billboard');
        }

        foreach ( $bannerProducts as $bannerProductKey => $bannerProduct )
        {
            
            $activeBanner =  '';
            if ( 
                ( $prependBillboardSet == false )
                && ($bannerProductKey == 0)
            ){
                $activeBanner =  'active';
            }

            $bannerImages = json_decode($bannerProduct['images'], true);
            $dsplyBannerImage = $_ENV['APP_URL'] .'storage/'. $bannerImages[0];
            
            
            $html .= <<<EOT
            <div class="carousel-item {$activeBanner}">            
                <picture>
                    <source media="(max-width: 640px)" srcset="{$dsplyBannerImage}">
                    <img class="d-block w-100" src="{$dsplyBannerImage}" alt="{$bannerProduct['name']}" />
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
                    <span class="name">{$bannerProduct['name']}</span>
                    <span class="name">{$bannerProduct['Summary']}</span>                    
                </div>            
            </div>
EOT;
        }
        

        return $html;


    }

    public static function RenderAtheletesBannerHtml( $bannerAtheletes ) 
    {
        $html = '';
        $prependBillboardSet = false;
        if ( !empty( setting('site.homepage_prepend_billboard') ) )
        {
            $prependBillboardSet = true;
            $html = setting('site.homepage_prepend_billboard');
        }

        foreach ( $bannerAtheletes as $bannerAtheleteKey => $bannerAthelete )
        {
            
            $activeBanner =  '';
            if ( 
                ( $prependBillboardSet == false )
                && ($bannerAtheleteKey == 0)
            ){
                $activeBanner =  'active';
            }

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
