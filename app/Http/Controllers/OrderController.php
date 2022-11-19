<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validation;

class OrderController extends Controller
{
    public function payByStripe(){
        // $request->request->add([
            $card_number = '4242424242424242';
            $expire_month = '12';
            $expire_year = '2024';
            $cvv_number = '1234';
        // ]);
        // return $card_number;
        $transaction = DB::transaction(function () use ($card_number, $expire_month, $expire_year, $cvv_number) {
			try {   
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://api.stripe.com/v1/tokens',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
            
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => 'card%5Bnumber%5D='.$card_number.'&card%5Bexp_month%5D='.$expire_month.'&card%5Bexp_year%5D='.$expire_year.'&card%5Bcvc%5D='.$cvv_number,
                    CURLOPT_HTTPHEADER => array(
                        'Authorization: Bearer sk_test_51J80x4KG9Aa7ku111nIjNVkD8zmxgNqgGkPJY9u6sgHg4KNCEodYul2gonQIHPWe3cgJTlCFgpnvRp1OcSQbgN4O00C5zwxJL3',
                        'Content-Type: application/x-www-form-urlencoded'
                        ),
                ));

                $response = curl_exec($curl);
                curl_close($curl);
                if(isset(json_decode($response)->id)){
                    \Stripe\Stripe::setApiKey('sk_test_51J80x4KG9Aa7ku111nIjNVkD8zmxgNqgGkPJY9u6sgHg4KNCEodYul2gonQIHPWe3cgJTlCFgpnvRp1OcSQbgN4O00C5zwxJL3');
                    $charge = \Stripe\Charge::create([
                        'amount' => 10 * 100,
                        'currency' => 'USD',
                        'description' => 'Payment From Booking',
                        'source' => json_decode($response)->id,
                        'statement_descriptor' => 'Food booking payment',
                    ]);
                    if($charge->status == 'succeeded'){
                        
                        DB::commit();
                        return response()->json(['success'=>true]);
                    }
                }else{
                    return response()->json(['success'=>false,'card'=> false]);
                }
            } catch (Exception $ex) {
				DB::rollback();
				return [
					'status' => 'error',
					'message' => 'Error saving sale',
					'test' => json_encode($ex->trace()),
				];
			}
        });
		return $transaction;
    }   
    public function addToCart($product_id){
        if(Auth::check()){
            $checkPrevious = Cart::where(['user_id'=>Auth::id(), 'product_id'=>$product_id])->first();
            if($checkPrevious){
                return response()->json([
                    'success' => false,
                    'message' => 'already exist',
                ]);
            }else{
                $cart = new Cart();
                $cart->user_id = Auth::id();
                $cart->product_id = $product_id;
                $cart->save();
                return response()->json([
                    'success' => true,
                    'message' => 'added to cart',
                ]);
            }
        }else{
            return response()->json([
                'success' => false,
                'message' => 'please login first',
            ]);
        }
    }
}
