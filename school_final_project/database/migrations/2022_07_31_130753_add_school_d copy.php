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
        Schema::create('add_schools', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->text('address',200);
            $table->text('city');
            $table->text('state');
            $table->integer('contact');
            $table->char('images');
            $table->text('mail');
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
        //
    }
};
