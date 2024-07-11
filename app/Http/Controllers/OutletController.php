<?php

/**
 * Created By: JISHNU T K
 * Date: 2024/07/09
 * Time: 17:13:49
 * Description: OutletController.php
 */

namespace App\Http\Controllers;

use App\Http\Constants\FileDestinations;

use App\Http\Helpers\Core\FileManager;

use App\Models\Outlet;

use App\Http\Requests\OutletStoreRequest;
use App\Http\Requests\OutletUpdateRequest;
use App\Http\Helpers\Utilities\ToastrHelper;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class OutletController extends Controller
{
    /**
     * @return [type]
     */
    public function index()
    {
        $path = $this->getView('admin.outlet.index');
        $outlets = Outlet::select('id', 'outlet_code', 'outlet_name', 'address', 'district', 'state', 'socket_type', 'vehicles', 'amenities', 'city', 'map','image')->paginate(10);
        $para = ['outlets' => $outlets];
        $title = 'Outlets';
        return $this->renderView($path, $para, $title);
    }

    /**
     * @return [type]
     */
    public function create()
    {
        $path = $this->getView('admin.outlet.create');
        $para = [];
        $title = 'Create Outlet';
        return $this->renderView($path, $para, $title);
    }

    /**
     * @param OutletStoreRequest $request
     *
     * @return [type]
     */
    public function store(OutletStoreRequest $request)
    {
        try {
            $outlet = Outlet::create([
                'outlet_code' => $request->input('outlet_code'),
                'outlet_name' => $request->input('outlet_name'),
                'address' => $request->input('address'),
                'city' => $request->input('city'),
                'district' => $request->input('district'),
                'state' => $request->input('state'),
                'map' => $request->input('map'),
                'socket_type' => $request->input('socket_type'),
                'vehicles' => $request->input('vehicles'),
                'amenities' => $request->input('amenities'),
            ]);
            if ($request->hasFile('image')) {
                $res = FileManager::upload(FileDestinations::OUTLET_IMAGE, 'image', FileManager::FILE_TYPE_IMAGE);
                if ($res['status']) {
                    $outlet->image = $res['data']['fileName'];
                    $outlet->save();
                }
            }
            ToastrHelper::success('Outlet added successfully');
            return redirect()->route('outlet.index');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create outlet. ' . $e->getMessage());
        }
    }

    /**
     * @param Outlet $outlet
     *
     * @return [type]
     */
    public function edit(Outlet $outlet)
    {
        $path = $this->getView('admin.outlet.edit');
        $para = ['outlet' => $outlet];
        $title = 'Edit Outlet';
        return $this->renderView($path, $para, $title);
    }

    /**
     * @param OutletUpdateRequest $request
     * @param Outlet $outlet
     *
     * @return [type]
     */
    public function update(OutletUpdateRequest $request, Outlet $outlet)
    {
        $outlet->update([
            'outlet_code' => $request->input('outlet_code'),
            'outlet_name' => $request->input('outlet_name'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'district' => $request->input('district'),
            'state' => $request->input('state'),
            'map' => $request->input('map'),
            'socket_type' => $request->input('socket_type'),
            'vehicles' => $request->input('vehicles'),
            'amenities' => $request->input('amenities'),
        ]);
        if ($request->hasFile('image')) {
            $res = FileManager::upload(FileDestinations::OUTLET_IMAGE, 'image', FileManager::FILE_TYPE_IMAGE);
            if ($res['status']) {
                $outlet->image = $res['data']['fileName'];
                $outlet->save();
            }
        }
        ToastrHelper::success('Outlet updated successfully');
        return redirect()->route('outlet.index');
    }

    /**
     * @param Outlet $outlet
     *
     * @return [type]
     */
    public function delete(Outlet $outlet)
    {
        $outlet->delete();
        ToastrHelper::success('Outlet deleted successfully');
        return Response::json(['success' => 'Outlet Deleted Successfully']);
    }
}
