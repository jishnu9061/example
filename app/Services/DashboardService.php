<?php

namespace App\Services;

use App\Models\Blog;
use App\Models\Outlet;
use App\Models\Enquiry;
use App\Models\Contact;

class DashboardService
{
    public function getDashboardCounts()
    {
        return [
            'blogs' => Blog::count(),
            'outlets' => Outlet::count(),
            'enquiries' => Enquiry::count(),
            'contactMails' => Contact::count(),
        ];
    }
}
