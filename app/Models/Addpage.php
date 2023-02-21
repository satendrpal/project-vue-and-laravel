<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addpage extends Model
{
    use HasFactory;
     protected $table ='Addpages';
     protected $fillable =[
       'First_name',
       'Last_name',
       'phone',
       'City',
       'State',
       'Country',
      
      
     ];
}
