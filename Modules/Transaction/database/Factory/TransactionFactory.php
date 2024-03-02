<?php

namespace Modules\Transaction\database\Factory;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Transaction\Enums\TransactionTypeEnum;
use Modules\Transaction\Models\Transaction;
use Modules\User\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TransactionFactory extends Factory
{
    protected $model = Transaction::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "value" => $this->faker->numberBetween(-100 , 250),
            "user_id" => $this->faker->numberBetween(1, 10),
            "type" => TransactionTypeEnum::Charge->value
        ];
    }
}
