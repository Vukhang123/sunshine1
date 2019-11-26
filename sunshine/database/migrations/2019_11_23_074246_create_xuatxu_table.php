<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXuatxuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xuatxu', function (Blueprint $table) {
            $table->unsignedSmallInteger('xx_ma')->autoIncrement();
            $table->string('xx_ten',50)->comment('Ten Xuat Xu');
            $table->timestamp('xx_taomoi')
            ->nullable()
            ->comment('Tao Moi Xuat Xu');

            $table->timestamp('xx_capnhat')
            ->nullable()
            ->comment('Cap Nhat Xuat Xu');
            
            $table->unsignedTinyInteger('xx_trangthai')
            ->nullable()
            ->comment('#1: khoa; #2: kha dung');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xuatxu');
    }
}
