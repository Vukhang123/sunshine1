<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXuatxuLoai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xuatxu', function (Blueprint $table) {
            $table->smallInteger('xx_ma')->autoIncrement();
            $table->string('xx_ten', 100);
            $table->timestamp('xx_taomoi')->nullable()->comment('tao moi');
            $table->timestamp('xx_capnhat')->nullable()->comment('cap nhat');
            $table->tinyIncrements('xx_trangthai')->nullable()->comment('cap nhat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
