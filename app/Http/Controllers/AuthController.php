<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Carbon\Carbon;

class AuthController extends Controller
{
	/**
	 * register handler
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function register(Request $request)
	{
		User::create([
			'name' => $request->input['name'],
			'email' => $request->input['email'],
			'password'=> Hash::make($request->input['password'])
		]);
	}
	/**
	 * signin function
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function signin(Request $request)
	{
		$credentials = $request->only('email', 'password');

		try {
			$token = JWTAuth::attempt(              $credentials);
			if (!$token) {
				return response()->json(['error' => 'invalid'], 401);
			}
		} catch (JWTException $e) {
			return response()->json(['error' => "couldn't create"], 500);
		}

		return response()->json(compact('token'));
	}
}
