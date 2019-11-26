<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loai', function (Blueprint $table) {
            $table->unsignedTinyInteger('l_ma')->autoIncrement();
            $table->string('l_ten',50)->comment('Ten Loai');
            $table->timestamp('l_taomoi')->nullable()->comment('Tao Moi');

            $table->timestamp('l_capnhat')
            ->nullable()
            ->comment('Cap Nhat');

            $table->unsignedTinyInteger('l_trangthai')
            ->nullable()
            ->comment('#1: khoa; #2: kha dung');
            
            $table->unique(['l_ten']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loai');
    }
}
