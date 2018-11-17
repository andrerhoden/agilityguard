<?php

namespace App\Repositories\PublicPortal;

use App\Athlete;
use App\Repositories\PublicPortal\ProductsRepository;
use App\Repositories\PublicPortal\AthleteRepository;


class RenderHTMLBannerRepository {
    
    public $activeBanner = '';
    public $prependBillboardSet = false;

    public function RenderProductsBannerHtml() 
    {
        $html = '';
        
        if (
            ( !empty( setting('site.homepage_prepend_billboard') ) )
            && ( $this->prependBillboardSet == false )
        ){
            $this->prependBillboardSet = true;
            $html = setting('site.homepage_prepend_billboard');
        }
        
        
        $bannerProducts = ProductsRepository::fetchForHomeProductsBanner();

        
        foreach ( $bannerProducts as $bannerProductKey => $bannerProduct )
        {
            
            
            if ( 
                ( $this->prependBillboardSet == false )
                && ($bannerProductKey == 0)
                && ( $this->activeBanner == '' )
            ){
                $this->activeBanner =  'active';
            }

            $bannerImages = json_decode($bannerProduct['images'], true);
            $dsplyBannerImage = $_ENV['APP_URL'] .'storage/'. $bannerImages[0];
            
            
            $html .= <<<EOT
            <div class="carousel-item {$this->activeBanner}">            
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
                    <!--<span class="name">{$bannerProduct['Summary']}</span>-->                    
                </div>            
            </div>
EOT;
        }
        

        return $html;


    }

    public function RenderAtheletesBannerHtml() 
    {
        $html = '';
        
        if (
            ( !empty( setting('site.homepage_prepend_billboard') ) )
            && ( $this->prependBillboardSet == false )            
        ){
            $this->prependBillboardSet = true;
            $html = setting('site.homepage_prepend_billboard');
        }

        $bannerAtheletes = AthleteRepository::fetchForHomeAthleteBanner();
        foreach ( $bannerAtheletes as $bannerAtheleteKey => $bannerAthelete )
        {
            
            
            if ( 
                ( $this->prependBillboardSet == false )
                && ($bannerAtheleteKey == 0)
                && ( $this->activeBanner == '' )
            ){
                $this->activeBanner =  'active';
            }

            $bannerImages = json_decode($bannerAthelete['Images'], true);
            $dsplyBannerImage = $_ENV['APP_URL'] .'storage/'. $bannerImages[0];
            
            
            $html .= <<<EOT
            <div class="carousel-item {$this->activeBanner}">            
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