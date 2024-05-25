<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployerUpdateInfoRequest;
use App\Models\City;
use App\Models\Company;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class EmployerController extends Controller
{

    public function index()
    {
        return view('panels.employer.index');
    }

    public function profile()
    {
        return view('panels.employer.profile', [
            'cities' => City::all(),
            'states' => State::all(),
            'countries' => Country::all()
        ]);
    }

    public function update(EmployerUpdateInfoRequest $request, $id)
    {
        $logo = fileUpload($request, 'logo');
        $banner = fileUpload($request, 'banner');

        // dd($request->all()); industry type  گروه شغلی
        Company::query()->updateOrCreate(array_merge($request->validated(), [
            'user_id' => $id,
            'logo' => $logo,
            'banner' => $banner,
        ]));

        return back();
    }


    public function getState($countryId)
    {
        $states = State::query()->where('country_id', $countryId)->get();

        return response($states);
    }



}
