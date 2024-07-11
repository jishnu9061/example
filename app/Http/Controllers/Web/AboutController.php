<?php

/**
 * Created By: JISHNU T K
 * Date: 2024/07/11
 * Time: 12:18:55
 * Description: AboutController.php
 */

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use App\Models\Outlet;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * About Page
     *
     * @return [type]
     */
    public function index()
    {
        $path = $this->getView('web.about');
        $outLetNames = Outlet::select('id', 'outlet_name')->limit(5)->get();
        $para = ['outLetNames'=>$outLetNames];
        $title = 'Home';
        return $this->renderView($path, $para, $title);
    }
}
