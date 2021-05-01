<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Component;

class ComponentController extends Controller
{
    public function index(Request $request)
    {
        $component = Component::first();
        return view('admin.components.index', compact('component'));
    }

    public function store(Request $request, Component $component)
    {
        $widget_one_image = $this->uploadIMG(
            $request, '/user/images/', 
            $component->widget_one_image, 'widget_one_image');
        
        $widget_two_list_1_image = $this->uploadIMG(
            $request, '/user/images/', 
            $component->widget_two_list_1_image, 'widget_two_list_1_image');
        
        $widget_two_list_2_image = $this->uploadIMG(
            $request, '/user/images/', 
            $component->widget_two_list_2_image, 'widget_two_list_2_image');
        
        $widget_two_list_3_image = $this->uploadIMG(
            $request, '/user/images/', 
            $component->widget_two_list_3_image, 'widget_two_list_3_image');

        // Slider
        $widget_two_slider_1_image = $this->uploadIMG(
            $request, '/user/images/slider/', 
            $component->widget_two_slider_1_image, 'widget_two_slider_1_image');

        $widget_two_slider_2_image = $this->uploadIMG(
            $request, '/user/images/slider/', 
            $component->widget_two_slider_2_image, 'widget_two_slider_2_image');

        $widget_two_slider_3_image = $this->uploadIMG(
            $request, '/user/images/slider/', 
            $component->widget_two_slider_3_image, 'widget_two_slider_3_image');

        $widget_two_slider_4_image = $this->uploadIMG(
            $request, '/user/images/slider/', 
            $component->widget_two_slider_4_image, 'widget_two_slider_4_image');

        // Widget 3
        $widget_three_list_1_image = $this->uploadIMG(
            $request, '/user/images/projects/', 
            $component->widget_three_list_1_image, 'widget_three_list_1_image');

        $widget_three_list_2_image = $this->uploadIMG(
            $request, '/user/images/projects/', 
            $component->widget_three_list_2_image, 'widget_three_list_2_image');

        $widget_three_list_3_image = $this->uploadIMG(
            $request, '/user/images/projects/', 
            $component->widget_three_list_3_image, 'widget_three_list_3_image');

        $widget_three_main_image = $this->uploadIMG(
            $request, '/user/images/bg/', 
            $component->widget_three_main_image, 'widget_three_main_image');

        $component->update([
            'jumbotron_title' => $request->jumbotron_title,
            'jumbotron_desc' => $request->jumbotron_desc,

            'widget_one_title' => $request->widget_one_title,
            'widget_one_desc' => $request->widget_one_desc,
            'widget_one_aplikasi_desc' => $request->widget_one_aplikasi_desc,
            'widget_one_rat_desc' => $request->widget_one_rat_desc,
            'widget_one_diesnat_desc' => $request->widget_one_diesnat_desc,
            'widget_one_depresi_desc' => $request->widget_one_depresi_desc,
            'widget_one_oprec_desc' => $request->widget_one_oprec_desc,
            'widget_one_image' => $widget_one_image,

            'widget_two_list_1_title' => $request->widget_two_list_1_title,
            'widget_two_list_1_desc' => $request->widget_two_list_1_desc,
            'widget_two_list_1_image' => $widget_two_list_1_image,

            'widget_two_list_2_title' => $request->widget_two_list_2_title,
            'widget_two_list_2_desc' => $request->widget_two_list_2_desc,
            'widget_two_list_2_image' => $widget_two_list_2_image,

            'widget_two_list_3_title' => $request->widget_two_list_3_title,
            'widget_two_list_3_desc' => $request->widget_two_list_3_desc,
            'widget_two_list_3_image' => $widget_two_list_3_image,

            'widget_two_slider_1_title' => $request->widget_two_slider_1_title,
            'widget_two_slider_1_desc' => $request->widget_two_slider_1_desc,
            'widget_two_slider_1_image' => $widget_two_slider_1_image,

            'widget_two_slider_2_title' => $request->widget_two_slider_2_title,
            'widget_two_slider_2_desc' => $request->widget_two_slider_2_desc,
            'widget_two_slider_2_image' => $widget_two_slider_2_image,

            'widget_two_slider_3_title' => $request->widget_two_slider_3_title,
            'widget_two_slider_3_desc' => $request->widget_two_slider_3_desc,
            'widget_two_slider_3_image' => $widget_two_slider_3_image,

            'widget_two_slider_4_title' => $request->widget_two_slider_4_title,
            'widget_two_slider_4_desc' => $request->widget_two_slider_4_desc,
            'widget_two_slider_4_image' => $widget_two_slider_4_image,
            
            'youtube_url' => $request->youtube_url,

            'widget_three_title' => $request->widget_three_title,
            'widget_three_desc' => $request->widget_three_desc,

            'widget_three_list_1_title' => $request->widget_three_list_1_title,
            'widget_three_list_1_desc' => $request->widget_three_list_1_desc,
            'widget_three_list_1_image' => $widget_three_list_1_image,

            'widget_three_list_2_title' => $request->widget_three_list_2_title,
            'widget_three_list_2_desc' => $request->widget_three_list_2_desc,
            'widget_three_list_2_image' => $widget_three_list_2_image,

            'widget_three_list_3_title' => $request->widget_three_list_3_title,
            'widget_three_list_3_desc' => $request->widget_three_list_3_desc,
            'widget_three_list_3_image' => $widget_three_list_3_image,
            
            'widget_three_main_title' => $request->widget_three_main_title,
            'widget_three_main_desc' => $request->widget_three_main_desc,
            'widget_three_main_image' => $widget_three_main_image,
        ]);

        return back()->with('status', 'Component berhasil diupdate!');
    }

    public function uploadIMG($request, $path, $oldName, $name)
    {
        // $path = "/public/assets/admin/images/";
        // $previousPath = "assets/admin/images/";
        $path = "/public/assets". $path;
        $previousPath = "assets". $path;
        $imageName = $oldName;
        if($request->hasFile($name)){
            $resource = $request->file($name);
            $imageName   = time() .'_'.$resource->getClientOriginalName();

            // remove previous image
            if(file_exists(public_path($previousPath.$oldName)) && $oldName !== 'default.jpg'){
                unlink(public_path($previousPath.$oldName));
            }

            $resource->move(\base_path() .$path, $imageName);
        }

        return $imageName;
    }
}
