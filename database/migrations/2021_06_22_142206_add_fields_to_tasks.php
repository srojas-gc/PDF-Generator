<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->timestamp('fecha_emision')->nullable();
            $table->timestamp('valido_hasta')->nullable();
            $table->text('contenido1')->nullable();
            $table->text('contenido2')->nullable();
            $table->text('contenido3')->nullable();
            $table->text('contenido4')->nullable();            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn('fecha_emision');
            $table->dropColumn('valido_hasta');
            $table->dropColumn('contenido1');
            $table->dropColumn('contenido2');
            $table->dropColumn('contenido3');
            $table->dropColumn('contenido4');
        });
    }
}
