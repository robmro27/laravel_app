<?php

namespace App\Services\Validators;

/**
 * Description of PageValidator
 *
 * @author rmroz
 */
class PageValidator extends Validator {
    
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );
    
}
