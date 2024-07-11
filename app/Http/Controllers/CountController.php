<?php

/**
 * Created By: JISHNU T K
 * Date: 2024/07/11
 * Time: 12:25:40
 * Description: CountController.php
 */

namespace App\Http\Controllers;

use App\Http\Helpers\Utilities\ToastrHelper;

use App\Models\Count;

use App\Http\Requests\CountUpdateRequest;

use Illuminate\Http\Request;

class CountController extends Controller
{
    /**
     * @return [type]
     */
    public function create()
    {
        $path = $this->getView('admin.count.create');
        $counts = Count::select('id', 'charging_stations', 'hours_of_charging', 'active_users', 'cities')->first();
        $para = ['counts' => $counts];
        $title = 'Add Count';
        return $this->renderView($path, $para, $title);
    }

    /**
     * @param CountUpdateRequest $request
     * @param Count $count
     *
     * @return [type]
     */
    public function update(CountUpdateRequest $request, Count $count)
    {
        $count->update([
            'charging_stations' => $request->charging_stations,
            'hours_of_charging' => $request->hours_of_charging,
            'active_users' => $request->active_users,
            'cities' => $request->cities
        ]);
        ToastrHelper::success('Count updated successfully');
        return redirect()->back();
    }
}
