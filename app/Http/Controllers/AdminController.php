<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    //return view('admin/admin');
    return view('admin/dashboard');
  }

  public function historiaClinica(){
    return view('admin/historia-clinica');
  }

  public function gestionUsuario(){
    return view('admin/gestion-de-usuarios');
  }

  public function listadoUsuario(){
    return view('admin/listado-de-usuarios');
  }

  public function listadoPaciente(){
    return view('admin/listado-de-pacientes');
  }

  public function nuevoProfesional(){
    return view('admin/nuevo-profesional');
  }

  public function evolucionarPaciente(){
    return view('admin/evolucionar-paciente');
  }
}
