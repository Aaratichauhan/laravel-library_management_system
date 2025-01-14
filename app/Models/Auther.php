<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auther extends Model
{
    use HasFactory;

    protected $table = 'authers';
    protected $primarykey = 'id';
    protected $fillable = ['name'];
    public $timestamps;
}
