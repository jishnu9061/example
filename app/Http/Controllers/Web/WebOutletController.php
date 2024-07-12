<?php

/**
 * Created By: JISHNU T K
 * Date: 2024/07/11
 * Time: 12:22:51
 * Description: WebOutletController.php
 */

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use App\Models\Outlet;

use Illuminate\Http\Request;

class WebOutletController extends Controller
{
    /**
     * @param Request $request
     *
     * @return [type]
     */
    public function index(Request $request)
    {
        $path = $this->getView('web.outlet');
        $query = Outlet::select('id', 'outlet_code', 'outlet_name', 'city', 'district', 'state', 'map', 'socket_type', 'vehicles', 'amenities', 'address','image');
        if ($request->filled('city_search')) {
            $query->where('city', 'like', '%' . $request->input('city_search') . '%');
        }

        // Sort by city
        if ($request->filled('city_sort')) {
            $query->where('city', 'like', '%' . $request->input('city_sort') . '%');
        }

        // Sort by vehicle
        if ($request->filled('vehicle_sort')) {
            $query->where('vehicles', 'like', '%' . $request->input('vehicle_sort') . '%');
        }

        // Sort by socket
        if ($request->filled('state_sort')) {
            $query->where('state', 'like', '%' . $request->input('state_sort') . '%');
        }

        // Sort by state
        if ($request->filled('state_sort')) {
            $query->where('state', 'like', '%' . $request->input('city_search') . '%');
        }

        // Sort by socket
        if ($request->filled('socket_sort')) {
            $query->where('socket_type', 'like', '%' . $request->input('socket_sort') . '%');
        }

        $outlets = $query->get();
        $outLetNames = Outlet::select('id', 'outlet_name')->limit(5)->get();
        $para = ['outlets' => $outlets,'outLetNames'=>$outLetNames];
        $title = 'Outlet';
        return $this->renderView($path, $para, $title);
    }

    /**
     * @param Outlet $outlet
     *
     * @return [type]
     */
    public function outletDetailPage(Outlet $outlet)
    {
        $path = $this->getView('web.outlet-detail');
        $stations = Outlet::select('id', 'district', 'address')->get();
        $outLetNames = Outlet::select('id', 'outlet_name')->limit(5)->get();
        $para = ['outlet' => $outlet, 'stations' => $stations, 'outLetNames' => $outLetNames];
        $title = 'outlet';
        return $this->renderView($path, $para, $title);
    }
}
