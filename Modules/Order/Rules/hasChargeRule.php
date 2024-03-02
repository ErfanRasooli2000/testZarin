<?php

namespace Modules\Order\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Auth;
use Modules\Transaction\Facades\Transaction;

class hasChargeRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (Transaction::getCharge(Auth::user()) < $value*4)
            $fail('شارژ حساب شما برای ثبت این سفارش کم است. لطفا حسابتان را شارژ کنید.');
    }
}
