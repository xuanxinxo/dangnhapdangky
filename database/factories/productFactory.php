<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()  // định nghĩa các giá trị cho các thuộc tính của mô hình Product khi tạo dữ liệu giả mạo
    {
        return [
            'name'=>$this->faker->name,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
