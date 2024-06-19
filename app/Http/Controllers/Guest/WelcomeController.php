<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class WelcomeController extends Controller
{
    function index() : View {
        $seoData = new SEOData(

            title: 'Title',
            
            description: 'Description',
        
        );
        
        return view('pages.guest.welcome.index',[
        
            'seoData' => $seoData
        
        ]);
    }
}
