<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IndustryTypeController;
use App\Http\Controllers\Admin\Location\CityController;
use App\Http\Controllers\Admin\Location\CountryController;
use App\Http\Controllers\Admin\Location\StateController;
use App\Http\Controllers\Admin\OrganizationTypeController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserRoleController;
use App\Http\Controllers\Employer\EmployerController;
use App\Models\Article;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Route;
use Morilog\Jalali\Jalalian;
use Yajra\Acl\Models\Permission;
use Yajra\Acl\Models\Role;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/panel', function () {
    return view('panel');
});

Route::group(['middleware' => 'auth', 'prefix' => 'panel'], function() {

    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard.panel');
    Route::get('calendar', [AdminController::class, 'calendar'])->name('panel.calendar');

    Route::resource('categories', CategoryController::class)->except('show');
    // Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::resource('articles', ArticleController::class)->except('show');
    Route::resource('settings', SettingController::class)->except('show', 'destroy');
    Route::get("profile/@{username}", [UserController::class, 'profileView'])->name('user.view');
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    // Route::resource('users', UserController::class)->except('');
    Route::resource('roles', RoleController::class)->except('show');
    Route::resource('permissions', PermissionController::class)->except('show');
    Route::resource('user-role', UserRoleController::class)->parameters(['user-role' => 'user'])->except('show');

    Route::get('password/change/view', [UserController::class, 'passwordChangeView'])->name('password.change.view');
    Route::post('password/change', [UserController::class, 'passwordChange'])->name('password.change');

    Route::resource('countries', CountryController::class)->except('show');
    // Route::resource('states', StateController::class)->except('show');
    Route::resource('states', StateController::class);
    Route::resource('cities', CityController::class)->except('show');

    Route::resource('industry-type', IndustryTypeController::class)->except('show');
    Route::resource('organization-type', OrganizationTypeController::class)->except('show');

    // Route::get('/{locale?}', function ($locale = null) {
    //     if (isset($locale) && in_array($locale, config('app.available_locales'))) {
    //         app()->setLocale($locale);
    //     }

    //     return view('admin.admin');
    // });

    // Route::get('language/{locale}', function ($locale) {
    //     app()->setLocale($locale);
    //     session()->put('locale', $locale);

    //     return back();
    // });

    Route::get('/{locale?}', [AdminController::class, 'setLanguage'])->name('set.language');

    Route::get('language/{locale}', [AdminController::class, 'switchLanguage'])->name('switch.language');

});

Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'employer'], function(){
// Route::group(['prefix' => 'employer'], function(){
    Route::get('dashboard', [EmployerController::class, 'index'])->name('employer.dashboard');
    Route::get('profile', [EmployerController::class, 'profile'])->name('employer.profile');
    Route::put('update/profile/{id}', [EmployerController::class, 'update'])->name('company.profile.update');



    Route::get('get-state/{country_id}', [EmployerController::class, 'getState'])->name('get.state');


});





Route::get('test', function() {
    // $users = User::all();

    // foreach($users as $user){
    //     dump($user->id, $user->userRole);
    // }

    // dd($users);

    // $result = Role::create([
    //     'name' => 'manager',
    //     'slug' => 'manager',
    //     'description' => 'مدیریت سایت'
    // ]);
    // $result = Permission::create([
    //     'name' => 'edit-article',
    //     'slug' => 'edit-article',
    //     'description' => 'ویرایش مقالات'
    // ]);
    // $result = Role::whereName('manager')->first()->permissions()->sync([1, 2]);

    // dd($result);

    // $user = User::first();

    // $res = setDateToJalali($user->created_at, '%B %d، %Y');


        // dd(app()->getLocale());
        // app()->isLocale('en') ? dump('En') : dump('Fa');
        // dd(logger('test message!'));
        // dump(logger('test message!'));

        // dd(now());
        


});
