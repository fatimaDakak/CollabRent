<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function login(Request $request) {
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        $messages = [
            'email.required' => 'Votre mail ou mot de pass est incorrect',
            'password.required' => 'Votre mail ou mot de pass est incorrect',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect('login')->withErrors($validator)->withInput();
        }

        $user = User::where('email', $request->email)->first(); // récupérer l'utilisateur à partir de l'e-mail

        if(!$user || !Hash::check($request->password, $user->password)) { // vérifier si l'utilisateur existe et si le mot de passe est correct
            return redirect('login')->withErrors(['error' => 'Email ou mot de passe incorrect'])->withInput();
        }

        // si les informations d'identification sont correctes, connectez l'utilisateur
        Auth::login($user);

        $user_role = $user->role;
        switch($user_role){
            case 1:
                return redirect('/admin');
                break;
            case 2:
                return redirect('/partenaire');
                break;
            default:
                Auth::logout();
                return redirect('login')->withErrors(['error' => 'Oops something went wrong'])->withInput();
        }
    }


}
