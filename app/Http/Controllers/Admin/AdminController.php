<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }

    public function calendar()
    {
        if (app()->isLocale('fa')) {
            return view('admin.layouts.calender-rtl');
        }
        return view('admin.layouts.calender');
    }

    public function setLanguage($locale = null)
    {
        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            app()->setLocale($locale);
        }

        return view('admin.admin');
    }


    public function switchLanguage($locale)
    {
        app()->setLocale($locale);

        session()->put('locale', $locale);

        return back();
    }

}
