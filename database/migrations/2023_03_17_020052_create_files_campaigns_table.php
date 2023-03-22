<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files_campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('detail_campaign_id')->unsigned();
            $table->foreign('detail_campaign_id')->references('id')->on('detail_campaigns');
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
        Schema::dropIfExists('files_campaigns');
    }
}
