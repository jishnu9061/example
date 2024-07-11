<?php

/**
 * Created By: JISHNU T K
 * Date: 2024/07/11
 * Time: 12:28:26
 * Description: PartnerController.php
 */

namespace App\Http\Controllers;

use App\Http\Constants\FileDestinations;

use App\Http\Helpers\Core\FileManager;

use App\Models\Count;
use App\Models\Partner;

use App\Http\Requests\PartnerStoreRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class PartnerController extends Controller
{
    /**
     * @return [type]
     */
    public function index()
    {
        $path = $this->getView('admin.partner.create');
        $partners = Partner::select('id', 'image')->paginate(FileDestinations::PAGE);
        $para = ['partners' => $partners];
        $title = 'Partners';
        return $this->renderView($path, $para, $title);
    }

    /**
     * @param PartnerStoreRequest $request
     *
     * @return [type]
     */
    public function store(PartnerStoreRequest $request)
    {
        if ($request->has('images')) {
            $uploadResult = FileManager::multiUpload(FileDestinations::PARTNER_IMAGE, 'images', FileManager::FILE_TYPE_IMAGE);
            if ($uploadResult['status']) {
                foreach ($uploadResult['data'] as $data) {
                    $partner = new Partner();
                    $partner->image = $data['fileName'];
                    $partner->save();
                }
            }
        }
        return redirect()->route('partner.index');
    }

    /**
     * @param Partner $partner
     *
     * @return [type]
     */
    public function delete(Partner $partner)
    {
        $partner->delete();
        return Response::json(['success' => 'Partner Deleted Successfully']);
    }
}
