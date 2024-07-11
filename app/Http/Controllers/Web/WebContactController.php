<?php

/**
 * Created By: JISHNU T K
 * Date: 2024/07/11
 * Time: 12:22:30
 * Description: 'WebContactController.php'
 */

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use App\Models\Outlet;

use Illuminate\Http\Request;

class WebContactController extends Controller
{
    /**
     * @return [type]
     */
    public function index()
    {
        $path = $this->getView('web.contact');
        $outLetNames = Outlet::select('id', 'outlet_name')->limit(5)->get();
        $para = ['outLetNames'=>$outLetNames];
        $title = 'Blog';
        return $this->renderView($path, $para, $title);
    }
}
