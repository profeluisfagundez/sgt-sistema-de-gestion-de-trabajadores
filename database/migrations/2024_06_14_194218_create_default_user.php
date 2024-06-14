<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateDefaultUser extends Migration
{
    public function up()
    {
        if (Schema::hasTable('users')) {
            DB::table('users')->insert([
                'name' => 'Administrador',
                'email' => 'administrador@sgt.com',
                'password' => Hash::make('administrador'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    public function down()
    {
        if (Schema::hasTable('users')) {
            DB::table('users')->where('email', 'admin@example.com')->delete();
        }
    }
}
