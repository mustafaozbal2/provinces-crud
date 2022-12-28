<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class iller extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'iller';
    protected $primaryKey = 'ilid';
    protected $fillable = ['iller'];
}
