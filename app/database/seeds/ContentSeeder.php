<?php

//use App\Models\Page;
use App\Models\Article;

/**
 * Description of ContentSeeder
 *
 * @author rmroz
 */
class ContentSeeder extends Seeder {
    
    public function run()
    {
        DB::table('articles')->delete();
        DB::table('pages')->delete();
        
        App\Models\Page::create(array(
            'title' => 'About us',
            'slug' => 'about-us',
            'body' => 'Lorem ...',
            'user_id' => 1,
        ));
        
        Article::create(array(
            'title' => 'First post',
            'slug' => 'first-post',
            'body' => 'Lorem ...',
            'user_id' => 1,
        ));
        
    }
    
}
