<?php
/**
 * Created by PhpStorm.
 * User: MasashiHiraishi
 * Date: 2018/10/20
 * Time: 10:37
 */
namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class HelloValidator extends Validator
{
    public function validateHello($attribute,$value,$parameters)
    {
        return $value % 2 ==0;
    }
}
