<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estacao;
use App\Models\Role;
use App\Models\User;
use App\Models\Gestor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

      /*  $stations = [
            [
                'name' => 'station 1',
                'latitude' => 40.71,
                'longitude' => -74.05,
                'capacity' => 10,
                'premio_entrega'=>1,
                'id_bicicleta'=>0
            ],

            [
                'name' => 'station 2',
                'latitude' => 40.72,
                'longitude' => -70.04,
                'capacity' => 5,
                'premio_entrega'=>1,
                'id_bicicleta'=>0
            ],

            [
                'name' => 'station 3',
                'latitude' => 40.71,
                'longitude' => 60.71,
                'capacity' => 7,
                'premio_entrega'=>1,
                'id_bicicleta'=>0
            ],
        ];
            foreach($stations as $station)
        {
            Estacao::create($station);
        }*/
        

        $roles =  [
            [
                'name' => 'Gestor',
            ],

            [
                'name' => 'Cliente',
            ]
        ];

        foreach($roles as $role)
        {
            Role::create($role);
        }

        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' =>bcrypt('admin') ,
                'image' => '',
                'id_role' => 1,
            ],
        ];

        foreach($users as $user)
        {
            User::create($user);
        }

        $gestores = [
            [
                'id_user' =>  User::first()->id,
            ],
        ];
        foreach($gestores as $gestor)
        {
            Gestor::create($gestor);
        }


        // $stations = [
        //     [
        //         'name' => 'Campos Universitário',
        //         'latitude' => -8.94414,
        //         'longitude' => 13.28082,
        //         'capacity' => 5
        //     ],
        //     [
        //         'name' => 'Zango',
        //         'latitude' => -9.01224,
        //         'longitude' => 13.39703,
        //         'capacity' => 3
        //     ],
        //     [
        //         'name' => 'Centralidade de Cacuaco',
        //         'latitude' => -8.88520,
        //         'longitude' => 13.48752,
        //         'capacity' => 8
        //     ]
        // ];

        // foreach ($stations as $station) {
        //     Estacao::create($station);
        // }
    }
}
