<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use App\Models\Blog;
use App\Models\Count;
use App\Models\Outlet;
use App\Models\Partner;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * HomePage
     *
     * @return [type]
     */
    public function index()
    {
        $path = $this->getView('web.home');
        $partners = Partner::select('id', 'image')->get();
        $counts = Count::find(1);
        $blogs = Blog::select('id', 'title', 'images', 'blog_details', 'created_at')->latest()->limit(3)->get();
        $outlets = Outlet::select('id', 'city')->limit(4)->get();
        $outLetNames = Outlet::select('id', 'outlet_name')->limit(5)->get();
        $para = ['partners' => $partners, 'counts' => $counts, 'blogs' => $blogs, 'outlets' => $outlets, 'outLetNames' => $outLetNames];
        $title = 'Home';
        return $this->renderView($path, $para, $title);
    }
}
