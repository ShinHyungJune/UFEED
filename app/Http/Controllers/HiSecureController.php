<?php

namespace App\Http\Controllers;

use App\Models\Authority;
use App\Models\Group;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class HiSecureController extends Controller
{
    public function index()
    {
        $users = User::with('group')->get();
        return view('user.hi-secure.HiSecure_account')->with('users', $users);
    }

    public function create(): View
    {
        $groups = Group::get();
        $authorities = Authority::get();
        return view('user.hi-secure.HiSecure_account_add')->with('groups', $groups)->with('authorities', $authorities);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'ids' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()->symbols()],
            'group_id' => ['required', 'integer'],
            'authority_id' => ['required', 'integer'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
//            'period_of_use' => ['required', 'date'],
        ]);

        $user = User::create([
            'ids' => $request->ids,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'group_id' => $request->group_id,
            'authority_id' => $request->authority_id,
            'email' => $request->email,
//            'period_of_use' => Carbon::createFromFormat('m/d/Y', $request->period_of_use)->toDateString(),
        ]);

        event(new Registered($user));

        return redirect()->route('hi-secure.index');
    }

    public function edit(User $user)
    {
        $groups = Group::get();
        $authorities = Authority::get();
        return view('user.hi-secure.HiSecure_account_modify')->with('user', $user)->with('groups', $groups)->with('authorities', $authorities);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'ids' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()->symbols()],
            'group_id' => ['required', 'integer'],
            'authority_id' => ['required', 'integer'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
//            'period_of_use' => ['required', 'date'],
        ]);

        $user->update([
            'ids' => $request->ids,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'group_id' => $request->group_id,
            'authority_id' => $request->authority_id,
            'email' => $request->email,
//            'period_of_use' => Carbon::createFromFormat('m/d/Y', $request->period_of_use)->toDateString(),
        ]);
        return redirect()->route('hi-secure.edit', $user->id);
    }

    public function switch(Request $request)
    {
        dd($request);
    }

    public function delete(Request $request)
    {
        User::destroy($request->input('id'));
        return redirect()->route('hi-secure.index');
    }
    public function globalSetting()
    {
        return view('user.hi-secure.HiSecure_account_setting');
    }
}
