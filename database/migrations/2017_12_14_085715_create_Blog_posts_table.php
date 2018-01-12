<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTable extends Migration
{
    public function up()
    {
        Schema::create('Blog_posts', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('user_id');
            $table->string('name')->collate('utf8_unicode_ci');
            $table->string('post_title')->collate('utf8_unicode_ci');
            $table->string('email', 30);
            $table->longText('information')->collate('utf8_unicode_ci');
            // $table->charset = 'utf8mb4';
            // $table->collation = 'utf8mb4_unicode_ci';
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Blog_posts');
    }
}
