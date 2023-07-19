<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class services extends Seeder
{   protected $table ="clinic_base";
    protected $fillable = [
        'name',
        'price'
    ];
    public function run(): void
    {
        //
    }
}
