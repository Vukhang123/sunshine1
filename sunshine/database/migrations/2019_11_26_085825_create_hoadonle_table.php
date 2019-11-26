<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoadonleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadonle', function (Blueprint $table) {
            $table->unsignedBigInteger('hdl_ma')->autoIncrement()->comment('Ma hoa don le');
            $table->string('hdl_nguoimuahang',100)->comment('hoa don le nguoi mua hang');
            $table->string('hdl_dienthoai',11)->comment('hoa don le dien thoai');
            $table->string('hdl_diachi',250)->comment('dia chi hoa don le');
            $table->unsignedSmallInteger('nv_laphoadon')->comment('nhan vien lap hoa don');
            $table->datetime('hdl_ngayxuathoadoan')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('ngay xuat hoa don doan');
            $table->unsignedBigInteger('dh_ma')->default('1')->comment('ma don hang');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadonle');
    }
}
