<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


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
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'telephone' => 'nullable',
            'adresse' => 'required',
            'piece_identite' => 'nullable|in:carte_identite,passeport',
            'role_id' => 'required|exists:roles,id',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $defaultRole = Role::where('nom', 'User')->first();
        return User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'telephone' => $data['telephone'],
            'adresse' => $data['adresse'],
            'piece_identite' => $data['piece_identite'],
            'role_id' => $defaultRole->id,
        ]);
    }

     /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $user = $this->create($request->all());
        dd($user);
        return redirect()->route('auth.login')->with('success', 'Utilisateur créé avec succès !');
    }



    // public function create()
    // {
    //     return view('auth.register');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nom' => 'required|string',
    //         'prenom' => 'required|string',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:6',
    //         'telephone' => 'required',
    //         'adresse' => 'required',
    //         'piece_identite' => 'nullable|in:carte_identite,passeport',
    //         'role_id' => 'required|exists:roles,id',
    //     ]);

    //     // Code pour enregistrer l'utilisateur dans la base de données

    //     return redirect()->route('auth.login')->with('success', 'Utilisateur créé avec succès !');
    // }

}
