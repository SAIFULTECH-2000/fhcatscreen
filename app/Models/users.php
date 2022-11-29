<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
        public $timestamps = false;

     protected $table = 'admintbl';
    protected $primaryKey = 'adminid';
    protected $fillable = ['adminname', 'adminstaffid', 'adminstate', 'adminlocation', 'adminaddress', 'adminemail','adminusername','adminpassword','adminlevel','registerdate'];
}