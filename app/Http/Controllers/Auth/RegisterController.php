<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Jurisdiccion;
use App\Estado;
use App\Institucion;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


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
    protected $redirectTo = '/welcome';

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
     * Muestra el formulario de registro con las entidades
     * 
     */
    public function showRegistrationForm()
    {
        $estados = Estado::all();
        $instituciones = Institucion::all();
        $roles = Role::orderBy('name','ASC')->get();
        return view('auth.register', compact('estados', 'instituciones', 'roles'));
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'sistema' => [ 'string', 'max:255'],
            'institucion' => [ 'string', 'max:255'],
            'entidad' => [ 'string', 'max:255'],
            'jurisdiccion' => [ 'string', 'max:255'],
            'municipio' => [ 'string', 'max:255'],
            'localidad' => [ 'string', 'max:255'],
            'unidadMedica' => [ 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'sistema' => $data['sistema'],
            'institucion' => $data['institucion'],
            'entidad' => $data['entidad'],
            'jurisdiccion' => $data['jurisdiccion'],
            'municipio' => $data['municipio'],
            'localidad' => $data['localidad'],
            'unidad_medica' => $data['unidadMedica'], 
        ]);

        $user->assignRole(request('role'));
        return $user;
    }
}
