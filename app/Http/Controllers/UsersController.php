<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\TipoUsuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;




class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct() {
    //     $this->middleware(['role','role:Administrador']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    // }
    public function index()
    {
        $tipo_usuarios =TipoUsuario::where('estado','activo')->get();   
        $usuarios =User::join('TipoUsuario', "users.tipo_usuario","=","tipousuario.id")
                        ->select('users.id as id', 'name', 'email', 'tipousuario.descripcion as tipo_usuario')
                        ->where('users.estado','activo')->get();
        return view('usuario/usuario/index', compact('usuarios','tipo_usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new User();

        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->tipo_usuario = $request->tipo_usuario;
        $usuario->password =  Hash::make($request->password);
        $usuario->estado = 'Activo';

        $usuario->save();

        return redirect('/usuario')->with('success', 'Registro guardado exitosamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $usuario = User::find($request->id);
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->tipo_usuario = $request->tipo_usuario;
        if($request->password != "")
        {
            $usuario->password =  Hash::make($request->password);
        }
        $usuario->estado = 'Activo';

        $usuario->save();

        return redirect('/usuario')->with('success', 'Registro actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $usuario = User::find($id);
        $usuario->estado = 'Inactivo';
        $usuario->save();

        return redirect('/usuario')->with('success', 'Registro eliminado exitosamente');
 


    }
}
