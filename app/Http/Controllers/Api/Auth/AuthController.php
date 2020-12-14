<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\loginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    /*
     * method for login users
     */
    public function login(loginRequest $request): JsonResponse
    {

        $user = User::where('email', $request->email)->first();
        if (!$user->active) {
            return response()->json([
                'email' => ['message'=>'Credenciales incorrectos'],
            ],422);
        }
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'email' => ['message'=>'Credenciales incorrectos'],
            ]);
        }

        $abilities = $user->getAbilities()->pluck('name')->push('404')->push('403')->push('500')->push('home')->push('perfil')->push('reset');
        $token = $user->createToken($request->device_name)->plainTextToken;
        return response()->json([
            'access_token' => $token,
            'user' => $user,
            'abilities' => $abilities,
        ]);
    }

    /*
     * method for logout users
     */

    public function logout(): JsonResponse
    {
        $user = auth()->user();
        foreach ($user->tokens as $token) {
            $token->delete();
        }
        return response()->json(['message'=>'user logout'], 200);
    }


}
