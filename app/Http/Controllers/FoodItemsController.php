<?php

namespace App\Http\Controllers;

use App\Models\FoodItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\Store;
use App\Models\AvailibilityDay;

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
            // $foodItem->spice_level = $data['spice_level'];
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
            // $getFoodItems = 
            $data['sellerMenu'] = FoodItems::where('store_id', $store_id)->paginate(5);
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
        //    try {
                
                // $store_id = Store::where('user_id', Auth::user()->id)->first()->id;
                $updateUserInfo = FoodItems::where('id',$request->id)->update([
                    'food_title' => $request->food_title,
                    'description' => $request->description,
                    'cook_time' => $request->cook_time,
                    'type' => $request->type,
                    'status' => $request->status,
                    'price' => $request->price,
                    'order_limit' => $request->order_limit,
                    'portion_size' =>$request->portion_size,
                    // 'ingredients' => $request->ingredients,
                    'spcice_level' => $request->spcice_level,
                    'comments' => $request->comments,
                    'expires_in' => $request->expires_in
                ]);
           
                $data = FoodItems::find($request->id);
                if($data){
                    return response()->json(['response'=>200,'data' => $data, 'status' => true]);
                }else{
                    return response()->json(['response'=>401,'message' => 'there was some error updating data','status'=>false]);
                }
        // } catch (\Throwable $th) {
        //     throw $th;
        // }
    }

    public function getFoodById(Request $request) {
        try {
        // return $request->item_id;
        $data = FoodItems::where('id',$request->item_id)->first();
        if($data){
                    return response()->json(['response'=>200,'data' => $data, 'status' => true]);
                }else{
                    return response()->json(['response'=>401,'message' => 'there was some error getting data','status'=>false]);
                }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function search(Request $request){
        $keyword = $request->keyword;
        $store = Store::where('store_name', 'like', "%{$keyword}%")->get();
        $foodItem = FoodItems::where('food_title', 'like', "%{$keyword}%")->orwhere('type', 'like', "%{$keyword}%")->get();
        return response()->json([
            'response'=>200,
            'store' => $store,
            'food' => $foodItem,
             'status' => true
        ]); 
    }

    public function availibilityDays(Request $request){
        try {
            // return Auth::user()->id;
            $data = new AvailibilityDay();
           
            $data->store_id =Store::where('user_id', Auth::user()->id)->first()->id;

            $data->monday = $request->monday;
            $data->tuesday = $request->tuesday;
            $data->wednesday = $request->wednesday;
            $data->thrusday = $request->thursday;
            $data->friday = $request->friday;
            $data->saturday = $request->saturday;
            $data->sunday = $request->sunday;
            $data->save();
            return response()->json(['response'=>201,'data' => $data, 'status' => true]);

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function updateAvailibilityDays(Request $request){
        try {
            // return Auth::user()->id;
            // $data = new AvailibilityDay();
           $store_id =Store::where('user_id', Auth::user()->id)->first()->id;
           AvailibilityDay::where('store_id',$store_id)->update([
             "monday" => $request->monday,
            "tuesday" => $request->tuesday,
            "wednesday" => $request->wednesday,
            "thrusday" => $request->thursday,
            "friday" => $request->friday,
            "saturday" => $request->saturday,
            "sunday" => $request->sunday
            ]);
             $data = AvailibilityDay::where('store_id',$store_id)->first();
            return response()->json(['response'=>200,'data' => $data, 'status' => true]);

        } catch (\Throwable $th) {
            throw $th;
        }
     
    }

    
}
