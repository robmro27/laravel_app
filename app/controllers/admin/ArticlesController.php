<?php

namespace App\Controllers\Admin;

use App\Models\Article;
use App\Services\Validators\ArticleValidator;
use Input, Redirect, Sentry, Str, Notification, App\Facades\ImageFacade;

/**
 * Description of ArticlesController
 *
 * @author rmroz
 */
class ArticlesController extends \BaseController {
    
    public function index()
    {
        return \View::make('admin.articles.index')->with('articles', Article::all());
    }
    
    public function show($id)
    {
        return \View::make('admin.articles.show')->with('article', Article::find($id));
    }
    
    public function create()
    {
        return \View::make('admin.articles.create');
    }
    
    public function store()
    {
        $validator = new ArticleValidator;
        
        if ($validator->passes()) 
        {
            $article = new Article;
            $article->title = Input::get('title');
            $article->slug = Str::slug(Input::get('title'));
            $article->body = Input::get('body');
            $article->user_id = Sentry::getUser()->id;
            $article->save();

            if ( Input::hasFile('image') ) {
                $article->image = ImageFacade::upload(Input::file('image'), 'articles/' . $article->id);
                $article->save();
            }
            
            return Redirect::route('admin.pages.edit', $article->id);
        }
        
        return Redirect::back()->withInput()->withErrors($validator->errors);
    }
    
    public function edit($id)
    {
        return \View::make('admin.articles.edit')->with('article', Article::find($id));
    }
    
    public function update($id)
    {
        $validation = new ArticleValidator;
        if ( $validation->passes() ) {
        
            $article = Article::find($id);
            $article->title = Input::get('title');
            $article->slug = Str::slug(Input::get('title'));
            $article->body = Input::get('body');
            $article->user_id = Sentry::getUser()->id;
            $article->save();
            
            if ( Input::hasFile('image') ) {
                
                $article->image = ImageFacade::upload(Input::file('image'), 'articles/' . $article->id);
                $article->save();
            }
            
            Notification::success('The page was saved');
            
            return Redirect::route('admin.articles.edit', $article->id);
            
        }
        
        return Redirect::back()->withInput()->withErrors($validation->errors);
        
    }
    
    public function destroy($id)
    {
        $article = Article::find($id);
        //$article->delete();
        
        return Redirect::route('admin.articles.index');
    }
}
