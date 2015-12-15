<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('empresas');
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('ID_EMPRESA');
            $table->string('RUT_EMPRESA', 16)->unique();
            $table->string('EMAIL_EMPRESA', 100)->unique();
            $table->string('LOGIN_EMPRESA', 100)->unique();
            $table->string('NOMBRE_EMPRESA', 200);
            $table->string('DIRECCION_EMPRESA', 100);
            $table->string('CIUDAD_EMPRESA', 100);
            $table->string('REGION_EMPRESA', 100);
            $table->string('PAIS_EMPRESA', 100);
            $table->string('FONO_EMPRESA', 20);
            $table->string('FONO_2_EMPRESA', 20);
            $table->string('FECHA_CREACION_EMPRESA', 100);
            $table->string('NOMBRE_ENCARGADO_EMPRESA', 100);
            $table->string('PASSWORD_EMPRESA', 100);
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
        Schema::drop('empresas');
    }
}
