<?php

namespace App\Http\Controllers;

use App\Models\FoodItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodItemsController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->validate([
            'food_title' => 'required|string',
            'description' => 'required|string',
            'cook_time' => 'required|string',
            'type' => 'required',
            'food_status' => 'required',
            'price' => 'required'
        ]);
        try {
            $foodItem = FoodItems::create([
                'food_title' => $data['food_title'],
                'user_id' => Auth::user()->id,
                'description' => $data['description'],
                'cook_time' => $data['cook_time'],
                'type' => $data['type'],
                'food_status' => $data['food_status'],
                'price' => $data['price']
            ]);
            /** MULTIPLE IMAGES */
            foreach($data['multiImages'] as $img)
            {
                $file = $img;
                $extension = $file->getClientOriginalExtension(); 
                $fileName = rand(1111122222, 9999900000) . '.' . $extension;
                $location = 'storage/food/';
                $file->move($location,$fileName);
                $final_photosfilename[] = $fileName;
            }
            $foodItem->gallery = implode(',', $final_photosfilename);
            $foodItem->update();
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
            $getFoodItems = FoodItems::where('user_id', $user_id)->get();
            return response()->json(["status" => "success", "items" => $getFoodItems]);
        } catch (\Throwable $th) {
            return response()->json(["status" => "error", "message" => "something went wrong", $th]);
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
