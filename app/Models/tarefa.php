<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarefa extends Model
{
    protected $fillable = ['title', 'description', 'assignee_id', 'due_date'];
}
