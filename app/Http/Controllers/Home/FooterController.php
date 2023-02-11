<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Support\Carbon;

class FooterController extends Controller
{
    public function FooterSetup() {
        $footerPage = Footer::find(1);
        return view('admin.footer.footer_all', compact('footerPage'));
    }

    public function FooterUpdate(Request $request) {
        $footer_id = $request->id;

        Footer::findOrFail($footer_id)->update([
            'number' => $request->number,
            'short_description' => $request->short_description,
            'address' => $request->address,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'copyright' => $request->copyright,
        ]);

        $notification = array(
            'message' => 'Footer Updated Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
