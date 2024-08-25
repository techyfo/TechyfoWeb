<?php


use App\Models\Setting;
use App\Models\Testimonial;

if (!function_exists('getTestimonialList')) {
    function getTestimonialList($limit = 5,$service_id = null)
    {
        $query =  Testimonial::where('status', 'published')
            ->orderBy('position', 'asc');

        if ($service_id) {
            $query->where('service_id', $service_id);
        }
        return $query->take($limit)->get();
    }
}
if (!function_exists('getTeamMembers')) {
    function getTeamMembers($limit = 12)
    {
        return \App\Models\TeamMember::where('status', 'published')
            ->orderBy('position', 'asc')
            ->take($limit)
            ->get();
    }
}
if (!function_exists('getCompanyList')) {
    function getCompanyList($limit = 5, $service_id =null)
    {
        $query = \App\Models\CompanyList::where('status', 'published')
            ->orderBy('position', 'asc');
        if ($service_id) {
            $query->where('service_id', $service_id);
        }
        return $query->take($limit)->get();
    }
}
if (!function_exists('getPortfolioCategories')) {
    function getPortfolioCategories($limit = 20)
    {
        return \App\Models\PortfolioCategory::withCount('portfolios')
            ->get()
            ->filter(function ($category) {
                return $category->portfolios_count > 0;
            });
    }
}

if (!function_exists('getPortfolios')) {
    function getPortfolios($limit = 10, $category_id = null)
    {
        $query = \App\Models\Portfolio::where('status', 'published');
        if ($category_id) {
            $query->where('portfolio_category_id', $category_id);
        }
        return $query->take($limit)->get();
    }
}
if (!function_exists('getServices')) {
    function getServices($limit = 8, $parent = null)
    {
        $query = \App\Models\Service::where('status', 'published')->where('parent_id', $parent)->orderBy('priority','desc');
        return $query->take($limit)->get();
    }
}
if (!function_exists('getFaqs')) {
    function getFaqs($limit = 5, $service_id = null)
    {
        $query = \App\Models\Faq::where('status', 'published');
        if ($service_id) {
            $query->where('service_id', $service_id);
        }
        return $query->take($limit)->get();
    }
}
if (!function_exists('getPricePlans')) {
    function getPricePlans($limit = 6, $service_id = null)
    {
        $query = \App\Models\PricePlan::where('status', 'published');
        if ($service_id) {
            $query->where('service_id', $service_id);
        }
        return $query->orderBy('position','asc')->take($limit)->get();
    }
}
if (!function_exists('getSetting')) {
    function getSetting($key, $default = null) {
        $setting = Setting::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }
}

if (!function_exists('setSetting')) {
    function setSetting($key, $value) {
        $setting = Setting::firstOrNew(['key' => $key]);
        $setting->value = $value;
        $setting->save();
    }
}
if (!function_exists('getFeaturedPosts')) {
    function getFeaturedPosts($max = 10, $offset = 0)
    {
        $featuredPosts = \App\Models\Post::where('status', 'published')
            ->where('is_featured', true)
            ->where('published_at', '<=', now())
            ->skip($offset)
            ->take($max)
            ->get();

        return $featuredPosts;
    }
}
if (!function_exists('getTrendingPosts')) {
    function getTrendingPosts($max = 10, $offset = 0)
    {
        $featuredPosts = \App\Models\Post::where('status', 'published')
            ->where('is_trending', true)
            ->where('published_at', '<=', now())
            ->skip($offset)
            ->take($max)
            ->get();

        return $featuredPosts;
    }
}
if (!function_exists('recentPosts')) {
    function recentPosts($max = 9, $offset = 0)
    {
        $recentPosts = \App\Models\Post::where('status', 'published')
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->skip($offset)
            ->take($max)
            ->get();

        return $recentPosts;
    }
}
if (!function_exists('firstString')) {
    function firstString($string, $maxLength = 8) {
        // Remove leading and trailing whitespace
        $string = trim($string);

        // Get the first word of the string
        $firstWord = strtok($string, " \n\t");

        // If the first word is longer than the maximum length, truncate it
        if (strlen($firstWord) > $maxLength) {
            $firstWord = substr($firstWord, 0, $maxLength);
        }

        return $firstWord;
    }
}
if (!function_exists('getPostDescription')) {
    function getPostDescription($post, $max = 150)
    {
        // Check if the post has a description
        if (!empty($post->short_description)) {
            // If description exists, truncate it to 150 characters
            $truncatedDescription = mb_substr(strip_tags($post->short_description), 0, $max);
            // Ensure the description doesn't end in the middle of a word
            $lastSpace = mb_strrpos($truncatedDescription, ' ');
            if ($lastSpace !== false) {
                $truncatedDescription = mb_substr($truncatedDescription, 0, $lastSpace);
            }
            return $truncatedDescription;
        } else {
            // If description is null, truncate body to 150 characters
            $truncatedBody = mb_substr(strip_tags($post->body), 0, $max);
            // Ensure the body doesn't end in the middle of a word
            $lastSpace = mb_strrpos($truncatedBody, ' ');
            if ($lastSpace !== false) {
                $truncatedBody = mb_substr($truncatedBody, 0, $lastSpace);
            }
            return $truncatedBody;
        }
    }
}
if (!function_exists('getCategories')) {
    function getCategories($max = 9, $offset = 0)
    {
        $categories = \App\Models\Category::skip($offset)
            ->take($max)
            ->get();

        return $categories;
    }
}
if (!function_exists('shortenText')) {
    function shortenText($text, $maxLength = 50) {
        // Check if the length of the text exceeds the maximum length
        if (mb_strlen($text) > $maxLength) {
            // If it does, truncate the text to the maximum length
            $shortenedText = mb_substr($text, 0, $maxLength);
            // Append "..." to indicate that the text has been shortened
            $shortenedText .= '...';
            return $shortenedText;
        } else {
            // If the text is already shorter than the maximum length, return it as is
            return $text;
        }
    }
}
if (!function_exists('getImageUrl')) {
    function getImageUrl($path, $width = 100, $height = 50, $alt = 'Image')
    {
        // Generate placeholder image URL using title
        $placeholderUrl = 'https://via.placeholder.com/' . $width . 'x' . $height . '?text=' . urlencode($alt);

        // Check if an image with the provided title exists in the public/images directory
        $imagePath = public_path('uploads/' . $path);
        if (file_exists($imagePath) && $path) {
            return asset('uploads/' . $path );
        }

        // Return placeholder image URL if no image found
        return $placeholderUrl;
    }
}

if (!function_exists('getRandomBootstrapClass')){
    function getRandomBootstrapClass() {
        $bootstrapClasses = ['primary', 'danger', 'success', 'info'];
        $randomIndex = array_rand($bootstrapClasses);
        return $bootstrapClasses[$randomIndex];
    }
}
if (!function_exists('generateFacebookShareLink')){
    function generateFacebookShareLink($url, $quote = '') {
        $baseUrl = 'https://www.facebook.com/sharer/sharer.php';
        $params = [
            'u' => urlencode($url),
            'quote' => urlencode($quote),
        ];
        return $baseUrl . '?' . http_build_query($params);
    }
}
if (!function_exists('generateWhatsAppShareLink')) {
    function generateWhatsAppShareLink($text, $url)
    {
        $baseUrl = 'https://api.whatsapp.com/send';
        $params = [
            'text' => $text . ' , Please visit : ' . $url
        ];
        return $baseUrl . '?' . http_build_query($params);
    }
}


if (!function_exists('generateTableOfContents')) {
    function generateTableOfContents($postBody)
    {
        preg_match_all('/<h2[^>]*>(.*?)<\/h2>/', $postBody, $matches, PREG_SET_ORDER);

        $toc = [];
        $headingCounter = 1; // Initialize the heading counter
        foreach ($matches as $match) {
            $title = strip_tags($match[1]);
            $id = 'heading-' . $headingCounter; // Unique ID for each heading
            $toc[] = "<li><a href=\"#{$id}\">{$title}</a> </li>";
            $headingCounter++;
        }

        return implode("\n", $toc);
    }
}
if (!function_exists('addIdsToHeadings')) {
    function addIdsToHeadings($postBody)
    {
        // Initialize a counter for headings
        $headingCounter = 1;

        // Define a callback function to add the id attribute to each heading match
        $callback = function ($matches) use (&$headingCounter) {
            // Extract the level and title of the heading

            $title = $matches[1];

            // Generate the id attribute with the sequential heading counter
            $id = 'heading-' . $headingCounter;

            // Increment the heading counter for the next heading
            $headingCounter++;

            // Add the id attribute to the heading tag
            return "<h2 id=\"{$id}\">{$title}</h2>";
        };

        // Use a regular expression with a callback to replace each heading tag with the modified version
        return preg_replace_callback('/<h2[^>]*>(.*?)<\/h2>/', $callback, $postBody);
    }
}
