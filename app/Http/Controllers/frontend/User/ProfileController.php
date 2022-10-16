<?php

namespace App\Http\Controllers\frontend\User;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Show the update profile page.
     *
     * @param  Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit(Request $request)
    {
        return view('main.user.profile', [
            'user' => $request->user()
        ]);
    }

    /**
     * Update user's profile
     *
     * @param  Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request)
    {
        $request->user()->update(
            $request->all()
        );

        return redirect()->route('profile.edit')->with('success','You have successfully updated your profile.');
    }
}
