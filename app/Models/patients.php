<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
    //use HasFactory;
    public $timestamps = false;

    protected $table = 'patienttbl';
    protected $primaryKey = 'patientid';
    protected $guarded = [];
    //protected $fillable = ['adminname', 'adminstaffid', 'adminstate', 'adminlocation', 'adminaddress', 'adminemail','adminusername','adminpassword','adminlevel','registerdate'];
}