<?php

namespace App\Services\Validators;

/**
 * Description of ArticleValidator
 *
 * @author rmroz
 */
class ArticleValidator extends Validator {
    
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );
    
}
