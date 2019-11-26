<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->unsignedBigInteger('kh_ma')->autoIncrement()->comment('ma khach hang');
            $table->string('kh_taikhoan',50)->comment('tai khoan khach hang');
            $table->string('kh_matkhau',32)->comment('mat khau khach hang');
            $table->string('kh_hoten',100)->comment('ho ten khach hang');
            $table->unsignedTinyInteger('kh_gioitinh')->default('1')->comment('khach hang gioi tinh');
            $table->string('kh_email',100)->comment('email khach hang');
            $table->datetime('kh_ngaysinh')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('ngay sinh khach hang');
            $table->string('kh_diachi',250)->nullable()->comment('dia chi khach hang');
            $table->string('kh_dienthoai',11)->nullable()->comment('dien thoai khach hang');
            $table->timestamp('kh_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('tao moi khach hang');
            $table->timestamp('kh_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('cap nhat khach hang');
            $table->unsignedTinyInteger('kh_trangthai')->default('3')->comment('trang thai khach hang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khachhang');
    }
}
