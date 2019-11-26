<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->unsignedBigInteger('dh_ma')->autoIncrement()->comment('ma don hang');
            $table->unsignedBigInteger('kh_ma')->comment('ma khach hang');
            $table->datetime('dh_thoigiandathang')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('thoi gian dat hang don hang');
            $table->datetime('dh_thoigiannhanhang')->comment('thoi gian nhan hang ');
            $table->string('dh_nguoinhan',100)->comment('nguoi nhan don hang');
            $table->string('dh_diachi',250)->comment('dia chi don hang');
            $table->string('dh_dienthoai',11)->comment('dien thoai don hang');
            $table->string('dh_nguoigoi',100)->comment('nguoi goi don hang');
            $table->text('dh_loichuc')->nullable()->comment('don hang loi chuc');
            $table->unsignedTinyInteger('sh_dathanhtoan')->default('0')->comment('don hang da thanh toan');
            
            $table->unsignedSmallInteger('nv_xuly')->default('1')->comment('nhan vien xu ly');
            $table->datetime('dh_ngayxuly')->comment('ngay xu ly don hang')->nullable();
            $table->unsignedSmallInteger('nv_giaohang')->default('1')->comment('nhan vien giao hang');
            $table->datetime('dh_ngaylapphieugiaohang')->comment('ngay lap phieu giao hang')->nullable();
            $table->datetime('dh_ngaygiaohang')->comment('ngay giao hang')->nullable();
            $table->timestamp('dh_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('tao moi don hang');
            $table->timestamp('dh_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('cap nhat don hang');
            $table->unsignedTinyInteger('vc_ma')->comment('ma van chuyen');
            $table->unsignedTinyInteger('tt_ma')->comment('ma thanh toan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donhang');
    }
}
