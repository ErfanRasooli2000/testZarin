<?php

namespace Modules\User\database\Factory;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\User\Models\User;
use Modules\User\Models\UserFollow;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\User\Models\UserFollow>
 */
class UserFollowFactory extends Factory
{
    protected $model = UserFollow::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => $this->faker->numberBetween(1,10),
            "page_id" => $this->faker->numberBetween(1,40)
        ];
    }
}
