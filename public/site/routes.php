<?php

Route::get('/', array('as' => 'home', function() {
    return View::make('site::index')->with('entry', Page::where('slug', 'home')->first());
}));

Route::get('blog', array('as' => 'article.list', function() {
    return View::make('site::articles')->with('entries', Article::with('author')->orderBy('created_at', 'desc')->get());
}));

Route::get('blog/{slug}', array('as' => 'article', function($slug) {
    return View::make('site::article')->with('entry', Article::where('slug', $slug)->first());
}));

Route::get('{slug}',array('as' => 'page', function($slug) {
    return View::make('site::page')->with('entry', Page::where('slug', $slug)->first());
}))->where('slug', '^((?!admin).)*$');