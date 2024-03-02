<?php

namespace Modules\User\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Auth;
use Modules\User\Models\UserFollow;

class chackHasFollowed implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (UserFollow::where('user_id' , Auth::id())->where("page_id" , $value)->exists())
            $fail("شما قبلا این صفحه را دنبال کرده اید.");
    }
}
