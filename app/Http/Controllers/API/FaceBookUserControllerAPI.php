<?php


namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Models\FaceBookUser;

class FaceBookUserControllerAPI extends Controller
{
    public function index(){
        $users = FaceBookUser::all();

        return response()->json(['users'=>$users],200);
    }
}
