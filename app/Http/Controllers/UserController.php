<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends controller

{
    //

    public function create(Request $request){
        $this->validate($request, [
            'nombre' => ['required', 'string', 'max:255'],
            'dni' => ['required', 'integer','unique:users'],
            'domicilio' => ['required', 'string'],
            'localidad' => ['required', 'string', ],
            'emision_clu' => ['required', 'string', ],
            'vencimiento_clu' => ['required', 'date', ],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [   
            'dni.unique'    => 'El dni ya se encuentra registrado',
            'password.required' => 'Debe completar la contraseña',
            'password.min'      => 'Debe tener al menos 8 caracteres',
        ]);
    
        $usuario = new User;
        $usuario->nombre = $request->nombre;
        $usuario->dni = $request->dni;
        $usuario->domicilio = $request->domicilio;
        $usuario->email = $request->email;
        $usuario->localidad = $request->localidad;
        $usuario->emision_clu = $request->emision_clu;
        $usuario->vencimiento_clu = $request->vencimiento_clu;
        $usuario->password = bcrypt($request->password);
        $usuario->save();

        return redirect('/')->with("success",'Usuario Creado Correctamente');
    }

    public function login(Request $request)
        {
            

            if (Auth::attempt(['dni' => $request->dni, 'password' => $request->password])) {
                // Authentication passed...
                $user= User::Where('dni',$request->dni)->first();
                if($user->rol>0){
                    return view('home');
                }else{
                    return view('userDash');
                }
                
            }else{
                return redirect('/')->with("message","Credenciales No correctas");
            }

        }


        public function logout(Request $request)
        {
            
            auth::logout();
            return redirect('/');

        }

        public function getClientes(Request $request){
            $user = User::paginate(5);
            return $user;
        }
        public function checkPago(Request $request){
            
            $user = User::Where('id',$request->id)->first();

            $user->pago = $request->pago;

            $user->save();

            return 1;

        }

    
}
