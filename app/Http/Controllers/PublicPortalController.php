<?php

namespace App\Http\Controllers;
use App\Repositories\PublicPortal\IndexRepository;


class PublicPortalController extends Controller
{
    public function index()
    {

        return view('publicportal.index', [
            'testimonials' => IndexRepository::fetchTestimonials()
        ]);
    }
}
