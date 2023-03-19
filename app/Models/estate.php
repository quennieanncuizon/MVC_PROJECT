<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estate extends Model
{
   //Define the name of the database table
   protected $table = 'estate';

   //Define the propertise that can be mass assigned
   protected $fillable = [

    'name',
    'email',
    'address',
    'message',

   ];  
}
   