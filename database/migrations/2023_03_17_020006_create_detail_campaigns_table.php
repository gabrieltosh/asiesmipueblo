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
            $table->string('resource_name');
            $table->date('campaign_date');
            $table->bigInteger('section_id')->unsigned();
            $table->bigInteger('campaign_id')->unsigned();
            $table->text('description');
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
