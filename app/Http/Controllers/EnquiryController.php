<?php

/**
 * Created By: JISHNU T K
 * Date: 2024/07/11
 * Time: 12:26:52
 * Description: EnquiryController.php
 */

namespace App\Http\Controllers;

use App\Http\Constants\FileDestinations;

use App\Http\Helpers\Utilities\ToastrHelper;

use App\Models\Enquiry;

use App\Http\Requests\EnquiryStoreRequest;

use App\Mail\EnquiryMail;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

class EnquiryController extends Controller
{
    /**
     * @return [type]
     */
    public function index()
    {
        $path = $this->getView('admin.enquiry.index');
        $enquiries = Enquiry::select('id', 'date', 'name', 'phone_no', 'email')->paginate(FileDestinations::PAGE);
        $para = ['enquiries' => $enquiries];
        $title = 'Enquiries';
        return $this->renderView($path, $para, $title);
    }

    /**
     * @param EnquiryStoreRequest $request
     *
     * @return [type]
     */
    public function store(EnquiryStoreRequest $request)
    {
        $enquiry = Enquiry::create([
            'name' => $request->name,
            'phone_no' => $request->phone,
            'email' => $request->email,
            'comment' => $request->message,
            'date' => Carbon::now()->format('Y-m-d')
        ]);
        Mail::to('admin@developer.com')->send(new EnquiryMail($enquiry));
        ToastrHelper::success('Enquiry added successfully');
        return Response::json(['success' => true]);
    }

    /**
     * @param Enquiry $enquiry
     *
     * @return [type]
     */
    public function delete(Enquiry $enquiry)
    {
        $enquiry->delete();
        ToastrHelper::success('Enquiry deleted successfully');
        return Response::json(['success' => 'Enquiry Deleted Successfully']);
    }
}
