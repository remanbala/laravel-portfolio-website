<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\SkillImage;
use Image;
use Illuminate\Support\Carbon;

class AboutController extends Controller
{
    public function AboutPage()
    {
        $aboutPage = About::find(1);
        return view('admin.about_page.about_page_all', compact('aboutPage'));
    }

    public function UpdateAbout(Request $request)
    {
        $about_id = $request->id;
        if ($request->file('about_image')) {
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(523, 605)->save('uploads/home_about/' . $name_gen);
            $save_url = '/uploads/home_about/' . $name_gen;

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'about_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'About Page Updated With Image Successfully!',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        } else {
            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
            ]);

            $notification = array(
                'message' => 'About Page Updated Without Image Successfully!',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }
    }

    public function HomeAbout()
    {
        $aboutPage = About::find(1);
        return view('frontend.about_page', compact('aboutPage'));
    }

    public function SkillImages()
    {
        return view('admin.about_page.skillImages');
    }

    public function StoreSkillImages(Request $request)
    {
        $image = $request->file('skillImages');
        foreach ($image as $skillImages) {
            $name_gen = hexdec(uniqid()) . '.' . $skillImages->getClientOriginalExtension();
            Image::make($skillImages)->resize(220, 220)->save('uploads/skill_images/' . $name_gen);
            $save_url = 'uploads/skill_images/' . $name_gen;

            SkillImage::insert([
                'skillImages' => $save_url,
                'created_at' => Carbon::now()
            ]);
        }
        
        $notification = array(
            'message' => 'Skill Images Updated Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.skill.images')->with($notification);
    }

    public function AllSkillImages()
    {
        $allSkillImages = SkillImage::all();
        return view('admin.about_page.all_skill_images', compact('allSkillImages'));
    }

    public function EditSkillImages($id)
    {
        $skillImage = SkillImage::findOrFail($id);
        return view('admin.about_page.edit_skill_images', compact('skillImage'));
    }

    public function UpdateSkillImages(Request $request)
    {
        $skill_image_id = $request->id;
        if ($request->file('skillImages')) {
            $image = $request->file('skillImages');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(220, 220)->save('uploads/skill_images/' . $name_gen);
            $save_url = 'uploads/skill_images/' . $name_gen;

            SkillImage::findOrFail($skill_image_id)->update([
                'skillImages' => $save_url,
            ]);

            $notification = array(
                'message' => 'Skill Image Updated Successfully!',
                'alert-type' => 'success'
            );

            return redirect()->route('all.skill.images')->with($notification);
        }
    }

    public function DeleteSkillImages($id)
    {
        $skillImage = SkillImage::findOrFail($id);
        $img = $skillImage->skillImages;
        unlink($img);
        SkillImage::findOrFail($id)->delete();
        
        $notification = array(
            'message' => 'Skill Image Deleted Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
