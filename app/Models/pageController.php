<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pageController extends Model
{
 public  function index(){
    $trains = train::all();
    dd($trains);
 }
}
