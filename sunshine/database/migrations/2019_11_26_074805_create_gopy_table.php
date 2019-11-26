<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGopyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gopy', function (Blueprint $table) {
            $table->unsignedBigInteger('gy_ma')->autoIncrement()->comment('Ma gop y');
            $table->datetime('gy_thoigian')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('thoi gian gop y');
            $table->text('gy_noidung')->comment('noi dung gop y');
            $table->unsignedBigInteger('km_ma')->comment('khuyen mai ma');
            $table->unsignedBigInteger('sp_ma')->comment('ma san pham');
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
        Schema::dropIfExists('gopy');
    }
}
