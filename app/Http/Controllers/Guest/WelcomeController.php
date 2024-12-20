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

        $accomodations = [
            [
              'href' => '',
              'property_image' => 'https://images.unsplash.com/photo-1718030323555-214805b7f884?q=80&w=2942&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
              'accomodation_name' => 'Atta Mesari Ubud',
              'accomodation_location' => 'Ubud, Gianyar',
              'nearby_location' => 'Ubud Art Market',
              'old_price' => 'IDR 1.800.000',
              'current_price' => 'IDR 1.550.000'

            ],
            [
                'href' => '',
                'property_image' => 'https://www.bvrbaliholidayrentals.com/storage/images/65aa11323ceb8.jpg',
                'accomodation_name' => 'Arkamara Dijiwa Sanctuaries',
                'accomodation_location' => 'Ubud, Gianyar',
                'nearby_location' => 'Ubud Art Market',
                'old_price' => 'IDR 1.800.000',
                'current_price' => 'IDR 1.550.000'

            ],
            [
                'href' => '',
                'property_image' => 'https://www.bvrbaliholidayrentals.com/storage/images/64d9e2c193e28.jpg',
                'accomodation_name' => 'Arkamara Dijiwa Sanctuaries',
                'accomodation_location' => 'Ubud, Gianyar',
                'nearby_location' => 'Ubud Art Market',
                'old_price' => 'IDR 1.800.000',
                'current_price' => 'IDR 1.550.000'

            ],
            [
                'href' => '',
                'property_image' => 'https://www.bvrbaliholidayrentals.com/storage/images/6554889def05a.jpg',
                'accomodation_name' => 'Arkamara Dijiwa Sanctuaries',
                'accomodation_location' => 'Ubud, Gianyar',
                'nearby_location' => 'Ubud Art Market',
                'old_price' => 'IDR 1.800.000',
                'current_price' => 'IDR 1.550.000'

            ],
            [
                'href' => '',
                'property_image' => 'https://www.bvrbaliholidayrentals.com/storage/images/65532a180307f.jpg',
                'accomodation_name' => 'Arkamara Dijiwa Sanctuaries',
                'accomodation_location' => 'Ubud, Gianyar',
                'nearby_location' => 'Ubud Art Market',
                'old_price' => 'IDR 1.800.000',
                'current_price' => 'IDR 1.550.000'

            ]
        ];

        return view('pages.guest.welcome.index',[

            'seoData' => $seoData,

            'accomodations' => $accomodations

        ]);
    }
}
