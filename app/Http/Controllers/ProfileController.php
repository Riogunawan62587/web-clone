<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use app\Models\User;
use App\Models\Client;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function profil($id)
    {
        if (auth()->user()->hasRole('admin')) {
            $user = User::where('id', Auth::user()->id)->first();
            $contents = Storage::disk('s3')->url('images/profil_picture/' . $user->profil_picture);
            $contents_bg = Storage::disk('s3')->url('images/background_picture/' . $user->background_picture);

            return view('profile.index', compact('user', 'contents'));
        } elseif (auth()->user()->hasRole('coachee')) {
            $user = User::select('*')
                ->join('clients', 'user_id', '=', 'users.id')
                ->where('users.id', Auth::user()->id)
                ->first();

            $contents = Storage::disk('s3')->url('images/profil_picture/' . $user->profil_picture);
            $contents_bg = Storage::disk('s3')->url('images/background_picture/' . $user->background_picture);

            return view('profile.index', compact('user', 'contents'));
        } else {
            $user = User::where('id', Auth::user()->id)->first();
            $contents = Storage::disk('s3')->url('images/profil_picture/' . $user->profil_picture);
            $contents_bg = Storage::disk('s3')->url('images/background_picture/' . $user->background_picture);

            return view('profile.index', compact('user', 'contents', 'contents_bg'));
        }
    }

    public function simpan_password(Request $request, $id)
    {
        $request->validate([
            'old_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        return redirect(route('profil', Auth::user()->id))->with('success', 'Your Password has been updated!');
    }

    public function store_data(Request $request, $id)
    {
        if (auth()->user()->hasRole('coachee')) {
            $user = User::find($id);
            // return $user;
            $client = Client::where('user_id', $user->id)->first();
            // return $client;

            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->update();

            $client->name = $user->name;
            $client->phone = $user->phone;
            $client->organization = $request->organization;
            $client->company = $request->company;
            $client->occupation = $request->occupation;
            $client->update();
        } elseif (auth()->user()->hasRole('admin')) {

            $user = User::find($id);
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->update();
            // return $user;
        } elseif (auth()->user()->hasRole('coach')) {

            $user = User::find($id);
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->update();
            // return $user;
        }
        return redirect(route('profil', Auth::user()->id));
    }

    public function update_profil(Request $request, $id)
    {
        $user = User::where('id', Auth::user()->id)->first();

        if ($request->has('profil_picture')) {
            if ($request->hasFile('profil_picture')) {
                $filenameWithExt = $request->file('profil_picture')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('profil_picture')->getClientOriginalExtension();
                $filenameSave = $filename . '_' . time() . '.' . $extension;
                if (Storage::disk('s3')->exists('images/profil_picture/' . $user->profil_picture)) {
                    Storage::disk('s3')->delete('images/profil_picture/' . $user->profil_picture);
                }
                Storage::disk('s3')->put('images/profil_picture/' . $filenameSave, file_get_contents($request->file('profil_picture')));
                // $path = $request->file('profil_picture')->storeAs('public/profil', $filenameSave);
                $user->profil_picture = $filenameSave;
            }
        }
        $user->update();

        return redirect(route('profil', Auth::user()->id));
    }

    public function update_background(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();

        if ($request->hasFile('background_picture')) {
            if ($request->hasFile('background_picture')) {
                $filenameWithExt = $request->file('background_picture')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('background_picture')->getClientOriginalExtension();
                $filenameSave = $filename . '_' . time() . '.' . $extension;
                if (Storage::disk('s3')->exists('images/background_picture/' . $user->background_picture)) {
                    Storage::disk('s3')->delete('images/background_picture/' . $user->background_picture);
                }
                Storage::disk('s3')->put('images/background_picture/' . $filenameSave, file_get_contents($request->file('background_picture')));
                // $path = $request->file('background_picture')->storeAs('public/background', $filenameSave);
                $user->background_picture = $filenameSave;
            }
        }
        $user->update();

        return redirect(route('profil', Auth::user()->id));
    }
}
