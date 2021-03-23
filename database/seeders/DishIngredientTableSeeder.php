<?php

namespace Database\Seeders;

use App\Models\Dish_Ingredient;
use Illuminate\Database\Seeder;

class DishIngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('dish__ingredients')->delete();

        foreach ($this->_dishIngredients() as $key => $dishIngredient) {
            Dish_Ingredient::create($dishIngredient);
        }
    }

    /**
     * Production Users
     *
     * @return array[]
     */
    private function _dishIngredients(): array
    {
        return [
            [
                'dish_id' => 1,
                'ingredient_id' => 1,
                'quantity' => 340,
                'unit' => 'gram',
                'quote' => '12 oz ground beef(340 g)',
            ],
            [
                'dish_id' => 1,
                'ingredient_id' => 2,
                'quote' => 'kosher salt, to taste',
            ],
            [
                'dish_id' => 1,
                'ingredient_id' => 3,
                'quote' => 'freshly ground black pepper',
            ],
            [
                'dish_id' => 1,
                'ingredient_id' => 4,
                'unit' => '1 tablespoon vegetable oil',
            ],
            [
                'dish_id' => 1,
                'ingredient_id' => 5,
                'quantity' => 2,
                'unit' => 'slices',
                'quote' => '2 slices cheese, such as swiss, cheddar, or american, optional',
            ],
            [
                'dish_id' => 1,
                'ingredient_id' => 6,
                'quantity' => 2,
                'quote' => '2 hamburger buns',
            ],
            [
                'dish_id' => 2,
                'ingredient_id' => 7,
                'quantity' => 680,
                'unit' => 'gram',
                'quote' => '1 ½ lb small red potato(680 g), cleaned and unpeeled',
            ],
            [
                'dish_id' => 2,
                'ingredient_id' => 8,
                'quote' => 'fine sea salt, to taste',
            ],
            [
                'dish_id' => 2,
                'ingredient_id' => 9,
                'quantity' => 120,
                'unit' => 'gram',
                'quote' => '½ cup mayonnaise(120 g)',
            ],
            [
                'dish_id' => 2,
                'ingredient_id' => 10,
                'quote' => '½ lemon, juiced',
            ],
            [
                'dish_id' => 2,
                'ingredient_id' => 11,
                'quote' => '2 teaspoons dijon mustard',
            ],
            [
                'dish_id' => 2,
                'ingredient_id' => 12,
                'quantity' => 75,
                'unit' => 'gram',
                'quote' => '¼ cup red onion(75 g), finely chopped',
            ],
            [
                'dish_id' => 2,
                'ingredient_id' => 13,
                'quantity' => 2,
                'quote' => '2 hard-boiled eggs, coarsely chopped',
            ],
            [
                'dish_id' => 2,
                'ingredient_id' => 14,
                'quote' => '¼ teaspoon smoked paprika',
            ],
            [
                'dish_id' => 2,
                'ingredient_id' => 3,
                'quote' => 'freshly ground black pepper, to taste',
            ],
            [
                'dish_id' => 2,
                'ingredient_id' => 15,
                'quantity' => 50,
                'unit' => 'gram',
                'quote' => '⅓ cup dill pickle(50 g), coarsely chopped',
            ],
            [
                'dish_id' => 2,
                'ingredient_id' => 16,
                'quote' => '2 tablespoons chives, finely chopped, plus more for garnis',
            ],
            [
                'dish_id' => 3,
                'ingredient_id' => 17,
                'quote' => '1 large or 2 small heads of romaine lettuce',
            ],
            [
                'dish_id' => 3,
                'ingredient_id' => 18,
                'quote' => 'Parmesan cheese, shredded or shaved',
            ],
            [
                'dish_id' => 3,
                'ingredient_id' => 19,
                'quote' => 'Crisp croutons – homemade can be made several days ahead. The recipe below makes enough for 2 salads.',
            ],
            [
                'dish_id' => 3,
                'ingredient_id' => 20,
                'quote' => 'Caesar salad dressing',
            ],
            [
                'dish_id' => 4,
                'ingredient_id' => 21,
                'quantity' => 4,
                'quote' => '4 chicken breasts',
            ],
            [
                'dish_id' => 4,
                'ingredient_id' => 22,
                'quantity' => 0.5,
                'quote' => '½ onion, finely chopped',
            ],
            [
                'dish_id' => 4,
                'ingredient_id' => 23,
                'quantity' => 0.5,
                'quote' => '½ green bell pepper, finely chopped',
            ],
            [
                'dish_id' => 4,
                'ingredient_id' => 24,
                'quote' => '1 ½ cups American Garden Steak Sauce',
            ],
            [
                'dish_id' => 4,
                'ingredient_id' => 25,
                'quote' => '¼ tsp salt',
            ],
            [
                'dish_id' => 4,
                'ingredient_id' => 3,
                'quote' => '¼ tsp black pepper',
            ],
            [
                'dish_id' => 4,
                'ingredient_id' => 4,
                'quote' => '2 tbsp vegetable oil',
            ],
            [
                'dish_id' => 5,
                'ingredient_id' => 26,
                'quantity' => 6,
                'quote' => '6 idaho potatoes, peeled (about 4 pounds)',
            ],
            [
                'dish_id' => 5,
                'ingredient_id' => 2,
                'quote' => '1 tablespoon kosher salt, plus more to taste',
            ],
            [
                'dish_id' => 5,
                'ingredient_id' => 27,
                'quantity' => 3,
                'quote' => '3 sticks unsalted butter, melted',
            ],
            [
                'dish_id' => 5,
                'ingredient_id' => 28,
                'quantity' => 8,
                'unit' => 'oz',
                'quote' => '8 oz sour cream',
            ],
            [
                'dish_id' => 6,
                'ingredient_id' => 29,
                'quantity' => 1.1,
                'unit' => 'kg',
                'quote' => '2 ½ lb sugar pumpkin(1.1 kg)',
            ],
            [
                'dish_id' => 6,
                'ingredient_id' => 30,
                'quote' => '1 teaspoon cinnamon',
            ],
            [
                'dish_id' => 6,
                'ingredient_id' => 31,
                'quote' => '⅛ teaspoon allspice',
            ],
            [
                'dish_id' => 6,
                'ingredient_id' => 32,
                'quote' => '⅛ teaspoon cloves',
            ],
            [
                'dish_id' => 6,
                'ingredient_id' => 33,
                'quote' => '¼ teaspoon ginger',
            ],
            [
                'dish_id' => 6,
                'ingredient_id' => 34,
                'quote' => '¼ teaspoon nutmeg',
            ],
            [
                'dish_id' => 6,
                'ingredient_id' => 2,
                'quote' => '½ teaspoon kosher salt',
            ],
            [
                'dish_id' => 6,
                'ingredient_id' => 35,
                'quote' => '1 teaspoon vanilla',
            ],
            [
                'dish_id' => 6,
                'ingredient_id' => 36,
                'quantity' => 100,
                'unit' => 'gram',
                'quote' => '½ cup granulated sugar(100 g)',
            ],
            [
                'dish_id' => 6,
                'ingredient_id' => 37,
                'quantity' => 110,
                'unit' => 'gram',
                'quote' => '½ cup brown sugar(110 g)',
            ],
            [
                'dish_id' => 6,
                'ingredient_id' => 13,
                'quantity' => 3,
                'quote' => '3 large eggs',
            ],
            [
                'dish_id' => 6,
                'ingredient_id' => 38,
                'quantity' => 1,
                'quote' => '1 large egg yolk',
            ],
            [
                'dish_id' => 6,
                'ingredient_id' => 39,
                'quantity' => 300,
                'unit' => 'ml',
                'quote' => '1 ¼ cups half & half(300 mL)',
            ],
            [
                'dish_id' => 6,
                'ingredient_id' => 40,
                'quote' => 'egg wash',
            ],
            [
                'dish_id' => 7,
                'ingredient_id' => 22,
                'quantity' => 1,
                'quote' => '1 onion, peeled and halved',
            ],
            [
                'dish_id' => 7,
                'ingredient_id' => 41,
                'quantity' => 795,
                'unit' => 'gram',
                'quote' => '28 oz crushed tomato(795 g), 1 can',
            ],
            [
                'dish_id' => 7,
                'ingredient_id' => 27,
                'quantity' => 115,
                'unit' => 'gram',
                'quote' => '½ cup unsalted butter(115 g)',
            ],
            [
                'dish_id' => 7,
                'ingredient_id' => 25,
                'quote' => '1 teaspoon salt',
            ],
            [
                'dish_id' => 7,
                'ingredient_id' => 42,
                'quantity' => 445,
                'unit' => 'gram',
                'quote' => '1 lb ground pork(455 g)',
            ],
            [
                'dish_id' => 7,
                'ingredient_id' => 1,
                'quantity' => 455,
                'unit' => 'gram',
                'quote' => '1 lb ground beef(455 g)',
            ],
            [
                'dish_id' => 7,
                'ingredient_id' => 22,
                'quantity' => 1,
                'quote' => '1 onion, finely chopped',
            ],
            [
                'dish_id' => 7,
                'ingredient_id' => 32,
                'quantity' => 2,
                'quote' => '2 cloves garlic, minced',
            ],
            [
                'dish_id' => 7,
                'ingredient_id' => 18,
                'quantity' => 100,
                'unit' => 'gram',
                'quote' => '1 cup shredded parmesan cheese(100 g)',
            ],
            [
                'dish_id' => 7,
                'ingredient_id' => 43,
                'quantity' => 50,
                'unit' => 'gram',
                'quote' => '1 cup panko breadcrumbs(50 g)',
            ],
            [
                'dish_id' => 7,
                'ingredient_id' => 44,
                'quantity' => 25,
                'unit' => 'gram',
                'quote' => '¾ cup fresh parsley(25 g), finely chopped',
            ],
            [
                'dish_id' => 7,
                'ingredient_id' => 45,
                'quote' => '2 tablespoons worcestershire',
            ],
            [
                'dish_id' => 7,
                'ingredient_id' => 13,
                'quantity' => 1,
                'quote' => '1 egg',
            ],
            [
                'dish_id' => 7,
                'ingredient_id' => 25,
                'quantity' => 2,
                'quote' => '2 teaspoons salt',
            ],
            [
                'dish_id' => 7,
                'ingredient_id' => 3,
                'quantity' => 1,
                'quote' => '1 teaspoon black pepper',
            ],
            [
                'dish_id' => 7,
                'ingredient_id' => 46,
                'quantity' => 455,
                'unit' => 'gram',
                'quote' => '1 lb spaghetti(455 g)',
            ],
            [
                'dish_id' => 7,
                'ingredient_id' => 18,
                'quote' => 'parmesan cheese, to serve',
            ],
            [
                'dish_id' => 8,
                'ingredient_id' => 36,
                'quote' => '1/2 cup sugar',
            ],
            [
                'dish_id' => 8,
                'ingredient_id' => 37,
                'quote' => '1/2 cup packed brown sugar',
            ],
            [
                'dish_id' => 8,
                'ingredient_id' => 47,
                'quote' => '3 tablespoons all-purpose flour',
            ],
            [
                'dish_id' => 8,
                'ingredient_id' => 30,
                'quote' => '1 teaspoon ground cinnamon',
            ],
            [
                'dish_id' => 8,
                'ingredient_id' => 33,
                'quote' => '1/4 teaspoon ground ginger',
            ],
            [
                'dish_id' => 8,
                'ingredient_id' => 34,
                'quote' => '1/4 teaspoon ground nutmeg',
            ],
            [
                'dish_id' => 8,
                'ingredient_id' => 48,
                'quote' => '6 to 7 cups thinly sliced peeled tart apples',
            ],
            [
                'dish_id' => 8,
                'ingredient_id' => 49,
                'quote' => '1 tablespoon lemon juice',
            ],
            [
                'dish_id' => 8,
                'ingredient_id' => 50,
                'quote' => 'Pastry for double-crust pie',
            ],
            [
                'dish_id' => 8,
                'ingredient_id' => 27,
                'quote' => '1 tablespoon butter',
            ],
            [
                'dish_id' => 8,
                'ingredient_id' => 51,
                'quote' => '1 large egg white',
            ],

        ];
    }
}


//•	1 pound bulk Italian sausage
//•	1 jar (24 ounces) garden-style spaghetti sauce
//•	1/2 cup water
//•	1 teaf                                  spoon Italian seasoning
//•	1/2 teaspoon salt
//•	1 carton (15 ounces) ricotta cheese
//•	1 package (10 ounces) frozen chopped spinach, thawed and squeezed dry
//•	2 cups shredded part-skim mozzarella cheese, divided
//•	9 no-cook lasagna noodles
//•	Grated Parmesan cheese
//

