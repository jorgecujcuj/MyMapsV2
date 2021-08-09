<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\hash;

class usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::create([
            'name' => 'admin Jorge',
            'email' => 'admin@gmail.com',
            'password' => hash::make('adminLeonardo'),
            'codigo' => 'admin1',
            'fullacces' => 'yes',
        ]);
        $user1=User::create([
            'name' => 'usuario bodega',
            'email' => 'bodega@gmail.com',
            'password' => hash::make('usuarioUno'),
            'codigo' => 'user1',
            'fullacces' => 'no',
        ]);
    }
}
