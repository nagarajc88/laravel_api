<?php

namespace App\Http\Controllers\Backend\Api;

use App\Http\Controllers\Backend\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;
use App\Models\Backend\Users\User;
class ApiAuthController extends Controller
{


    public function __construct()
    {
        // Apply the jwt.auth middleware to all methods in this controller
        // except for the authenticate method. We don't want to prevent
        // the user from retrieving their token if they don't already have it
        $this->middleware('jwt.auth', ['except' => ['authenticate']]);
        // $this->middleware('cors');

    }
    //
    public function authenticate()
    {
    	$credentials = request()->only('email','password');
        // print_r($credentials);
    	try {
    		$token = JWTAuth::attempt($credentials);

    		if(!$token){
    			return response()->json(['error' => 'Invalid_credentials'],401);
    		}
    	}

    	catch(JWTException $e){

    		return response()->json(['error' => 'Something_went_wrong'],500);

    	}

    	return response()->json(['token' => $token],200);
    }

    public function register()
    {
    	$email = request()->email;
    	$name = request()->name;
    	$password = request()->password;

    	$user = User::Create([
    		'name' => $name,
    		'email' => $email,
    		'password' => bcrypt($password)
    		]);

       $token = JWTAuth::fromUser($user);

       return response()->json(['token',$token],200);
    }

   public function getAuthUser()
   {

        $token = request()->token;
        $user = JWTAuth::toUser($token);
        return response()->json($user,200);
    }


    public function logout() {
        // $token = request()->token;

        // return JWTAuth::invalidate($token);
        return "hi";

    }
}
