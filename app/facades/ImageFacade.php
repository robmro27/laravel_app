<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Description of ImageFacade
 *
 * @author rmroz
 */
class ImageFacade  extends Facade {
    
    protected static function getFacadeAccessor() 
    {
        return new \App\Services\Image();
    }
    
}
