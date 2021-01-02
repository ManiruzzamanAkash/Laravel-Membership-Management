<?php

namespace App\Helpers;
use File;

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

    /**
     * Update File
     *
     * @param object $file
     * @param string $fileName
     * @param string $targetLocation
     * @return string file name
     */
    public static function update($file, $fileName, $targetLocation, $database_file_name)
    {
        if (!is_null($file)) {
            // Check if an image exist in that folder with this targetLocation/name
            $existingImage = $targetLocation . "/" . $database_file_name;   // images/users/user-14.jpg
            if(File::exists($existingImage)){
                File::delete($existingImage);
            }

            $extension = $file->getClientOriginalExtension();
            $fileName .= "." . $extension;
            $file->move($targetLocation, $fileName);
            return $fileName;
        }
        return null;
    }

    public static function delete($file_address)
    {
       if(File::exists($file_address)){
            File::delete($file_address);
            return true;
        }
        return false;
    }
}
