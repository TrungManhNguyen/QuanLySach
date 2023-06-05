<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB; 

class Controller extends BaseController
{   
 use AuthorizesRequests, ValidatesRequests;
    public $data=[];
    public function index(){
    return 'unicode'; 
    return view('views.index',$this->data);
    }
}