<?php

namespace Modules\User\database\Factory;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\User\Models\UserPage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\User\Models\UserPage>
 */
class UserPageFactory extends Factory
{
    protected $model = UserPage::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => $this->faker->numberBetween(1, 10),
            "instagram_id" => $this->faker->numberBetween(111,999999),
            "page_name" => $this->faker->userName(),
        ];
    }
}
