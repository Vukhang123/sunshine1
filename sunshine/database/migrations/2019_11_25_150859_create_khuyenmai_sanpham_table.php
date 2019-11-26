<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhuyenmaiSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmai_sanpham', function (Blueprint $table) {
            $table->unsignedBigInteger('km_ma')->autoIncrement()->comment('ma khuyen mai');
            $table->unsignedBigInteger('sp_ma')->comment('ma san pham');
            $table->unsignedTinyInteger('m_ma')->comment('ma mau');
            $table->string('kmsp_giatri',50)->default('100;0')->comment('gia tri khuyen mai san pham');
            $table->unsignedTinyInteger('kmsp_trangthai')->default('2')->comment('trang thai khuyen mai san pham');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuyenmai_sanpham');
    }
}
