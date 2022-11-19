<?php

namespace App\Http\Controllers;
require("../vendor/autoload.php");
use Illuminate\Http\Request;
use IDAnalyzer\CoreAPI;
use IDAnalyzer\AMLAPI;


class idAnalyzerController extends Controller
{
    // ID Analyzer API key available under your web portal https://portal.idanalyzer.com


public function idAnalyzer(Request $request){
    $data = [];
   $coreapi = new CoreAPI("we7HYpt3mTJLQH7fJ31aTVMJxSBd6nsu", "US");

   $coreapi->enableAuthentication(true, '2');
              $this->validate($request, [
                    'faceImage' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                    'idImage' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
                ]);

            $faceImage = $request->file('faceImage');
            $idImage = $request->file('idImage');

   $result = $coreapi->scan($idImage,"",$faceImage);

// All information about this ID will be returned in an associative array
// $data_result = $result['result'];
// $authentication_result = $result['authentication'];
// $face_result = $result['face'];
$data['result'] = $result['result'];
$data['face'] = $result['face'];

return response()->json(["success" => true , "data"=> $data, "status" => 200]);
// Print document holder name
// echo("Hello your name is {$data_result['firstName']} {$data_result['lastName']}. ");

// Parse document authentication results
// if($authentication_result){
//     if($authentication_result['score'] > 0.5) {
//         echo("The document uploaded is authentic. ");
//     }else if($authentication_result['score'] > 0.3){
//         echo("The document uploaded looks little bit suspicious. ");
//     }else{
//         echo("The document uploaded is fake. ");
//     }
// }
// Parse face verification results
// if($face_result){
//     // if($face_result['error']){
//     //     // View complete error codes under API reference: https://developer.idanalyzer.com/coreapi.html
//     //     echo("Face verification failed! Code: {$face_result['error']}, Reason: {$face_result['error_message']}. ");
//     // }else{
//         if($face_result['isIdentical'] === true){
//             echo("Great! Your photo looks identical to the photo on document. ");
//         }else{
//             echo("Oh no! Your photo looks different to the photo on document. ");
//         }
//         echo("Similarity score: {$face_result['confidence']}. ");
    
// }
}

public function backgroundCheck(Request $request){
   try {
       $aml = new AMLAPI("we7HYpt3mTJLQH7fJ31aTVMJxSBd6nsu", "US");

        // Set AML database to all databases
        $aml->setAMLDatabase("");
        $idNumber = $request->idNumber;
        // Search for a sanctioned ID number
        $result = $aml->searchByIDNumber($idNumber);
        return $result;
   } catch (\Throwable $th) {
    throw $th;
   }
}
}
