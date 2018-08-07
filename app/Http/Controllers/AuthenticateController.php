<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Carbon\Carbon;
use App\User;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthenticateController extends Controller
{
  public function authenticate(Request $request)
  {
    // grab credentials from the request
    $credentials = $request->only('email', 'password');
    $cuenta = User::where('email', '=', $request->email, 'AND', 'password', '=', $request->password)->first();
    
    try {
      // attempt to verify the credentials and create a token for the user with a week of validity
      if (! $token = JWTAuth::attempt($credentials,  ['exp' => Carbon::now()->addDays(7)->timestamp])) {
        return response()->json(['error' => 'Contraseña o Correo Incorrectos'], 403);
      }
      if ($cuenta->cuenta_activa === false) {
        // Cuenta desactivada
        return response()->json(['error' => 'Cuenta no activada'], 500);
      }
    } catch (JWTException $e) {
      // something went wrong whilst attempting to encode the token
      return response()->json(['error' => 'could_not_create_token'], 500);
    }

    // all good so return the token
    return response()->json(compact('token'));
  }

  public function getAuthUser()
  {
    try {
      if (! $user = JWTAuth::parseToken()->authenticate()) {
        return response()->json(['user_not_found'], 404);
      }
    } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
      return response()->json(['token_expired'], $e->getStatusCode());
    } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
      return response()->json(['token_invalid'], $e->getStatusCode());
    } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
      return response()->json(['token_absent'], $e->getStatusCode());
    }
    // the token is valid and we have found the user via the sub claim
    return $user;
  }
}
