<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class CreateReclamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            // $table->string('incidence_number')->unique();
            $table->string('type_document');
            $table->string('number_document');
            $table->string('region');
            $table->string('provincia');
            $table->string('distrito');
            $table->text('direccion'); 
            $table->text('categoria');            
            $table->string('email')->unique();
            $table->text('descripcion');
            $table->enum('status', [1,2])->default(1);                       
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reclamos');
    }
}
