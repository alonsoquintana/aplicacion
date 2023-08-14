<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\Level;
use App\Models\Category;
use App\Models\Price;

use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CourseSeederFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $title = $this->faker->sentence();

        return [
            'title' => $title,
            'subtitle' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement([Course::BORRADOR, Course::REVISION, Course::PUBLICADO]),
            'slug' => Str::slug($title),
            'user_id' => User::all()->random()->id,
            'level' => Level::all()->random()->id,
            'caregory_id' => Category::all()->random()->id,
            'price_id' => Price::all()->random()->id,
        ];
    }
}
