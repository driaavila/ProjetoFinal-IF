<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardapios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardapios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('dia_semana');
            $table->text('cafe');
            $table->text('almoco');
            $table->text('jantar');
            $table->text('almoco_veg');
            $table->text('jantar_veg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cardapios');
    }
}
