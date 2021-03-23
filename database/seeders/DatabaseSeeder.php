<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DishTableSeeder::class,
            IngredientTableSeeder::class,
            DishIngredientTableSeeder::class,
            ImageTableSeeder::class
        ]);
    }

    public function watch()
    {
        return [
            [
                '1name'          => 'beef'
            ],
            [
                '2name'          => 'kosher salt'
            ],
            [
                '3name'          => 'black pepper'
            ],
            [
                '4name'          => 'vegetable oil'
            ],
            [
                '5name'          => 'cheese'
            ],
            [
                '6name'          => 'hamburger buns'
            ],
            [
                '7name'          => 'small red potato'
            ],
            [
                '8name'          => 'sea salt'
            ],
            [
                '9name'          => 'mayonnaise'
            ],
            [
                '10name'          => 'lemon'
            ],
            [
                '11name'          => 'dijon mustard'
            ],
            [
                '12name'          => 'red onion'
            ],
            [
                '13name'          => 'egg'
            ],
            [
                '14name'          => 'smoked paprika'
            ],
            [
                '15name'          => 'dill pickle'
            ],
            [
                '16name'          => 'chives'
            ],
            [
                '17name'          => 'romaine lettuce'
            ],
            [
                '18name'          => 'parmesan cheese'
            ],
            [
                '19name'          => 'crisp croutons'
            ],
            [
                '20name'          => 'caesar salad dressing'
            ],
            [
                '21name'          => 'chicken breast'
            ],
            [
                '22name'          => 'onion'
            ],
            [
                '23name'          => 'bell pepper'
            ],
            [
                '24name'          => 'steak sauce'
            ],
            [
                '25name'          => 'salt'
            ],
            [
                '26name'          => 'idaho potatoes'
            ],
            [
                '27name'          => 'unsalted butter'
            ],
            [
                '28name'          => 'sour cream'
            ],
            [
                '29name'          => 'sugar pumpkin'
            ],
            [
                '30name'          => 'cinnamon'
            ],
            [
                '31name'          => 'allspice'
            ],
            [
                '32name'          => 'cloves'
            ],
            [
                '33name'          => 'ginger'
            ],
            [
                '34name'          => 'nutmeg'
            ],
            [
                '35name'          => 'vanilla'
            ],
            [
                '36name'          => 'sugar'
            ],
            [
                '37name'          => 'brown sugar'
            ],
            [
                '38name'          => 'egg yolk'
            ],
            [
                '39name'          => 'half & half'
            ],
            [
                '40name'          => 'egg wash'
            ],
            [
                '41name'          => 'potato'
            ],
            [
                '42name'          => 'pork'
            ],
            [
                '43name'          => 'breadcrumbs'
            ],
            [
                '44name'          => 'parsley'
            ],
            [
                '45name'          => 'worcestershire'
            ],
            [
                '46name'          => 'spaghetti'
            ],
            [
                '47name'          => 'flour'
            ],
            [
                '48name'          => 'tart apple'
            ],
            [
                '49name'          => 'lemon juice'
            ],
            [
                '50name'          => 'pastry'
            ],
            [
                '51name'          => 'egg white'
            ],
            [
                'name'          => 'italian sausage'
            ],
            [
                'name'          => 'spaghetti sauce'
            ],
            [
                'name'          => 'water'
            ],
            [
                'name'          => 'italian seasoning'
            ],
            [
                'name'          => 'ricotta cheese'
            ],
            [
                'name'          => 'spinach'
            ],
            [
                'name'          => 'mozzarella'
            ],
            [
                'name'          => 'lasagna noddles'
            ],
            [
                'name'          => 'elbow macaroni'
            ],
            [
                'name'          => 'milk'
            ],
            [
                'name'          => 'cheddar cheese'
            ],
            [
                'name'          => 'olive oil'
            ],
            [
                'name'          => 'jalapeno'
            ],
            [
                'name'          => 'chili powder'
            ],
            [
                'name'          => 'tomato paste'
            ],
            [
                'name'          => 'cumin'
            ],
            [
                'name'          => 'dried oregano'
            ],
            [
                'name'          => 'diced tomatoes'
            ],
            [
                'name'          => 'kidney beans'
            ],
            [
                'name'          => 'cilantro leaves'
            ],
            [
                'name'          => 'tender stems'
            ],
            [
                'name'          => 'lime juice'
            ],
            [
                'name'          => 'garlic'
            ],
            [
                'name'          => 'parsley salt'
            ],
            [
                'name'          => 'onion powder'
            ],
            [
                'name'          => 'tomato'
            ],
            [
                'name'          => 'mozzarella'
            ],
            [
                'name'          => 'basil'
            ],
            [
                'name'          => 'ketchup'
            ],
            [
                'name'          => 'thyme'
            ],
            [
                'name'          => 'tortilla chips'
            ],
            [
                'name'          => 'pasta sauce'
            ],
            [
                'name'          => 'pizza crust'
            ],
            [
                'name'          => 'pepperoni slices'
            ],
            [
                'name'          => 'biscuit'
            ],
            [
                'name'          => 'blueberry'
            ],
            [
                'name'          => 'cornstarch'
            ],
            [
                'name'          => 'bbq sauce'
            ],
            [
                'name'          => 'apple cider vinegar'
            ],
            [
                'name'          => 'cayenne pepper'
            ],
            [
                'name'          => 'bacon'
            ],
            [
                'name'          => 'red bell pepper'
            ],
            [
                'name'          => 'pinto beans'
            ],
            [
                'name'          => 'butter beans'
            ],
            [
                'name'          => 'baked beans'
            ],
            [
                'name'          => 'red kidney beans'
            ],
            [
                'name'          => 'molasses'
            ],
            [
                'name'          => 'sauce'
            ],
            [
                'name'          => 'Worcestershire sauce'
            ],
            [
                'name'          => 'canola oil'
            ],
            [
                'name'          => 'seasoned salt'
            ],
            [
                'name'          => 'red paper flakes'
            ],
            [
                'name'          => 'red pepper'
            ],
            [
                'name'          => 'green pepper'
            ],
            [
                'name'          => 'baking powder'
            ],
            [
                'name'          => 'yellow mustard'
            ],
            [
                'name'          => 'tortillas'
            ],
        ];
    }
}
