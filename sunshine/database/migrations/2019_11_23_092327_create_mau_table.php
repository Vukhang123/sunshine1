<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mau', function (Blueprint $table) {
            $table->unsignedTinyInteger('m_ma')->autoIncrement()->comment('Ma mau');
            $table->string('m_ten',50)->comment('Ten mau');
            $table->timestamp('m_taomoi')->nullable()->comment('Tao mau moi');
            $table->timestamp('m_capnhat')->nullable()->comment('Cap nhat mau ');
            $table->unsignedTinyInteger('m_trangthai')->default('2')->comment('Trang thai');
            $table->unique(['m_ten']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mau');
    }
}
