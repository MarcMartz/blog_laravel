<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('photo', 255)->nullable();
            $table->string('profession',60)->nullable();                
            $table->string('about',255)->nullable();                
            $table->string('twitter',100)->nullable();                
            $table->string('linkedin',100)->nullable();                
            $table->string('facebook',100)->nullable();                

            $table->timestamps();

            //Relación Profile--User
            $table->foreignId('user_id')->constrained()
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
