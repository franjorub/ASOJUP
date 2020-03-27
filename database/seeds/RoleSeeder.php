<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    protected $data = [
        [
           'role'  =>  'Admin',
           'description'    =>  'Usuario principal que puede ejecutar todas las funciones dentro del sistema'
        ],
        [
            'role'  =>  'Delegate',
            'description'   =>  'Usuario secundario, puede solamente registrar usuarios, para ejecutar el resto de funciones deberá solicitar permisos'
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $d) {
            Role::create([
                'name'  =>  $d['role'],
                'description'   =>  $d['description']
            ]);
        }
    }
}
