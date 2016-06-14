<?php

namespace App\Models;

/**
 * Description of Page
 *
 * @author rmroz
 */
class Page extends \Eloquent {
    
    protected $table = 'pages';
    
    protected $fillable = array('title', 'body', 'slug', 'user_id');
    
    public function author()
    {
        return $this->belongsTo(User::class);
    }
    
}
