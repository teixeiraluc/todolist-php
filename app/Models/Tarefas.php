<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefas extends Model{
    use HasFactory;
    protected $fillable = ['task', 'comment', 'conclusion_date', 'check'];
}
