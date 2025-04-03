<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginUserRequest;
use Illuminate\Support\Facades\Auth;

class LoginUser extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginUserRequest $request)
    {
        $remember_me = $request->remember == "on";
        $user_credentials = $request->validated();

        if (Auth::attempt($user_credentials, $remember_me)) {
            $request->session()->regenerate();

            return redirect()->intended("/home");
        }

        return back()
            ->withErrors([
                "email" =>
                    "Algo deu errado, verifique suas credenciais e tente novamente.",
            ])
            ->onlyInput("email");
    }
}
