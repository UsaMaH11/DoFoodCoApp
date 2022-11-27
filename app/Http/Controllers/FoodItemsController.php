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
             'order_limit' => 'required',
             'portion_size' =>'required',
             'ingredients' =>'required',
             'spice_level' => 'required',
            'multiImages' => 'required',
            'expires_in' =>'required'
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
            $foodItem->order_limit = $data['order_limit'];
            $foodItem->portion_size = $data['portion_size'];
            $foodItem->ingredients =$data['ingredients'];
            $foodItem->spice_level = $data['spice_level'];
            $foodItem ->comments = $request->comments;
            $foodItem->expires_in = $data['expires_in'];
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
            $user = Auth::user();
            $data = [];
            $store_id = Store::where('user_id', Auth::id())->first()->id;
            $getFoodItems = FoodItems::where('store_id', $store_id)->paginate(5);
            $data['sellerMenu'] = $getFoodItems;
            $data['userData'] = $user;
            return response()->json(["success" => true, "userData" => $data, "status" => 200] );
        } catch (\Throwable $th) {
            return response()->json(["status" => false, "message" => "something went wrong", $th]);
        }
    }

    public function AllMenu(Request $request)
    {
        try {
            $getFoodItems = FoodItems::paginate(5);
            return response()->json(["status" => "success", "items" => $getFoodItems]);
        } catch (\Throwable $th) {
            return response()->json(["status" => "error", "message" => "something went wrong", $th]);
        }
    }

    public function updateFoodMenu(Request $request){
           try {
                // $store_id = Store::where('user_id', Auth::user()->id)->first()->id;
                $updateUserInfo = FoodItems::where('id',$request->id)->update($request->all());
           
                $data = FoodItems::find($request->id);
                if($data){
                    return response()->json(['response'=>200,'data' => $data, 'status' => true]);
                }else{
                    return response()->json(['response'=>401,'message' => 'there was some error updating data','status'=>false]);
                }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getFoodById(Request $request) {
        try {
        $data = FooItems::where(id,$request->item_id)->first();
        if($data){
                    return response()->json(['response'=>200,'data' => $data, 'status' => true]);
                }else{
                    return response()->json(['response'=>401,'message' => 'there was some error getting data','status'=>false]);
                }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function search($keyword){
        $store = Store::where('store_name', 'like', "%{$keyword}%")->get();
        $foodItem = FoodItems::where('food_title', 'like', "%{$keyword}%")->orwhere('type', 'like', "%{$keyword}%")->get();
        return response()->json([
            'store' => $store,
            'food' => $foodItem,
        ]);
    }
}
