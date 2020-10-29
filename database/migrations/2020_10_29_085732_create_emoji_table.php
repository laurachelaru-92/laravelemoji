<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmojiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emoji', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('character'); 
            $table->string('unicodeName', 100)->unique(); 
            $table->string('codePoint',15)->unique();
            $table->string('group', 100); 
            $table->string('subGroup',100);
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
        Schema::dropIfExists('emoji');
    }
}
