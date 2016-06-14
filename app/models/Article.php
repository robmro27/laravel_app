<?php

namespace App\Models;

/**
 * Description of Article
 *
 * @author rmroz
 */
class Article extends \Eloquent {
    
    protected $table = 'articles';
    
    protected $fillable = array('title', 'body', 'slug', 'user_id');
    
    public function author()
    {
        return $this->belongsTo( User::class, 'user_id');
    }
    
}
