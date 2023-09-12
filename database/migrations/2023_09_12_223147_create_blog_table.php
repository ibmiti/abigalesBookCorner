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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('author', 100);
            $table->string('type', 100);
            $table->string('subtype', 100)->nullable();
            $table->string('title', 200);
            $table->string('quip', 200);
            $table->string('excerpt', 600);
            $table->string('intro', 600)->nullable();
            $table->string('heading1', 100);
            $table->string('heading2', 100)->nullable();
            $table->string('heading3', 100)->nullable();
            $table->string('heading4', 100)->nullable();
            $table->string('heading5', 100)->nullable();
            $table->string('heading6', 100)->nullable();
            $table->string('heading7', 100)->nullable();
            $table->string('heading8', 100)->nullable();
            $table->string('heading9', 100)->nullable();
            $table->string('heading10',100)->nullable();
            $table->text('paragraph1Heading1', 600);
            $table->text('paragraph2Heading1', 600)->nullable();
            $table->text('paragraph3Heading1', 600)->nullable();
            $table->text('paragraph1Heading2', 600)->nullable();
            $table->text('paragraph2Heading2', 600)->nullable();
            $table->text('paragraph3Heading2', 600)->nullable();
            $table->text('paragraph1Heading3', 600)->nullable();
            $table->text('paragraph2Heading3', 600)->nullable();
            $table->text('paragraph3Heading3', 600)->nullable();
            $table->text('paragraph1Heading4', 600)->nullable();
            $table->text('paragraph2Heading4', 600)->nullable();
            $table->text('paragraph3Heading4', 600)->nullable();
            $table->text('paragraph1Heading5', 600)->nullable();
            $table->text('paragraph2Heading5', 600)->nullable();
            $table->text('paragraph3Heading5', 600)->nullable();
            $table->text('paragraph1Heading6', 600)->nullable();
            $table->text('paragraph2Heading6', 600)->nullable();
            $table->text('paragraph3Heading6', 600)->nullable();
            $table->text('paragraph1Heading7', 600)->nullable();
            $table->text('paragraph2Heading7', 600)->nullable();
            $table->text('paragraph3Heading7', 600)->nullable();
            $table->text('paragraph1Heading8', 600)->nullable();
            $table->text('paragraph2Heading8', 600)->nullable();
            $table->text('paragraph3Heading8', 600)->nullable();
            $table->text('paragraph1Heading9', 600)->nullable();
            $table->text('paragraph2Heading9', 600)->nullable();
            $table->text('paragraph3Heading9', 600)->nullable();
            $table->text('paragraph1Heading10', 600)->nullable();
            $table->text('paragraph2Heading10', 600)->nullable();
            $table->text('paragraph3Heading10', 600)->nullable();
            $table->text('image_name')->nullable();
            $table->text('image1_name')->nullable();
            $table->text('image2_name')->nullable();
            $table->text('image3_name')->nullable();
            $table->text('image4_name')->nullable();
            $table->text('image5_name')->nullable();
            $table->text('image6_name')->nullable();
            $table->text('image7_name')->nullable();
            $table->text('image8_name')->nullable();
            $table->text('image9_name')->nullable();
            $table->text('image10_name')->nullable();
            $table->text('imageCredit', 1000)->nullable();
            $table->text('imageCredit1', 1000)->nullable();
            $table->text('imageCredit2', 1000)->nullable();
            $table->text('imageCredit3', 1000)->nullable();
            $table->text('imageCredit4', 1000)->nullable();
            $table->text('imageCredit5', 1000)->nullable();
            $table->text('imageCredit6', 1000)->nullable();
            $table->text('imageCredit7', 1000)->nullable();
            $table->text('imageCredit8', 1000)->nullable();
            $table->text('imageCredit9', 1000)->nullable();
            $table->text('imageCredit10',1000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
