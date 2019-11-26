<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhieunhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieunhap', function (Blueprint $table) {
            $table->unsignedBigInteger('pn_ma')->autoIncrement()->comment('Ma phieu nhap');
            $table->string('pn_nguoigiao',100)->comment('nguoi giao phieu nhap');
            $table->string('pn_sohoadon',15)->comment('so hoa don phieu nha');
            $table->datetime('pn_ngayxuathoadon')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('ngya xuat hoa don phieu nhap');
            $table->text('ph_ghichu')->nullable()->comment('ghi chu phieu nhap');
            $table->unsignedSmallInteger('nv_nguoilapphieu')->comment('Nhan vien lap phieu');
            $table->datetime('nv_ngaylapphieu')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Nhan vien ngay lap phieu');
            $table->unsignedSmallInteger('nv_ketoan')->default('1')->comment('nhan vien ke toan');
            $table->datetime('pn_ngayxacnhan')->nullable()->comment('ngay xac nhan phieu nhan');
            $table->unsignedSmallInteger('nv_thukho')->default('1')->comment('nhan vien thu kho');
            $table->datetime('pn_ngaynhapkho')->nullable()->comment('ngay nhap kho phieu nhap');
            $table->timestamp('pn_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('tao moi phieu nhap');
            $table->timestamp('pn_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('cap nhat phieu nhap');
            $table->unsignedInteger('pn_trangthai')->default('2')->comment('trang thai phieu nhap');
            $table->unsignedSmallInteger('ncc_ma')->comment('ma nha cung cap');
            $table->unique(['pn_sohoadon']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phieunhap');
    }
}
