<?php
namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\FaceBookUser;

class FacebookPostController extends Controller
{
    public $successStatus = 200;

    public function getAllPosts(Request $request)
    {
        $token = $request['t']; //t = token
        $userid = $request['u'];// u-userid

        $user = User::where('id',$userid)->where('remember_token',$token)->first();

        // $inventory = DB::table('inventory')
        // ->leftJoin('users','inventory.id', '=','users.id')
        // ->select('covid_api.id','covid_api.country','covid_api.code','covid_api.confirm','covid_api.recovered','covid_api.critical','covid_api.death','covid_api.latitude','covid_api.longitude','users.name','covid_api.created_at','covid_api.updated_at')
        // ->get();
        // return response()->json($covidPost,$this->successStatus);


        if($user != null){
            // $covidPost = CovidAPI::all();
            $healths = DB::table('facebook_users')
                        ->leftJoin('users','facebook_users.id', '=','users.id')
                        ->select('facebook_users.id','facebook_users.country','facebook_users.number_of_users','facebook_users.active_users','facebook_users.none_active_users','facebook_users.hrs_per_day_online','users.name','facebook_users.created_at','facebook_users.updated_at')
                        ->get();

            return response()->json($healths,$this->successStatus);
        }else{
            return response()->json(['response'=>'Bad call'],501);
        }
    }


    public function getPost(Request $request)
    {

        $id = $request['pid']; //old post id

        $token = $request['t']; //t = token
        $userid = $request['u'];// u-userid

        $user = User::where('id',$userid)->where('remember_token',$token)->first();


        if($user != null){

            $faceBookUser = FaceBookUser::where('id',$id)->first();
            if($user != null){
                return response()->json($faceBookUser,$this->successStatus);
            }else{
                return response()->json(['response'=>'Posts not found'],404);
            }

        }else{
            return response()->json(['response'=>'Bad call'],501);
        }
    }


    // this method searches the country
    public function searchPost(Request $request)
    {

        $params = $request['p']; //p = params

        $token = $request['t']; //t = token
        $userid = $request['u'];// u-userid

        $user = User::where('id',$userid)->where('remember_token',$token)->first();


        if($user != null){

            $faceBookUser = FaceBookUser::where('name','LIKE','%' .$params . '%')->GET();
            if($user != null){
                return response()->json($faceBookUser,$this->successStatus);
            }else{
                return response()->json(['response'=>'Posts not found'],404);
            }

        }else{
            return response()->json(['response'=>'Bad call'],501);
        }
    }
}
