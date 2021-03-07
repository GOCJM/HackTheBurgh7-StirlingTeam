<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $user = User::where('name', $name)->first();

        if(isset($user))
            return view('profile.show', compact('user'));
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
        $user = User::where('name', $name)->first();

        if (Auth::user()->name === $user->name)
            return view('profile.edit', compact('user'));
        return abort(403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $name
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $name)
    {
        if($name != Auth::user()->name) return abort(403);

        $user = User::where('name', $name)->first();

        if(isset($user)) {

            if ($request->file('avatar')) {
                $filename = Str::random(20);
                $avatar = $request->file('avatar')->storePubliclyAs('public/avatars', $filename.'.'. $request->file('avatar')->getClientOriginalExtension());
                $user->update([
                    'avatar' => '/storage/'.substr($avatar, 7),
                ]);
            }

            $user->update([
                'name' => $request->input('name') ?? $user->name,
                'username' => $request->input('username') ?? $user->username,
                'bio' => $request->input('bio') ?? $user->bio
            ]);

            $user->save();

            return redirect()->route('profile.show', $user->name)->with('success', 'Account settings has been updated.');
        }
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
