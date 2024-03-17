<?php

namespace App\Http\Controllers;


use Artesaos\SEOTools\SEOTools;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class WebsiteController extends Controller
{
    use SEOToolsTrait;
    public function home(){
        $this->seo()->setTitle('Techyfo');
        $this->seo()->setDescription('Techyfo - A leading IT company in Bangladesh. With innovative tech ideas, digital developments, excellent clients services we are providing services all over the country.');
        $this->seo()->opengraph()->setUrl(route('home'));
        $this->seo()->setCanonical(route('home'));

        return view('website.pages.home');
    }
}
