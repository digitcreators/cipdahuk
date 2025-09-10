<?php

namespace App\Http\Controllers\Customer;

use App\Models\Countries;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $countries = Countries::all();

        return view('customer.profile.edit', compact('user', 'countries'));
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = User::findOrFail(Auth::user()->id);

        $user->update($request->all());

        return redirect()->back()->with(['success' => 'Your profile successfully updated.']);
    }

    public function changePassword()
    {
        $user = Auth::user();

        return view('customer.profile.change-password', compact('user'));
    }

    public function changePasswordUpdate(Request $request)
    {
        return $request->all();
        
    }
}
