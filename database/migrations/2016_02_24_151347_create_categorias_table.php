<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateCategoriasTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('categorias');
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_categoria', 200)->unique();
            $table->string('tipo_categoria', 200)->unique();       
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('banners');
    }
}
