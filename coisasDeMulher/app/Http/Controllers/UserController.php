<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class UserController extends Controller
{
    /* Socialite */

    public function redirectToProvider($provider) {
        return Socialite::driver($provider)->redirect();
    }

    public function callback(Request $request, $provider) {
    
        $userProvider = Socialite::driver($provider)->user();
    
        // Encontre ou crie um usuario
        $user = User::firstOrCreate([
            'email' => $userProvider->getEmail(),
            'name' => $userProvider->getName(),
            'provider' => $provider,
            'provider_id' => $userProvider->getId()
        ]);

        $request->session()->put('user', $user);

        return to_route('produtos.index');
    
    }

    public function logout(Request $request) {
        $request->session()->flush('user');

        return to_route('produtos.index');
    }
}
