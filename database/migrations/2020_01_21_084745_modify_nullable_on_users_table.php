<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyNullableOnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::table('users', function(Blueprint $table){
                $table->string('firstname')->nullable()->change();
                $table->string('name')->nullable()->change();
                $table->string('biography')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        schema::table('users', function(Blueprint $table){
            $table->string('firstname')->change();
            $table->string('name')->change();
            $table->string('biography')->change();
    });
    }

 /**
     * Récupère les compétences de l'utilisateur.
     */
    public function skills()
    {
        return $this->belongsToMany('App\Skill')->withPivot('level');
    }


}
