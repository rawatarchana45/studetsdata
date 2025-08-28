<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;


class FileController extends Controller

{
   public function subject(){
   $file= File:: where('maths','>',50)->where('english','>',50)->get();
    return $file;
   }
}
