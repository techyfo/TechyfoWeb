<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Page;
use App\Models\Service;
use App\Models\Post;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        // Fetch posts, authors, and categories
        $posts = Post::where('status','published')->where('published_at','<=',Carbon::now())->get();
        $authors = Author::all();
        $categories = Category::all();
        $pages = Page::where('status','published')->get();
        $services = Service::all();
        $routeNames = ['home', 'about', 'contact','portfolios','blog','team','gallery','clients','sitemap'];
        // Generate the sitemap XML content
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>
                    <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($routeNames as $routeName) {
            $sitemap .= '<url>';
            $sitemap .= '<loc>' . route($routeName) . '</loc>';
            $sitemap .= '<changefreq>weekly</changefreq>';
            $sitemap .= '<priority>1</priority>';
            $sitemap .= '</url>';
        }
        foreach ($pages as $page) {
            $sitemap .= '<url>
                            <loc>' . route('page_or_post',['slug'=>$page->slug]) . '</loc>
                            <lastmod>' . $page->updated_at->format('Y-m-d') . '</lastmod>
                            <changefreq>weekly</changefreq>
                            <priority>1</priority>
                        </url>';
        }
        foreach ($services as $service) {
            $sitemap .= '<url>
                            <loc>' . route('service',['slug'=>$service->slug]) . '</loc>
                            <lastmod>' . $service->updated_at->format('Y-m-d') . '</lastmod>
                            <changefreq>weekly</changefreq>
                            <priority>1</priority>
                        </url>';
        }

       // Add URLs for posts
        foreach ($posts as $post) {
            $sitemap .= '<url>
                            <loc>' . route('page_or_post', ['slug'=>$post->slug]) . '</loc>
                            <lastmod>' . $post->updated_at->format('Y-m-d') . '</lastmod>
                            <changefreq>daily</changefreq>
                            <priority>1</priority>
                        </url>';
        }
    //Add URLs for categories
        foreach ($categories as $category) {
            $sitemap .= '<url>
                            <loc>' . route('category', ['slug'=>$category->slug]) . '</loc>
                            <changefreq>monthly</changefreq>
                            <priority>0.9</priority>
                        </url>';
        }
        //Add URLs for authors
        foreach ($authors as $author) {
            $sitemap .= '<url>
                            <loc>' . route('author', ['slug'=>$author->slug]) . '</loc>
                            <changefreq>weekly</changefreq>
                            <priority>0.8</priority>
                        </url>';
        }

        $sitemap .= '</urlset>';

        // Return the sitemap XML as response
        return response($sitemap)->header('Content-Type', 'text/xml');
    }
}
