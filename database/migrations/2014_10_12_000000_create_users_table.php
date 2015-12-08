<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->increments('ID_USUARIO');
            $table->string('RUT_USUARIO', 16)->unique();            
            $table->string('EMAIL_USUARIO', 200)->unique();
            $table->string('LOGIN_USUARIO', 100)->unique();              
            $table->string('NOMBRE_USUARIO', 100);
            $table->string('APELLIDO_USUARIO', 100);          
            $table->string('DIRECCION_USUARIO', 100);
            $table->string('CIUDAD_USUARIO', 100);
            $table->string('REGION_USUARIO', 100);
            $table->string('PAIS_USUARIO', 100);
            $table->string('FONO_USUARIO', 20);
            $table->string('FONO_2_USUARIO', 20);
            $table->string('SEXO_USUARIO', 10);
            $table->string('FECHA_NACIMIENTO_USUARIO', 100);
            $table->string('PASSWORD_USUARIO', 60);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
