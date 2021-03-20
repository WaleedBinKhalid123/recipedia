<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class IngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('ingredients')->delete();

        foreach ($this->_ingredients() as $key => $dish)
        {
            Ingredient::create($dish);
        }
    }

    /**
     * Production Users
     *
     * @return array[]
     */
    private function _ingredients(): array
    {
        return [
            [
                'name'          => 'beef'
            ],
            [
                'name'          => 'kosher salt'
            ],
            [
                'name'          => 'black pepper'
            ],
            [
                'name'          => 'vegetable oil'
            ],
            [
                'name'          => 'cheese'
            ],
            [
                'name'          => 'hamburger buns'
            ],
            [
                'name'          => 'small red potato'
            ],
            [
                'name'          => 'sea salt'
            ],
            [
                'name'          => 'mayonnaise'
            ],
            [
                'name'          => 'lemon'
            ],
            [
                'name'          => 'dijon mustard'
            ],
            [
                'name'          => 'red onion'
            ],
            [
                'name'          => 'eggs'
            ],
            [
                'name'          => 'smoked paprika'
            ],
            [
                'name'          => 'dill pickle'
            ],
            [
                'name'          => 'chives'
            ],
            [
                'name'          => 'romaine lettuce'
            ],
            [
                'name'          => 'parmesan cheese'
            ],
            [
                'name'          => 'crisp croutons'
            ],
            [
                'name'          => 'caesar salad dressing'
            ],
            [
                'name'          => 'chicken breast'
            ],
            [
                'name'          => 'onion'
            ],
            [
                'name'          => 'bell pepper'
            ],
            [
                'name'          => 'steak sauce'
            ],
            [
                'name'          => 'salt'
            ],
            [
                'name'          => 'idaho potatoes'
            ],
            [
                'name'          => 'unsalted butter'
            ],
            [
                'name'          => 'sour cream'
            ],
            [
                'name'          => 'sugar pumpkin'
            ],
            [
                'name'          => 'cinnamon'
            ],
            [
                'name'          => 'allspice'
            ],
            [
                'name'          => 'cloves'
            ],
            [
                'name'          => 'ginger'
            ],
            [
                'name'          => 'nutmeg'
            ],
            [
                'name'          => 'vanilla'
            ],
            [
                'name'          => 'sugar'
            ],
            [
                'name'          => 'brown sugar'
            ],
            [
                'name'          => 'egg yolk'
            ],
            [
                'name'          => 'half & half'
            ],
            [
                'name'          => 'egg wash'
            ],
            [
                'name'          => 'potato'
            ],
            [
                'name'          => 'pork'
            ],
            [
                'name'          => 'shredded parmesan cheese'
            ],
            [
                'name'          => 'breadcrumbs'
            ],
            [
                'name'          => 'parsley'
            ],
            [
                'name'          => 'worcestershire'
            ],
            [
                'name'          => 'spaghetti'
            ],
            [
                'name'          => 'flour'
            ],
            [
                'name'          => 'tart apple'
            ],
            [
                'name'          => 'lemon juice'
            ],
            [
                'name'          => 'pastry'
            ],
            [
                'name'          => 'egg white'
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
