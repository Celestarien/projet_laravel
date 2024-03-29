<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('role_user', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('role_id')->unsigned();
        $table->integer('user_id')->unsigned();
      });
    }
    public function down()
    {
      Schema::dropIfExists('role_user');
    }
    public function users()
    {
    return $this->belongsToMany(User::class);
    }
}
