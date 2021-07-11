<?php

namespace Database\Factories;

use App\Models\DismissalReason;
use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Worker::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstNameMale(),
            'last_name' => $this->faker->lastName('male'),
            'middle_name' => $this->faker->middleNameMale(),
            'leader_id' => Worker::inRandomOrder()->limit(1)->first(),
            'position_id' => rand(1, 8),
//            'salary' => rand(3000, 15000),
            'employment_date' => $this->faker->date(),
        ];
    }

    public function user()
    {
        return $this->state(function (array $attributes) {
            return [
                'position_id' => rand(9, 20),
            ];
        });
    }

    public function dismissed()
    {
        return $this->state(function (array $attributes) {
            return [
                'position_id' => rand(9, 20),
                'leader_id' => rand(2, 11),
                'employment_date' => $this->faker->dateTimeBetween('-10 years', '-1 years')->format('Y-m-d'),
                'dismissal_date' => $this->faker->dateTimeBetween('-1 years', '-1 days')->format('Y-m-d'),
                'dismissal_reason_id' => DismissalReason::inRandomOrder()->limit(1)->first(),
            ];
        });
    }

    public function trial()
    {
        return $this->state(function (array $attributes) {
            return [
                'position_id' => rand(9, 20),
                'leader_id' => rand(2, 11),
                'employment_date' => $this->faker->dateTimeBetween('-90 days')->format('Y-m-d'),
            ];
        });

    }

    public function leader()
    {
        return $this->state(function (array $attributes) {
            return [
                'leader_id' => null,
                'position_id' => 1,
            ];
        });

    }
}
