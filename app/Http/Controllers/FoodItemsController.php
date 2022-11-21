<?php

namespace App\Http\Controllers;

use App\Models\FoodItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\Store;

class FoodItemsController extends Controller
{
    public function index(Request $request)
    {
        // return Store::where('user_id', Auth::user()->id)->first()->id;

        $data = $request->validate([
            'food_title' => 'required|string',
            'description' => 'required|string',
            'cook_time' => 'required|string',
            'type' => 'required',
            'status' => 'required',
            'price' => 'required',
            'multiImages' => 'required'
        ]);
        try {
            $foodItem = new FoodItems();
            $foodItem->food_title= $data['food_title'];
            $foodItem->store_id = Store::where('user_id', Auth::user()->id)->first()->id;
            $foodItem->description = $data['description'];
            $foodItem->cook_time = $data['cook_time'];
            $foodItem->type = $data['type'];
            $foodItem->status = $data['status'];
            $foodItem->price = $data['price'];
            foreach($data['multiImages'] as $img)
            {
                $file = $img;
                $extension = $file->getClientOriginalExtension(); 
                $fileName = rand(1111122222, 9999900000) . '.' . $extension;
                $location = 'storage/food/';
                $file->move($location,$fileName);
                $final_photosfilename[] = $fileName;
            }
            $foodItem->images = implode(',', $final_photosfilename);
            $foodItem->save();
            /** MULTIPLE IMAGES END */
            return response()->json(["status" => "success", "message" => "Item added successfully"]);
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function SellerMenu(Request $request)
    {
        try {

            $user_id = Auth::user()->id;
            $store_id = Store::where('user_id', $user_id)->first()->id;
            $getFoodItems = FoodItems::where('store_id', $store_id)->get();
            return response()->json(["success" => true, "items" => $getFoodItems, "status" => 200] );
        } catch (\Throwable $th) {
            return response()->json(["status" => false, "message" => "something went wrong", $th]);
        }
    }

    public function AllMenu(Request $request)
    {
        try {
            $getFoodItems = FoodItems::all();
            return response()->json(["status" => "success", "items" => $getFoodItems]);
        } catch (\Throwable $th) {
            return response()->json(["status" => "error", "message" => "something went wrong", $th]);
        }
    }
}
