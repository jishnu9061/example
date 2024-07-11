<?php

/**
 * Created By: JISHNU T K
 * Date: 2024/07/09
 * Time: 15:50:20
 * Description: DashboardController.php
 */

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Outlet;
use App\Models\Contact;
use App\Models\Enquiry;

use App\Services\DashboardService;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * @param DashboardService $dashboardService
     *
     * @return [type]
     */
    public function index(DashboardService $dashboardService)
    {
        $path = $this->getView('admin.dashboard');
        $outlets = Outlet::select('id', 'outlet_code', 'outlet_name', 'address', 'district', 'state', 'socket_type', 'vehicles', 'amenities','city')->paginate(10);
        $counts =$dashboardService->getDashboardCounts();
        $para = ['outlets' => $outlets,'counts'=>$counts];
        $title = 'Dashboard';
        return $this->renderView($path, $para, $title);
    }
}
