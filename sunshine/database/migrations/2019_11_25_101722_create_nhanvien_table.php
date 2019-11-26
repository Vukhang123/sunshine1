<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->unsignedTinyInteger('nv_ma')->comment('Ma nhan vien')->autoIncrement();
            $table->string('nv_taikhoan',50)->comment('Tai khoan nhan vien');
            $table->string('nv_matkhau',32)->comment('Mat khau nhan vien');
            $table->string('nv_hoten',100)->comment('Ho ten nhan vien');
            $table->unsignedTinyInteger('nv_gioitinh')->default('1')->comment('Gioi tinh nhan vien');
            $table->string('nv_email',100)->comment('email nhan vien');
            $table->datetime('nv_ngaysinh')->comment('Ngay sinh nhan vien')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('nv_diachi',250)->comment('Dia chi nhan vien');
            $table->string('nv_dienthoai',11)->comment('Dien thoai nhan vien');
            $table->timestamp('nv_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Tao moi nhan vien');
            $table->timestamp('nv_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Cap nhat nhan vien');
            $table->unsignedTinyInteger('nv_trangthai')->default('2')->comment('Trang thai nhan vien');
            $table->unsignedTinyInteger('q_ma')->comment('Ma quyen');

            $table->unique(['nv_taikhoan']);
            $table->unique(['nv_email']);
            $table->unique(['nv_dienthoai']);

            $table->foreign('q_ma')
            ->references('q_ma')->on('quyen')
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
        Schema::dropIfExists('nhanvien');
    }
}
