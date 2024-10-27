<?php


// app/Models/Category.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Optionally, specify the table name if it’s different from 'categories'
    protected $table = 'categories';
}

