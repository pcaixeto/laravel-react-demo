<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = ['firstName', 'lastName', 'email', 'phone', 'department_id'];
}
