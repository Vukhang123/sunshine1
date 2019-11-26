<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietnhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietnhap', function (Blueprint $table) {
            $table->unsignedBigInteger('pn_ma')->comment('ma phieu nhap');
            $table->unsignedBigInteger('sp_ma')->comment('Ma san pham');
            $table->unsignedTinyInteger('m_ma')->comment('Ma mau');
            $table->unsignedSmallInteger('ctn_soluong')->default('1')->comment('So luong chi tiet nhap');
            $table->unsignedInteger('ctn_dongia')->default('1')->comment('don gia chi tiet nhap');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietnhap');
    }
}
