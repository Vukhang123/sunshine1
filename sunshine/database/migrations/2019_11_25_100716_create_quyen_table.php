<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quyen', function (Blueprint $table) {
            $table->unsignedTinyInteger('q_ma')->comment('Ma quyen')->autoIncrement();
            $table->string('q_ten',30)->comment('Ten quyen');
            $table->string('q_diengiai',250)->comment('dien giai quyen');
            $table->timestamp('q_taomoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Quyen tao moi');
            $table->timestamp('q_capnhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Quyen cap nhat');
            $table->unsignedTinyInteger('Q_trangthai')->default('2')->comment('Quyen trang thai');

            $table->unique(['q_ten']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quyen');
    }
}
