<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->string('user_name')->default('')->comment('评论人姓名');
            $table->string('type')->default('')->comment('关联类型');
            $table->integer('aid')->index()->comment('关联id');
            $table->string('comments')->default('')->comment('评论内容');
            $table->integer('pid')->default(0)->index()->comment('父id');
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
        Schema::dropIfExists('comments');
    }
}
