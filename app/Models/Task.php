<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // If your table does not have 'created_at' and 'updated_at' columns,
    // set the following to false
    public $timestamps = true;

    protected $fillable = [
        'title', // Make sure 'title' is in the fillable array
    ];
}
