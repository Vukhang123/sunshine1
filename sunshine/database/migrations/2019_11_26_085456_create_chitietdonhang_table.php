<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietdonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdonhang', function (Blueprint $table) {
            $table->unsignedBigInteger('dh_ma')->comment('ma don hang');
            $table->unsignedBigInteger('sp_ma')->comment('Ma san pham');
            $table->unsignedTinyInteger('m_ma')->comment('Ma mau');
            $table->unsignedSmallInteger('ctdh_soluong')->comment('so luong chi tiet don hang')->default('1');
            $table->unsignedInteger('ctdh_dongia')->comment('don gia chi tiet don hang')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietdonhang');
    }
}
