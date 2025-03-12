<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {            
            $setting_data = Setting::first();
            return view('dashboard.setting.edit',compact('setting_data'));
        } catch (\Throwable $th) {
            throw $th;
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'company_name' => 'required',
            // 'light_logo_path' => 'required_without:old_light_logo_path|mimes:jpeg,png,jpg',
            // 'fav_path' => 'required_without:old_fav_path|mimes:jpeg,png,jpg',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }
        
        try {
            $setting = Setting::find(1);

            // store and unlink image

            if ($request->file('light_logo_path') != '') {

                $destinationPath = 'uploads/setting/';
                @unlink(public_path() .'/'. $setting->logo_light);
                
                $logo_file = $request->file('light_logo_path');
                $logo_fileName = time().'-'.$logo_file->getClientOriginalName();
                $logo_file->move(public_path($destinationPath) , $logo_fileName);

                $setting->logo_light = $destinationPath .$logo_fileName;
            }
            if ($request->file('dark_logo_path') != '') {

                $destinationPath = 'uploads/setting/';
                @unlink(public_path() .'/'. $setting->logo_dark);
                
                $logo_file = $request->file('dark_logo_path');
                $logo_fileName = time().'-'.$logo_file->getClientOriginalName();
                $logo_file->move(public_path($destinationPath) , $logo_fileName);

                $setting->logo_dark = $destinationPath .$logo_fileName;
            }
            if ($request->file('fav_path') != '') {
                
                $destinationPath = 'uploads/setting/';
                @unlink(public_path() .'/'. $setting->fav_path);

                $fav_file = $request->file('fav_path');
                $fav_fileName = time().'-'.$fav_file->getClientOriginalName();
                $fav_file->move(public_path($destinationPath) , $fav_fileName);

                $setting->favicon = $destinationPath .$fav_fileName;

            }
            // store and unlink image
            $setting->name = $request->company_name;
            $setting->email = $request->company_email;
            $setting->phone_number = $request->company_phonenumber;
            $setting->address = $request->company_address;
            // $setting->facebook_link = $request->facebook_link;
            // $setting->pinterest_link = $request->pinterest_link;
            // $setting->instagram_link = $request->instagram_link;
            // $setting->youtube_link = $request->youtube_link;
            // $setting->tiktok_link = $request->tiktok_link;
            // $setting->twitter_link = $request->twitter_link;
            // $setting->linkedin_link = $request->linkedin_link;
            // $setting->telegram_link = $request->telegram_link;
            $setting->save();

            return redirect()->route('dashboard.setting.index')
                ->with('success', 'Setting has been updated successfully');
        } catch (\Throwable $th) {
            return redirect()->back()
                ->with('error', 'Request Failed:' . $th->getMessage());
                throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
