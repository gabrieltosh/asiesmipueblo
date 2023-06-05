<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type',['video','image']);
            $table->text('resource_name');
            $table->date('campaign_date');
            $table->integer('views')->nullable();
            $table->bigInteger('section_id')->unsigned();
            $table->bigInteger('campaign_id')->unsigned();
            $table->longText('description');
            $table->foreign('section_id')->references('id')->on('section_campaigns');
            $table->foreign('campaign_id')->references('id')->on('campaigns');
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
        Schema::dropIfExists('detail_campaigns');
    }
}
