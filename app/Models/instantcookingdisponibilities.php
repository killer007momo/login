<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instantcookingdisponibilities extends Model
{
    use HasFactory;
    protected $fillable = ['userprofile_id','entrydate'] ;
     
}
