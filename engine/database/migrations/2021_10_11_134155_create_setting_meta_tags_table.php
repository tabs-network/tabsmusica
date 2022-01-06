<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingMetaTagsTable extends Migration
{
    public function up()
    {
        Schema::create('setting_meta_tag', function (Blueprint $table) {
            $table->id();
            $table->string('page');
            $table->string('meta_title');
            $table->text('meta_description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('setting_meta_tag');
    }
}
