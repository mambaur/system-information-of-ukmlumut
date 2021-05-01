<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('components', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->text('jumbotron_title')->nullable();
            $table->text('jumbotron_desc')->nullable();
            $table->text('widget_one_title')->nullable();
            $table->text('widget_one_desc')->nullable();
            $table->text('widget_one_aplikasi_desc')->nullable();
            $table->text('widget_one_rat_desc')->nullable();
            $table->text('widget_one_diesnat_desc')->nullable();
            $table->text('widget_one_depresi_desc')->nullable();
            $table->text('widget_one_oprec_desc')->nullable();
            $table->text('widget_one_image')->nullable();

            $table->text('widget_two_list_1_title')->nullable();
            $table->text('widget_two_list_1_desc')->nullable();
            $table->text('widget_two_list_1_image')->nullable();

            $table->text('widget_two_list_2_title')->nullable();
            $table->text('widget_two_list_2_desc')->nullable();
            $table->text('widget_two_list_2_image')->nullable();
            
            $table->text('widget_two_list_3_title')->nullable();
            $table->text('widget_two_list_3_desc')->nullable();
            $table->text('widget_two_list_3_image')->nullable();
            
            $table->text('widget_two_slider_1_title')->nullable();
            $table->text('widget_two_slider_1_desc')->nullable();
            $table->text('widget_two_slider_1_image')->nullable();
            
            $table->text('widget_two_slider_2_title')->nullable();
            $table->text('widget_two_slider_2_desc')->nullable();
            $table->text('widget_two_slider_2_image')->nullable();
            
            $table->text('widget_two_slider_3_title')->nullable();
            $table->text('widget_two_slider_3_desc')->nullable();
            $table->text('widget_two_slider_3_image')->nullable();
            
            $table->text('widget_two_slider_4_title')->nullable();
            $table->text('widget_two_slider_4_desc')->nullable();
            $table->text('widget_two_slider_4_image')->nullable();

            $table->text('youtube_url')->nullable();

            $table->text('widget_three_title')->nullable();
            $table->text('widget_three_desc')->nullable();

            $table->text('widget_three_list_1_title')->nullable();
            $table->text('widget_three_list_1_desc')->nullable();
            $table->text('widget_three_list_1_image')->nullable();
            
            $table->text('widget_three_list_2_title')->nullable();
            $table->text('widget_three_list_2_desc')->nullable();
            $table->text('widget_three_list_2_image')->nullable();
            
            $table->text('widget_three_list_3_title')->nullable();
            $table->text('widget_three_list_3_desc')->nullable();
            $table->text('widget_three_list_3_image')->nullable();

            $table->text('widget_three_main_title')->nullable();
            $table->text('widget_three_main_desc')->nullable();
            $table->text('widget_three_main_image')->nullable();

            
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
        Schema::dropIfExists('components');
    }
}
