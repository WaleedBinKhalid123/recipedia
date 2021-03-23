<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('images')->delete();

        foreach ($this->_images() as $key => $dish)
        {
            Image::create($dish);
        }
    }

    /**
     * Production Users
     *
     * @return array[]
     */
    private function _images(): array
    {
        return [
            [
                'dish_id' => 1,
                'path' => 'assets/images/dish/1.jpg',
            ],
            [
                'dish_id' => 2,
                'path' => 'assets/images/dish/2.jpg',
            ],[
                'dish_id' => 3,
                'path' => 'assets/images/dish/3.jpg',
            ],[
                'dish_id' => 4,
                'path' => 'assets/images/dish/4.jpg',
            ],[
                'dish_id' => 5,
                'path' => 'assets/images/dish/5.jpg',
            ],[
                'dish_id' => 6,
                'path' => 'assets/images/dish/6.jpg',
            ],[
                'dish_id' => 7,
                'path' => 'assets/images/dish/7.jpg',
            ],[
                'dish_id' => 8,
                'path' => 'assets/images/dish/8.jpg',
            ],[
                'dish_id' => 9,
                'path' => 'assets/images/dish/9.jpg',
            ],[
                'dish_id' => 10,
                'path' => 'assets/images/dish/10.jpg',
            ],[
                'dish_id' => 11,
                'path' => 'assets/images/dish/11.jpg',
            ],[
                'dish_id' => 12,
                'path' => 'assets/images/dish/12.jpg',
            ],[
                'dish_id' => 13,
                'path' => 'assets/images/dish/13.jpg',
            ],[
                'dish_id' => 14,
                'path' => 'assets/images/dish/14.jpg',
            ],[
                'dish_id' => 15,
                'path' => 'assets/images/dish/15.jpg',
            ],[
                'dish_id' => 16,
                'path' => 'assets/images/dish/16.jpg',
            ],[
                'dish_id' => 17,
                'path' => 'assets/images/dish/17.jpg',
            ],[
                'dish_id' => 18,
                'path' => 'assets/images/dish/18.jpg',
            ],[
                'dish_id' => 19,
                'path' => 'assets/images/dish/19.jpg',
            ],[
                'dish_id' => 20,
                'path' => 'assets/images/dish/20.jpg',
            ],
        ];
    }
}
