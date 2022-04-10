<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTaxasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxas', function (Blueprint $table) {
            $table->id();
            $table->string('cartao');
            $table->string('boleto');
            $table->string('taxamax');
            $table->string('taxabasica');
            $table->timestamps();
        });

        DB::insert('insert into taxas (cartao, boleto, taxamax, taxabasica) values (?, ?, ?, ?)', ['7,33', '1,37', '1', '2']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taxas');
    }
}
