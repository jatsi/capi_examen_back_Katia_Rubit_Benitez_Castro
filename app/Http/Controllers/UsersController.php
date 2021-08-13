<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\user_domicilio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{ 
 
    public function ShowList() {
      $objeto= DB::select('select nombre,YEAR(CURDATE())-YEAR(fecha_nacimiento)  AS edad, domicilio,numero_exterior,colonia,cp,ciudad from users inner join  user_domicilios on user_domicilios.user_id=users.id');
        return $objeto;
    }
   
}
