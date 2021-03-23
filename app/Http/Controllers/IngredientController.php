<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\MyIngredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class IngredientController extends Controller
{

    # Pages
    const MY_PANTRY_PAGE = 'pantry';
    const ADD_INGREDIENT_PAGE = 'add_ingredient';

    public function getMyIngredients()
    {
        $myIngredients = MyIngredient::all();
        return view(self::MY_PANTRY_PAGE)->with(['myIngredients' => $myIngredients]);
    }

    public function addIngredient()
    {
        return view(self::ADD_INGREDIENT_PAGE);
    }

    public function storeIngredient(Request $request)
    {
        $collection = [];
        $units = $request->get('unit');
        $quantity = $request->get('quantity');
        foreach ($request->get('name') as  $key => $name)
        {
            $data = [
                'user_id'   =>  Auth::id(),
                'name'      =>  $name,
                'quantity'  =>  $quantity[$key],
                'unit'      =>  $units[$key]
            ];

            $validate = Validator::make($data, [
                'name' => 'unique:my_ingredients'
            ]);

            if(!$validate->fails())
                array_push($collection, $data);
        }
        DB::table('my_ingredients')->insert($collection);

        $myIngredients = MyIngredient::all();
        return view(self::MY_PANTRY_PAGE)->with(['myIngredients' => $myIngredients, 'msg' => 'Ingredient has been added successfully']);
    }
}

