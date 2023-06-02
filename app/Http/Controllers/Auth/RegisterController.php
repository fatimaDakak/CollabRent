<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Client;
use App\Models\Partenaire;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'id' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'CIN' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:client', 'unique:partenaire'],
            'mot_de_passe' => ['required', 'string', 'min:6', 'confirmed'],
        ], [
            'email.unique' => 'Cet email est déjà utilisé.',
            'CIN.unique' => 'Ce numéro de CIN est déjà utilisé.',
            'mot_de_passe.required' => 'Le champ Mot de passe est requis.',
            'mot_de_passe.min' => 'Le champ Mot de passe doit avoir au moins 6 caractères.',
            'mot_de_passe.confirmed' => 'Les mots de passe ne correspondent pas.',
        ]);
    }

  /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data,
     * @return \App\Models\User,
     * @return \App\Models\Client,
     * @return \App\Models\Partenaire,
     */
protected function create(array $data)
{
    // Validate the incoming registration request
    $validator = $this->validator($data);
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

         $image = $data['image'];
          $imagename = time().'.'.$image->getClientOriginalExtension();
          $image->move(public_path('profile_pictures'), $imagename);
          // Save the data to the appropriate table based on the selected role

        
    {
        $client = Client::create([
            'nom' => $data['name'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'CIN' => $data['CIN'],
            'mot_de_passe' => Hash::make($data['mot_de_passe']),
            'role' => 2,
        ]); 
    
        $partenaire = Partenaire::create([
            'nom' => $data['name'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'CIN' => $data['CIN'],
            'mot_de_passe' => Hash::make($data['mot_de_passe']),
            'role' => 2,

        ]); 
    
       $user = User::create([
            'id_client' => $client->id,
            'id_partenaire' => $partenaire->id,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['mot_de_passe']),
            'role' => 2,
            'image' => $imagename,

        ])
        ;
        return $user;
        
     }
       
       

     
    //     if ($data->hasFile('image') && $data->file('image')->isValid()) {
    //         $image = $data->file('image');
    //         $imagename = time().'.'.$image->getClientOriginalExtension();
    //         $image->storeAs('public/ptofile_picture', $imagename);
    //         $user->image = $imagename;
    //     } else {
    //         $user->image = 'default_image.jpg'; // Set a default value
    //     }

    // }

    // Send verification email to the user
    // $user->sendEmailVerificationNotification();
    // $client->sendEmailVerificationNotification();
    // $partenaire->sendEmailVerificationNotification();
    
   
    // Redirect to the login page with success message
    return redirect('/Auth/login')->with('success', 'Votre compte a été créé avec succès! Veuillez vérifier votre adresse e-mail pour activer votre compte.');
}
}

