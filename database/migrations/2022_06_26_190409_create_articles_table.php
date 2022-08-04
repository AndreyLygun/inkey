<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('phone')->comment('Номер как указан на объявлении');
            $table->bigInteger('cleaned_phone')->nullable()->index()->comment('Только цифры номера');
            $table->integer('category_id')->default(1);
            $table->string('title');
            $table->string('city')->default('');
            $table->string('coord')->default('');
            $table->string('address')->default('');
            $table->string('photo')->default('');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
