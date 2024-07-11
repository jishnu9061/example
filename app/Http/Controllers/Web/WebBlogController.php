<?php

/**
 * Created By: JISHNU T K
 * Date: 2024/07/11
 * Time: 12:21:59
 * Description: 'WebBlogController.php'
 */

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use App\Models\Blog;
use App\Models\Outlet;

use Illuminate\Http\Request;

class WebBlogController extends Controller
{
    /**
     * BlogPage
     *
     * @return [type]
     */
    public function index()
    {
        $path = $this->getView('web.blog');
        $posts = Blog::select('id', 'title', 'images', 'blog_details', 'created_at')->latest()->limit(80)->paginate(8);
        $blogs = Blog::select('id', 'title', 'images', 'blog_details', 'created_at')->latest()->limit(5)->get();
        $outLetNames = Outlet::select('id', 'outlet_name')->limit(5)->get();
        $para = ['posts' => $posts, 'blogs' => $blogs, 'outLetNames' => $outLetNames];
        $title = 'Blog';
        return $this->renderView($path, $para, $title);
    }

    /**
     * BlogDetailPage
     *
     * @param Request $request
     * @param Blog $blog
     *
     * @return [type]
     */
    public function blogDetailPage(Request $request, Blog $blog)
    {
        $path = $this->getView('web.blog-detail');
        $query = Blog::select('id', 'title', 'images', 'blog_details', 'created_at')->latest()->limit(3);
        $outLetNames = Outlet::select('id', 'outlet_name')->limit(5)->get();
        if ($request->filled('title')) {
            $query->where('title', 'like', '%' . $request->input('title') . '%');
        }
        $posts = $query->get();
        $para = ['posts' => $posts, 'blog' => $blog, 'outLetNames' => $outLetNames];
        $title = 'Blog Detail';
        return $this->renderView($path, $para, $title);
    }
}
