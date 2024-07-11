<?php

namespace App\Http\Helpers;

use App\Http\Constants\FileDestinations;

use App\Http\Helpers\Core\FileManager;

class PartnerHelper
{
    /**
     * get image path of course
     *
     * @param $imageName
     * @return string
     */

    public static function getPartnerImagePath($imageName)
    {
        $file = asset('images/blog.jpg');
        if (null != $imageName) {
            if (FileManager::checkFileExist($imageName, FileDestinations::PARTNER_IMAGE)) {
                $file = FileManager::getFileUrl($imageName, FileDestinations::PARTNER_IMAGE);
            }
        }
        return $file;
    }
}
