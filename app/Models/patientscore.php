<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patientscore extends Model
{
    //use HasFactory;
    public $timestamps = false;

    protected $table = 'patientscoretbl';
    protected $primaryKey = 'patientscoretbl';
    protected $guarded = [];
}