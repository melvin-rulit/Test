<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class IsValidStateInUSA implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     * 
     */



    public function passes($attribute, $value)
    {
//Если нам нужно, чтобы поле state в файле App\Http\Controllers\Api\Auth\RegisterController; было по этому типу

        return in_array(strtoupper($value), [
          'AL',
          'AK',
          'AZ',
        ]);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Это недействительный код штата в США.';
    }
}
