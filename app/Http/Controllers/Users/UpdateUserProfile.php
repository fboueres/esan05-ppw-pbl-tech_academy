<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UpdateUserProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UpdateUserProfile extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateUserProfileRequest $request)
    {
        $user = Auth::user();

        if (!Hash::check($request->old_password, $user->password))
        {
            return redirect()->back()->withErrors('email');
        }

        if ($request->has('new_password') && $request->new_password)
        {
            $user->password = Hash::make($request->new_password);
        }
        
        $user->update($request->only(['name', 'email']));
        
        return redirect()
            ->back()
            ->with('success', 'User data updated successfully');
    }
}
