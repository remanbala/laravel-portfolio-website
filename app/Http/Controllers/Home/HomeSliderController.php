<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;
use Intervention\Image\Facades\Image;

class HomeSliderController extends Controller
{
    public function HomeSlide()
    {
        $homeSlide = HomeSlide::find(1);
        return view('admin.home_slider.slider', compact('homeSlide'));
    }

    public function UpdateSlider(Request $request)
    {
        $slide_id = $request->id;
        if($request->file('home_slide')) {
            $image = $request->file('home_slide');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(636,852)->save('uploads/home_slide/'.$name_gen);
            $save_url = '/uploads/home_slide/'.$name_gen;
            
            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'desc' => $request->desc,
                'video_url' => $request->video_url,
                'home_slide' => $save_url,
            ]); 

            $notification = array(
                'message' => 'Banner Updated With Image Successfully!',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);
        } else {
            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'desc' => $request->desc,
                'video_url' => $request->video_url,
            ]); 

            $notification = array(
                'message' => 'Banner Updated Without Image Successfully!',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }
    }
}
