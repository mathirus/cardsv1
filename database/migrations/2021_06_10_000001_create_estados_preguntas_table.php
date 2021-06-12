<?php

use App\EstadoPreguntas;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosPreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados_preguntas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });


        $data = [];
        $data[] = ["nada"];


        EstadoPreguntas::insert([
            ['name'=>'Nada' ],
            ['name'=>'Un poco' ],
            ['name'=>'Medio' ],
            ['name'=>'Muy bien' ],
            ['name'=>'Excelente' ],
        ]);




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estados_preguntas');
    }
}
