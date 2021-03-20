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

//$collection = [];
//foreach ($warehouses as $key => $warehouse)
//{
//    $data = [
//        'warehouse_id' => $warehouse->warehouseID,
//        'code' => $warehouse->warehouseCode,
//        'name' => $warehouse->warehouseName,
//        'status' => $warehouse->status,
//        'address1' => $warehouse->address1,
//        'address2' => $warehouse->address2,
//        'address3' => $warehouse->address3,
//        'city' => $warehouse->city,
//        'state' => $warehouse->state,
//        'zip_code' => $warehouse->zipCode,
//        'country_id' => $warehouse->countryID,
//        'country_code' => $warehouse->countryCode,
//        'country_name' => $warehouse->countryName,
//        'phone' => $warehouse->phone,
//        'email' => $warehouse->email,
//        'created_at' => now(),
//        'updated_at' => now()
//    ];
//
//    $validate = Validator::make($data, [
//        'name' => 'unique:aims360_warehouses'
//    ]);
//
//    if(!$validate->fails())
//        array_push($collection, $data);
//
//}
//return $this->_aims360WarehouseRepo->insert($collection);
