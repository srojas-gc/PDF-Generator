<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreFieldsToTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->text('contenido5')->nullable();
            $table->text('contenido6')->nullable();
            $table->text('contenido7')->nullable();
            $table->text('contenido8')->nullable(); 
            $table->text('contenido9')->nullable();
            $table->text('contenido10')->nullable(); 
            $table->text('contenido11')->nullable();
            $table->text('contenido12')->nullable();
            $table->text('contenido13')->nullable(); 
            $table->text('contenido14')->nullable();
            $table->text('contenido15')->nullable();
            $table->text('contenido16')->nullable();
            $table->text('contenido17')->nullable(); 
            $table->text('contenido18')->nullable();
            $table->text('contenido19')->nullable();
            $table->text('contenido20')->nullable();  
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
            $table->dropColumn('contenido5');
            $table->dropColumn('contenido6');
            $table->dropColumn('contenido7');
            $table->dropColumn('contenido8');
            $table->dropColumn('contenido9');
            $table->dropColumn('contenido10');
            $table->dropColumn('contenido11');
            $table->dropColumn('contenido12');
            $table->dropColumn('contenido13');
            $table->dropColumn('contenido14');
            $table->dropColumn('contenido15');
            $table->dropColumn('contenido16');
            $table->dropColumn('contenido17');
            $table->dropColumn('contenido18');
            $table->dropColumn('contenido19');
            $table->dropColumn('contenido20');
        });
    }
}
