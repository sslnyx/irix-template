<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registrant extends Model
{
    //
    public $table = 'registrants';
    public $fillable = ['firstName', 'lastName', 'email', 'phone', 'city', 'postalCode', 'reference', 'realtor'];

}
