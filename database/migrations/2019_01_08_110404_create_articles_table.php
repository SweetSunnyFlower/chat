<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('type_id')->default(0)->index()->comment('分类id');
            $table->integer('comments')->default(0)->comment('评论数');
            $table->integer('collections')->default(0)->comment('收藏数');
            $table->integer('labels')->default(0)->comment('标签数');
            $table->string('type')->default('')->comment('分类名称');
            $table->string('cover')->default('')->comment('文章封面');
            $table->string('cover_big')->default('')->comment('文章封面大图');
            $table->string('title')->default('')->comment('文章标题');
            $table->text('contents')->comment('文章内容');
            $table->integer('user_id')->index()->comment('用户id');
            $table->integer('sort')->comment('排序');
            $table->timestamp('publish_at')->comment('发布时间');
            $table->timestamps();
            $table->softDeletes();
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
