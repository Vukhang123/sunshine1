<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoadonsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadonsi', function (Blueprint $table) {
            $table->unsignedBigInteger('hds_ma')->autoIncrement()->comment('Ma hoa don si');
            $table->string('hds_nguoimuahang',100)->comment('hoa don le nguoi mua hang');
            $table->string('hds_tendonvi',200)->comment('hoa don si nguoi mua hang');
            $table->string('hds_diachi',250)->comment('dia chi hoa don si');
            $table->string('hds_masothue',14)->comment('ma so thue hoa don si');
            $table->string('hds_sotaikhoan',20)->nullable()->comment('so tai khoan hoa don si');
            $table->unsignedSmallInteger('nv_laphoadon')->comment('nhan vien lap hoa don');
            $table->datetime('hds_ngayxuathoadon')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('ngay xuat hoa don si');
            $table->unsignedSmallInteger('nv_thutruong')->default('1')->comment('nhan vien thu truong');
            $table->timestamp('hds_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('tao moi hoa don si');   
            $table->timestamp('hds_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('cap nhat hoa don si');   
            $table->unsignedTinyInteger('hds_trangthai')->default('1')->comment('hoa don si trang thai');
            $table->unsignedBigInteger('dh_ma')->comment('ma don hang')->default('1');
            $table->unsignedTinyInteger('tt_ma')->comment('Ma thanh toan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadonsi');
    }
}
