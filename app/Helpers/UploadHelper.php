<?php

namespace App\Helpers;

class UploadHelper
{

    /**
     * Upload File
     *
     * @param object $file
     * @param string $fileName
     * @param string $targetLocation
     * @return string file name
     */
    public static function upload($file, $fileName, $targetLocation)
    {
        if (!is_null($file)) {
            $extension = $file->getClientOriginalExtension();
            $fileName .= "." . $extension;
            $file->move($targetLocation, $fileName);
            return $fileName;
        }
        return null;
    }
}
