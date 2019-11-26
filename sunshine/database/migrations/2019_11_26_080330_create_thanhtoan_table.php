<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThanhtoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thanhtoan', function (Blueprint $table) {
            $table->unsignedTinyInteger('tt_ma')->autoIncrement()->comment('Ma thanh toan');
            $table->string('tt_ten',200)->comment('Ten thanh toan');
            $table->text('tt_diengiai')->comment('Thanh toan dien giai');
            $table->timestamp('tt_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('tao moi thanh toan');
            $table->timestamp('tt_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('cap nhat thanh toan');
            $table->unsignedTinyInteger('tt_trangthai')->default('3')->comment('trang thai thanh toan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thanhtoan');
    }
}
