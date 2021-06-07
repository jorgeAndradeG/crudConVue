<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thought extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    public $timestamps = true;
	protected $table = 'thoughts';	
	protected $guarded = [];
}
