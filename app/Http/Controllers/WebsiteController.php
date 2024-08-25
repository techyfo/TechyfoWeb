<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Author;
use App\Models\Page;
use App\Models\Service;
use Artesaos\SEOTools\SEOTools;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Carbon\Carbon;
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
    public function contact(){
        $this->seo()->setTitle('Contact US');
        $this->seo()->setDescription('Techyfo - A leading IT company in Bangladesh. With innovative tech ideas, digital developments, excellent clients services we are providing services all over the country.');
        $this->seo()->opengraph()->setUrl(route('contact'));
        $this->seo()->setCanonical(route('contact'));

        return view('website.pages.contact');
    }
    public function about(){
        $this->seo()->setTitle('About US');
        $this->seo()->setDescription('Techyfo - A leading IT company in Bangladesh. With innovative tech ideas, digital developments, excellent clients services we are providing services all over the country.');
        $this->seo()->opengraph()->setUrl(route('about'));
        $this->seo()->setCanonical(route('about'));

        return view('website.pages.about');
    }
    public function portfolios(){
        $this->seo()->setTitle('Portfolios');
        $this->seo()->setDescription('Techyfo - A leading IT company in Bangladesh. With innovative tech ideas, digital developments, excellent clients services we are providing services all over the country.');
        $this->seo()->opengraph()->setUrl(route('portfolios'));
        $this->seo()->setCanonical(route('portfolios'));

        return view('website.pages.portfolios');
    }
    public function clients(){
        $this->seo()->setTitle('Our Clients');
        $this->seo()->setDescription('Techyfo - A leading IT company in Bangladesh. With innovative tech ideas, digital developments, excellent clients services we are providing services all over the country.');
        $this->seo()->opengraph()->setUrl(route('clients'));
        $this->seo()->setCanonical(route('clients'));

        return view('website.pages.our_clients');
    }
    public function team(){
        $this->seo()->setTitle('Team');
        $this->seo()->setDescription('Techyfo - A leading IT company in Bangladesh. With innovative tech ideas, digital developments, excellent clients services we are providing services all over the country.');
        $this->seo()->opengraph()->setUrl(route('team'));
        $this->seo()->setCanonical(route('team'));

        return view('website.pages.team');
    }
    public function blog(){
        $data = array();

        $data['title'] = "Blog";
        $data['posts'] = Post::where('status', 'published')->where('published_at', '<=', now())->orderBy('published_at', 'desc')->paginate(9);

        $this->seo()->setTitle("Blog");
        $this->seo()->setDescription(getSetting('meta_title'));
        $this->seo()->opengraph()->setUrl(route('blog'));
        $this->seo()->setCanonical(route('blog'));

        return view('website.pages.archive', $data);
    }
    public function category($slug){
        $category = Category::where('slug',$slug)->first();
        if ($category){
            $data = array();
            $data['title'] = $category->name;
            $data['posts'] = $category->posts()->where('status', 'published')->where('published_at', '<=', now())->orderBy('published_at', 'desc')->paginate(9);

            $this->seo()->setTitle($category->meta_title??$category->title);
            $this->seo()->setDescription($category->meta_description);
            $this->seo()->opengraph()->setUrl(route('category',['slug'=>$slug]));
            $this->seo()->setCanonical(route('category',['slug'=>$slug]));

            return view('website.pages.archive', $data);
        }else if ($slug == 'all'){
            $data = array();
            $data['title'] = 'All Post';
            $data['posts'] = \App\Models\Post::where('status', 'published')->where('published_at', '<=', now())->orderBy('published_at', 'desc')->paginate(9);
            $this->seo()->setTitle('All Post');
            $this->seo()->setDescription(getSetting('meta_title'));
            $this->seo()->opengraph()->setUrl(route('category',['slug'=>$slug]));
            $this->seo()->setCanonical(route('category',['slug'=>$slug]));
            return view('website.pages.archive', $data);
        }else{
            abort(404);
        }

    }
    public function author($slug){
        $author = Author::where('slug',$slug)->first();
        if ($author){
            $data = array();
            $data['title'] = $author->name;
            $data['posts'] = $author->posts()->where('status', 'published')->where('published_at', '<=', now())->orderBy('published_at', 'desc')->paginate(9);

            $this->seo()->setTitle($author->meta_title??$author->name);
            $this->seo()->setDescription($author->meta_description);
            $this->seo()->opengraph()->setUrl(route('author',['slug'=>$slug]));
            $this->seo()->setCanonical(route('author',['slug'=>$slug]));

            return view('website.pages.archive', $data);
        }else if ($slug == 'admin'){
            $data = array();
            $data['title'] = 'All Post';
            $data['posts'] = \App\Models\Post::where('status', 'published')->where('published_at', '<=', now())->orderBy('published_at', 'desc')->paginate(9);

            $this->seo()->setTitle("All Posts");
            $this->seo()->setDescription(getSetting('meta_title'));
            $this->seo()->opengraph()->setUrl(route('author',['slug'=>$slug]));
            $this->seo()->setCanonical(route('author',['slug'=>$slug]));

            return view('website.pages.archive', $data);
        }else{
            abort(404);
        }

    }

    public function page_or_post($slug){
        $page = Page::where('slug',$slug)->where('status','published')->first();
        $post = Post::where('slug',$slug)->where('status','published')->where('published_at','<=',Carbon::now())->first();
        if($page){
            $this->seo()->setTitle($page->meta_title??$page->title);
            $this->seo()->setDescription($page->meta_description??'Techyfo - A leading IT company in Bangladesh. With innovative tech ideas, digital developments, excellent clients services we are providing services all over the country.');
            $this->seo()->opengraph()->setUrl(route('page_or_post',['slug'=>$page->slug]));
            $this->seo()->setCanonical(route('page_or_post',['slug'=>$page->slug]));
            return view('website.pages.page',compact('page'));
        }else if($post){
            $this->seo()->setTitle($post->meta_title??$post->title);
            $this->seo()->setDescription($post->meta_description??'Techyfo - A leading IT company in Bangladesh. With innovative tech ideas, digital developments, excellent clients services we are providing services all over the country.');
            $this->seo()->opengraph()->setUrl(route('page_or_post',['slug'=>$post->slug]));
            $this->seo()->setCanonical(route('page_or_post',['slug'=>$post->slug]));
            return view('website.pages.post',compact('post'));
        }
        else{
            abort(404);
        }

    }
    public function service($slug){
        $service = Service::where('slug',$slug)->where('status','published')->first();
        if (!$service){
            abort(404);
        }
        $this->seo()->setTitle($service->meta_title??$service->name);
        $this->seo()->setDescription($service->meta_description??'Techyfo - A leading IT company in Bangladesh. With innovative tech ideas, digital developments, excellent clients services we are providing services all over the country.');
        $this->seo()->opengraph()->setUrl(route('service',['slug'=>$service->slug]));
        $this->seo()->setCanonical(route('service',['slug'=>$service->slug]));

        return view('website.pages.service',compact('service'));
    }
}
