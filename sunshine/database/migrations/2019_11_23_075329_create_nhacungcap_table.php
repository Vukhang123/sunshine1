<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhacungcapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhacungcap', function (Blueprint $table) {
            $table->unsignedSmallInteger('ncc_ma')->autoIncrement();
            $table->string('ncc_ten',200)->comment('Ten Nha Cung Cap');
            $table->string('ncc_daidien',100)->comment('Dai dien nha cung cap');
            $table->string('ncc_diachi',250)->comment('dia chi nha cung cap');
            $table->string('ncc_dienthoai',11)->comment('dien thoai nha cung cap');
            $table->string('ncc_email',100)->comment('email nha cung cap');
            $table->timestamp('ncc_taomoi')->nullable()->comment('Tao moi');
            $table->timestamp('ncc_capnhat')->nullable()->comment('Cap nhat');
            $table->unsignedTinyInteger('ncc_trangthai')->comment('#1: khoa; #2: kha dung');
            $table->unsignedSmallInteger('xx_ma')->comment('Ma xuat xu');
            
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhacungcap');
    }
}
