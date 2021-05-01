<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $table = 'components';
    protected $fillable = [
        'jumbotron_title',
        'jumbotron_desc',

        'widget_one_title',
        'widget_one_desc',
        'widget_one_aplikasi_desc',
        'widget_one_rat_desc',
        'widget_one_diesnat_desc',
        'widget_one_depresi_desc',
        'widget_one_oprec_desc',
        'widget_one_image',

        'widget_two_list_1_title',
        'widget_two_list_1_desc',
        'widget_two_list_1_image',

        'widget_two_list_2_title',
        'widget_two_list_2_desc',
        'widget_two_list_2_image',

        'widget_two_list_3_title',
        'widget_two_list_3_desc',
        'widget_two_list_3_image',

        'widget_two_slider_1_title',
        'widget_two_slider_1_desc',
        'widget_two_slider_1_image',

        'widget_two_slider_2_title',
        'widget_two_slider_2_desc',
        'widget_two_slider_2_image',

        'widget_two_slider_3_title',
        'widget_two_slider_3_desc',
        'widget_two_slider_3_image',

        'widget_two_slider_4_title',
        'widget_two_slider_4_desc',
        'widget_two_slider_4_image',
        
        'youtube_url',

        'widget_three_title',
        'widget_three_desc',

        'widget_three_list_1_title',
        'widget_three_list_1_desc',
        'widget_three_list_1_image',

        'widget_three_list_2_title',
        'widget_three_list_2_desc',
        'widget_three_list_2_image',

        'widget_three_list_3_title',
        'widget_three_list_3_desc',
        'widget_three_list_3_image',
        
        'widget_three_main_title',
        'widget_three_main_desc',
        'widget_three_main_image',
    ];
}
