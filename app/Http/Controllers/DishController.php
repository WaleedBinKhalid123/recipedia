<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Dish_Ingredient;
use App\Models\Image;
use App\Models\Ingredient;
use App\Models\MyIngredient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Class DishController
 * @package App\Http\Controllers
 */
class DishController extends Controller
{

    # Pages
    const DISH_SEARCH_PAGE = 'home';
    const DISH_SHOW_PAGE = 'dish';
    const MY_PANTRY_PAGE = 'pantry';

    public function getDishes(Request $request)
    {
        $ingredientCount = 0;
        $matchedCount = 0;
        $hundredPercent = [];
        $eightyPercent = [];
        $sixtyPercent = [];
        $fortyPercent = [];
        $twentyPercent = [];
        $sampleIngredients = $request->all();

        foreach ($sampleIngredients as $sampleIngredient)
        {
            DB::table('users')->where('id', Auth::id())->update(['user_ingredients' => json_encode($sampleIngredient)]);

            $dishes = Dish::all();
            foreach ($dishes as $dish)
            {
                $image = Image::where('dish_id', $dish->id)->first();
                $ingredientIds = Dish_Ingredient::where('dish_id', $dish->id)->get();
                $ingredients = $this->getIngredients($ingredientIds);
                $ingredientCount = count($ingredients);
                $matchedCount = $this->getMatchedCount($sampleIngredient, $ingredients);
                if($matchedCount != 0) {
                    $percentage = (($matchedCount / $ingredientCount) * 100);
                    if ($percentage > 80 && $percentage <= 100) {
                        array_push($hundredPercent, ['name' => $dish->name, 'status' => 'fully', 'path' => $image->path]);
                    } else if ($percentage > 60 && $percentage <= 80) {
                        array_push($eightyPercent, ['name' => $dish->name, 'status' => 'Almost', 'path' => $image->path]);
                    } else if ($percentage > 40 && $percentage <= 60) {
                        array_push($sixtyPercent, ['name' => $dish->name, 'status' => 'Mediocre', 'path' => $image->path]);
                    } else if ($percentage > 20 && $percentage <= 40) {
                        array_push($fortyPercent, ['name' => $dish->name, 'status' => 'Fairly', 'path' => $image->path]);
                    } else if ($percentage > 0 && $percentage <= 20) {
                        array_push($twentyPercent, ['name' => $dish->name, 'status' => 'Least', 'path' => $image->path]);
                    }
                }
            }
        }

        $data = [];

        if($hundredPercent != null)
        {
            foreach ($hundredPercent as $item)
            {
                array_push($data,$item);
            }
        }
        if($eightyPercent != null)
        {
            foreach ($eightyPercent as $item)
            {
                array_push($data,$item);
            }
        }
        if($sixtyPercent != null)
        {
            foreach ($sixtyPercent as $item)
            {
                array_push($data,$item);
            }
        }
        if($fortyPercent != null)
        {
            foreach ($fortyPercent as $item)
            {
                array_push($data,$item);
            }
        }
        if($twentyPercent != null)
        {
            foreach ($twentyPercent as $item)
            {
                array_push($data,$item);
            }
        }

        return view(self::DISH_SEARCH_PAGE)->with(['dishes' => $data]);
    }

    private function getIngredients($ingredientIds)
    {
        $ingredients = [];
        foreach ($ingredientIds as $ingredientId)
        {
            $temp = Ingredient::where('id', $ingredientId->ingredient_id)->first();
            array_push($ingredients, $temp->name);
        }
        return $ingredients;
    }

    private function getMatchedCount($userIngredients, $ingredients)
    {
        $count = 0;
        foreach ($userIngredients as $item)
        {
            foreach ($ingredients as $ingredient)
            {
                if(strtolower($item) == $ingredient)
                {
                    $count++;
                }
            }
        }
        return $count;
    }

    public function selectDish($name)
    {
        $flag = false;
        $dish_name = strtolower($name);
        $dish = Dish::where('name', $dish_name)->first();

        $ingredientIds = Dish_Ingredient::where('dish_id', $dish->id)->get();

        $user = User::where('id', Auth::id())->first();
        $ingredients = $user->user_ingredients;
        $ingredients = json_decode($ingredients);
        foreach ($ingredients as $ingredient)
        {
            foreach ($ingredientIds as $ingredientId)
            {
                $ing = Ingredient::where('id', $ingredientId->ingredient_id)->first();
                if(strtolower($ingredient) == strtolower($ing->name))
                {
                    $pantry = DB::table('my_ingredients')->where(['user_id' => Auth::id(), 'name' => strtolower($ingredient) ])->first();
                    if($pantry != null )
                    {
                        $flag = true;
                        DB::table('my_ingredients')->where(['id' => $pantry->id])->update(['quantity' => ($pantry->quantity - $ingredientId->quantity)]);
                    }
                }
            }
        }
        $myIngredients = MyIngredient::all();
        if($flag == true)
            return view(self::MY_PANTRY_PAGE)->with(['myIngredients' => $myIngredients, 'msg' => 'Your Ingredients Left']);
        return view(self::MY_PANTRY_PAGE)->with(['myIngredients' => $myIngredients, 'msg' => 'Your pantry is empty or you dont have ingredient in you pantry. Add Ingredients first.']);
    }

    public function showDish($name)
    {
        $dish = Dish::where('name', strtolower($name))->first();
        $image = Image::where('dish_id', $dish->id)->first();
        $ingredientIds = Dish_Ingredient::where('dish_id', $dish->id)->get();
        $ingredients = $this->getIngredients($ingredientIds);
        return view(self::DISH_SHOW_PAGE)->with(['dish' => $dish, 'ingredientIds' => $ingredientIds, 'image' => $image]);
    }

    public function backToDish()
    {
        $ingredientCount = 0;
        $matchedCount = 0;
        $hundredPercent = [];
        $eightyPercent = [];
        $sixtyPercent = [];
        $fortyPercent = [];
        $twentyPercent = [];

        $user = User::where('id', Auth::id())->first();
        $ingredients = $user->user_ingredients;
        $sampleIngredients = json_decode($ingredients);

        DB::table('users')->where('id', Auth::id())->update(['user_ingredients' => $sampleIngredients]);

        $dishes = Dish::all();
        foreach ($dishes as $dish)
        {
            $image = Image::where('dish_id', $dish->id)->first();
            $ingredientIds = Dish_Ingredient::where('dish_id', $dish->id)->get();
            $ingredients = $this->getIngredients($ingredientIds);
            $ingredientCount = count($ingredients);
            $matchedCount = $this->getMatchedCount($sampleIngredients, $ingredients);
            if($matchedCount != 0) {
                $percentage = (($matchedCount / $ingredientCount) * 100);
                if ($percentage > 80 && $percentage <= 100) {
                    array_push($hundredPercent, ['name' => $dish->name, 'status' => 'fully', 'path' => $image->path]);
                } else if ($percentage > 60 && $percentage <= 80) {
                    array_push($eightyPercent, ['name' => $dish->name, 'status' => 'Almost', 'path' => $image->path]);
                } else if ($percentage > 40 && $percentage <= 60) {
                    array_push($sixtyPercent, ['name' => $dish->name, 'status' => 'Mediocre', 'path' => $image->path]);
                } else if ($percentage > 20 && $percentage <= 40) {
                    array_push($fortyPercent, ['name' => $dish->name, 'status' => 'Fairly', 'path' => $image->path]);
                } else if ($percentage > 0 && $percentage <= 20) {
                    array_push($twentyPercent, ['name' => $dish->name, 'status' => 'Least', 'path' => $image->path]);
                }
            }
        }

        $data = [];

        if($hundredPercent != null)
        {
            foreach ($hundredPercent as $item)
            {
                array_push($data,$item);
            }
        }
        if($eightyPercent != null)
        {
            foreach ($eightyPercent as $item)
            {
                array_push($data,$item);
            }
        }
        if($sixtyPercent != null)
        {
            foreach ($sixtyPercent as $item)
            {
                array_push($data,$item);
            }
        }
        if($fortyPercent != null)
        {
            foreach ($fortyPercent as $item)
            {
                array_push($data,$item);
            }
        }
        if($twentyPercent != null)
        {
            foreach ($twentyPercent as $item)
            {
                array_push($data,$item);
            }
        }

        return view(self::DISH_SEARCH_PAGE)->with(['dishes' => $data]);
    }


}
