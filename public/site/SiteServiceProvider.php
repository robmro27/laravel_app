<?php

namespace App\Site;

/**
 * Description of SiteServiceProvider
 *
 * @author rmroz
 */
class SiteServiceProvider extends \Illuminate\Support\ServiceProvider {
    
    public function boot()
    {
        //$this->package('app/site', 'site', public_path(). 'site/');
        $this->package('app/site', null, __DIR__);
    }
    
    public function register() {
        
        require public_path() . '/site/routes.php';
        
    }
    
}
