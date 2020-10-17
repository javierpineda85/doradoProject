<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\User;

class DashboardController extends Controller
{
    public function index(){
        
        return view('/admin/admin');
      }
}