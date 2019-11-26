<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChudeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chude', function (Blueprint $table) {
            $table->unsignedInteger('cd_ma')->autoIncrement()->comment('Ma chu de');
            $table->string('cd_ten',50)->comment('Ten chu de');
            $table->timestamp('cd_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Tao moi chu de');
            $table->timestamp('cd_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Cap nhat chu de');
            $table->unsignedTinyInteger('cd_trangthai')->default('2')->comment('Chu de trang thai');
            $table->unique(['cd_ten']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chude');
    }
}
