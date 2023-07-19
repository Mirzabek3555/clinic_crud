<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CheklarSeeder extends Seeder
{
    protected $table ="receipt";
    protected $fillable = [
        'name',
        'phone',
        'check'
    
    ];
    public function run(): void
    {
        //
    }
}
