<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('role_id')->default(4);
            $table->string('first_name',100)->nullable();
            $table->string('last_name',100)->nullable();
            $table->string('username',100)->nullable();
            $table->string('photo',100)->nullable();
            $table->string('phone',100)->nullable();
            $table->string('email',100)->unique();
            $table->text('address')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('creator',100)->nullable();
            $table->string('slug',100)->nullable();
            $table->integer('status')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });

        
        $users = [
            [
                'role_id' => 1,
                'first_name' => 'Judichaël',
                'last_name' => 'Kessahou',
                'username' => 'Kess',
                'photo' => '',
                'phone' => '',
                'email' => 'Jkessahou@gmail.com',
                'address' => '',
                'email_verified_at' => null,
                'password' => Hash::make('12345678'),
                'creator' => '',
                'slug' => 'super_admin',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_id' => 1,
                'first_name' => 'Benjamin',
                'last_name' => 'Ewedje',
                'username' => 'Ben',
                'photo' => '',
                'phone' => '',
                'email' => 'benewedje.be@gmail.com',
                'address' => '',
                'email_verified_at' => null,
                'password' => Hash::make('12345678'),
                'creator' => '',
                'slug' => 'super_admin',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('users')->insert($users);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
