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
        Schema::create('new_books', function (Blueprint $table) {
          
            //table->datatype('column_name',length);
            // truncated
            $table->id();
            $table->string('name',100);
            $table->string('owner',100);
            $table->text('address')->nullable();
            $table->string('mobile',20);
            $table->timestamps(); //created_at, updated_at
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_books');
    }
};
