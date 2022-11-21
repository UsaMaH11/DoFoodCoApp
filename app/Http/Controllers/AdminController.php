<?php

namespace App\Http\Controllers;

use App\Models\FoodItems;
use App\Models\User;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class AdminController extends Controller
{
    public function getUsersList()
    {
        return User::whereIn('type', ['buyer', 'seller'])->get();
    }
    public function getStoreList()
    {
        return Store::with('User')->get();
    }
    public function requestOpenStore(Request $request){
        
        $attributeNames = [
            'store_name' => 'Store Name',
            'location' => 'Locatin Name',
            'image' => 'Image',
            'license_id' => 'License id',
        ];
        $rules = array(
            'store_name' => 'required|string',
            'location' => 'required|string',
            'license' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:2048',
        );

        $validator = Validator::make($request->all(), $rules);
        $validator->setAttributeNames($attributeNames);

        if ($validator->fails()){
            return response()->json([
                'errors' => $validator->errors(),
                'success' => false,
            ], 200);
        }
        else
        {
            $store = new Store();
            $store->store_name = $request->store_name;
            $store->user_id = Auth::user()->id;
            $store->license_id = $request->license_id;
            $store->location = $request->location;
            $store->status = 'inactive';
            $file = $request->image;
            $extension = $file->getClientOriginalExtension(); 
            $fileName = rand(1111122222, 9999900000) . '.' . $extension;
            $location = 'storage/store/';
            $file->move($location,$fileName);
            $final_photosfilename[] = $fileName;
            $store->image = $fileName;
            $store->save();
            $user = User::find(Auth::id());
            $user->isRequestedToBecomeCook = 1;
            $user->update();
            return response()->json(["status" => "success", "message" => "Request has been sent successfully"]);
        }
    }
    public function activeStore($store_id){
        $store = Store::find($store_id);
        $store->status = 'active';
        if($store->update()){
            return response()->json(["success" => true]);
        }else{
            return response()->json(["success" => false]);
        }
    }
    public function foodList(){
        return FoodItems::with('Store')->get();
    }
    public function activeFood($food_id){
        $food = FoodItems::find($food_id);
        $food->status = 'approved';
        if($food->update()){
            return response()->json(["success" => true]);
        }else{
            return response()->json(["success" => false]);
        }
    }
    public function updateImages(Request $request){
        $store = FoodItems::find($request->food_id);
        $store->images = implode(',', $request->images);
        if($store->update()){
            return response()->json(["success" => true]);
        }else{
            return response()->json(["success" => false]);
        }
    }
}
