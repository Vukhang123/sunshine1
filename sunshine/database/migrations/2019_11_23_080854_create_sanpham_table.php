<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->unsignedBigInteger('sp_ma')->autoIncrement();
            $table->string('sp_ten',200)->comment('Ten san pham');
            $table->unsignedTinyInteger('sp_giagoc')->default('0')->comment('Gia goc san pham');
            $table->unsignedTinyInteger('sp_giaban')->default('0')->comment('Gia ban san pham');
            $table->string('sp_hinh',200)->comment('Hinh san pham');
            $table->text('sp_thongtin')->comment('Thong  tin san pham');
            $table->string('sp_danhgia')->comment('Danh gia sna pham');
            $table->timestamp('sp_taomoi')->nullable()->comment('Tao moi san pham');
            $table->timestamp('sp_capnhat')->nullable()->comment('cap nhat san pham');
            $table->unsignedTinyInteger('sp_trangthai')->default('2')->comment('Trang thai san pham');
            $table->unsignedTinyInteger('l_ma')->comment('Ma loai');

            $table->unique(['sp_ten']);
            $table->foreign('l_ma')
            ->references('l_ma')->on('loai')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
