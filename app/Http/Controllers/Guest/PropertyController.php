<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class PropertyController extends Controller
{
    function index() : View {
        $seoData = new SEOData(
            title: 'Properties Page',
            description: 'Test'
        );
        return view('pages.guest.properties.index',[
            'seoData' => $seoData
        ]);

    }
}
