<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheklarSeeder extends Model
{    
    protected $table ="receipt";
    protected $fillable = [
        'name',
        'phone',
        
    ];
    use HasFactory;
}
