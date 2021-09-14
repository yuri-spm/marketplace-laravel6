<?php

namespace App\Traits;
use Illuminate\Http\Request;
trait UploadTrait
{

    /**
     * Method imageUpload
     *
     * @param $images $images
     * @param $imageColumn $imageColumn 
     *
     * @return void
     */
    private function imageUpload($images, $imageColumn = null)
    {
        $uploadedImages = [];

        if(is_array($images)){

            foreach ($images as $image){
                $uploadedImages[] = [$imageColumn => $image->store('products', 'public')];
            }

            }else{
                $uploadedImages = $images->store('logo', 'public');
            }

        return $uploadedImages;
    }
}
