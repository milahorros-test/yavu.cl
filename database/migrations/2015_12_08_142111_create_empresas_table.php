<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateEmpresasTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('empresas');
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut', 16)->unique();
            $table->string('email', 100)->unique();
            $table->string('login', 100);
            $table->string('nombre', 200);
            $table->string('direccion', 100);
            $table->string('ciudad', 100);
            $table->string('region', 100);
            $table->string('pais', 100);
            $table->string('fono', 20);
            $table->string('fono_2', 20);
            $table->string('fecha_creacion', 100);
            $table->string('nombre_encargado', 100);
            $table->string('password', 100);
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('empresas');
    }
}
