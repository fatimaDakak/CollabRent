<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Update the user's profile information.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */




     public function update(Request $request)
     {
         $user = Auth::user();

         if ($request->hasFile('picture')) {
            $imageFile = $request->file('picture');
            $imageName = time() . '.' . $imageFile->getClientOriginalExtension();
            $imageFile->move(public_path('profile_pictures'), $imageName);
            $user->image =$imageName;
         }

         $user->update([
             'email' => $request->input('email'),
             'name' => $request->input('nom')
         ]);

         $user->partenaire->where('id_partenaire', $user->partenaire->id_partenaire)->update([
             'nom' => $request->input('nom'),
             'email' => $request->input('email'),
             'prenom' => $request->input('prenom'),
             'CIN' => $request->input('cin')
         ]);

         $user->client->where('id_client',$user->partenaire->id_partenaire)->update([
             'nom' => $request->input('nom'),
             'email' => $request->input('email'),

             'prenom' => $request->input('prenom'),
             'CIN' => $request->input('cin')

         ]);

         return response()->json(['success' => true]);
     }
    }