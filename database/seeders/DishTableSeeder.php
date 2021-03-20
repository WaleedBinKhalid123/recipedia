<?php

namespace Database\Seeders;

use App\Models\dish;
use Illuminate\Database\Seeder;

class DishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('dishes')->delete();

        foreach ($this->_dishes() as $key => $dish)
        {
            Dish::create($dish);
        }
    }


    /**
     * Production Users
     *
     * @return array[]
     */
    private function _dishes(): array
    {
        return [
            [
                'name'          => 'Hamburger',
                'quote'         => 'for 2 hamburgers',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Potato Salad',
                'quote'         => 'for 4 servings',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Caeser Salad',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Steak Chicken',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Buttery Mashed Potatoes',
                'quote'         => 'for 6 servings',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Pumpkin Pie',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Spaghetti Meatball',
                'quote'         => 'for 4 servings',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Apple Pie',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Spinach and Sausage lasagna',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Mac and Cheese',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Pot Beef Chili',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Chicken Parmesan',
                'quote'         => 'for 6 servings',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'MeatLoaf',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Nachos',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Pepperoni Pizza',
                'quote'         => '6 pieces',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Blueberry Cobbler',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Barbeque Ribs',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Baked Beans',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Fajitas',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Pancakes',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ];
    }

}
