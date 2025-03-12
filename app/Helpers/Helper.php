<?php

namespace App\Helpers;

use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;

class Helper
{
    public static function dashboard_route()
    {
        $user = User::find(Auth::user()->id);
        $route = $user->role->role.'.dashboard';
        return $route;
    }
    public static function getLogoLight()
    {
        return Setting::first()->logo_light ?? 'assets/images/logo/logo.png';
    }
    public static function getLogoDark()
    {
        return Setting::first()->logo_dark ?? 'assets/images/logo/logo.png';
    }
    public static function getAuthLogo()
    {
        return Setting::first()->auth_logo ?? 'assets/images/logo/logo.png';
    }
    public static function getFavicon()
    {
        return Setting::first()->favicon ?? 'assets/images/favicon.png';
    }
    public static function getCompanyName()
    {
        return Setting::first()->name ?? 'EasyFive';
    }
    public static function getFooterText()
    {
        return Setting::first()->footer_text ?? 'Copyright 2025 © Easy Five';
    }
}