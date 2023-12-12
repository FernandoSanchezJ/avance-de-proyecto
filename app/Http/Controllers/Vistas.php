<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Vistas extends Controller
{


    public function paqueteClienteInfo()
    {
        $datos = DB::table('PaqueteClienteInfo')->select('idML', 'nombre_cliente')->get();
        return view("vistas.vista1", compact("datos"));
    }


    public function comparativaPaquete()
{
    $datos = DB::table('ComparativaPaquete')->select('idCodigo', 'tipo_pnr')->get();
    return view("vistas.vista2", compact("datos"));
}


public function clienteCarroInfo()
{
    $datos = DB::table('ClienteCarroInfo')->select('nombre_cliente', 'apellidos', 'marca_carro', 'modelo')->get();
    return view("vistas.vista3", compact("datos"));
}


public function repartidorRutaInfo()
{
    $datos = DB::table('RepartidorRutaInfo')->select('nombre', 'apellidos', 'ruta_asignada')->get();
    return view("vistas.vista4", compact("datos"));
}


public function usuariosPerfil()
{
    $datos = DB::table('UsuariosPerfil')->select('nombreU', 'perfil', 'contraseña')->get();
    return view("vistas.vista5", compact("datos"));
}


/*

public function consultaUsuariosPerfiles()
{
    $datos = DB::table('usuarios')
        ->join('perfiles', 'usuarios.perfil_id', '=', 'perfiles.id')
        ->select('usuarios.correo_electronico', 'perfiles.nombre_perfil')
        ->get();

    return view('consultas.consulta1', ['datos' => $datos]);
}

public function consultaDoctoresPacientes()
{
    $datos = DB::table('info_doctores')
        ->join('recetas_medicas', 'info_doctores.id', '=', 'recetas_medicas.id_doctor')
        ->join('info_pacientes', 'recetas_medicas.id_paciente', '=', 'info_pacientes.id')
        ->select('info_doctores.nombre AS nombre_doctor', 'info_pacientes.nombre AS nombre_paciente')
        ->get();

    return view('consultas.consulta2', ['datos' => $datos]);
}
public function consultaPacientesDoctores()
{
    $datos = DB::table('info_pacientes')
        ->join('recetas_medicas', 'info_pacientes.id', '=', 'recetas_medicas.id_paciente')
        ->join('info_doctores', 'recetas_medicas.id_doctor', '=', 'info_doctores.id')
        ->select('info_pacientes.nombre AS nombre_paciente', 'info_doctores.nombre AS nombre_doctor')
        ->get();

    return view('consultas.consulta3', ['datos' => $datos]);
}*/
}
