<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVanchuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vanchuyen', function (Blueprint $table) {
            $table->unsignedTinyInteger('vc_ma')->autoIncrement()->comment('Ma van chuyen');
            $table->string('vc_ten',200)->comment('Ten van chuyen');
            $table->unsignedInteger('vc_chiphi')->default('0')->comment('chi phi van chuyen');
            $table->text('vc_diengiai')->comment('van chuyen dien giai');
            $table->timestamp('vc_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('tao moi van chuyen');
            $table->timestamp('vc_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('cap nhat van chuyen');
            $table->unsignedTinyInteger('vc_trangthai')->default('2')->comment('van chuyen trang thai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vanchuyen');
    }
}
