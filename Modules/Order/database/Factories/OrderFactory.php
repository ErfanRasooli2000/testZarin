<?php

namespace Modules\Order\database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Order\Enums\OrderStatusEnum;
use Modules\Order\Models\Order;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Order\Models\Order>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "count" => $this->faker->numberBetween(10,200),
            'status' => OrderStatusEnum::Progress->value,
            "page_id" => $this->faker->numberBetween(1,40),
            "created_by" => $this->faker->numberBetween(1,10),
        ];
    }
}
