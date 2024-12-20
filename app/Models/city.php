<?php






// app/Models/City.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    // Optionally, specify table name if it's different from 'cities'
    protected $table = 'cities';
}


