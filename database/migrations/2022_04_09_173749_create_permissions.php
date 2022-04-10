<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('nivel');
            $table->timestamps();
        });

        DB::insert('insert into permissions (id, nome, nivel) values (?, ?, ?)', [1, 'admin', 1]);
        DB::insert('insert into permissions (id, nome, nivel) values (?, ?, ?)', [2, 'user', 2]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}
