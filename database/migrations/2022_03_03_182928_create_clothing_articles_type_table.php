<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClothingArticlesTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clothing_article_types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 15);
        });

        DB::table('clothing_article_types')->insert([
                ['name' => 'top'],
                ['name' => 'bottom'],
                ['name' => 'shoes'],
                ['name' => 'fullbody'],
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clothing_articles_type');
    }
}
