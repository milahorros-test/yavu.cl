<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class AddDeletedToAdminsTable extends Migration
{
    public function up()
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::table('admins', function (Blueprint $table) {
            
        });
    }
}
