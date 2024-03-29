<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChudeSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chude_sanpham', function (Blueprint $table) {
            $table->unsignedBigInteger('sp_ma')->comment('Ma san pham');
            $table->unsignedTinyInteger('cd_ma')->comment('Chu de ma');

            // $table->foreign('sp_ma')
            // ->references('sp_ma')->on('sanpham')
            // ->onDelete('CASCADE')
            // ->onUpdate('CASCADE');

            // $table->foreign('cd_ma')
            // ->references('cd_ma')->on('chude')
            // ->onDelete('CASCADE')
            // ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chude_sanpham');
    }
}
