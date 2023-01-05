<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{Authcontroller,Homecontroller,Admincontroller,Studentcontroller};

Route::match(["get","post"],"/auth/login", [Authcontroller::class,"login"])->name('login');
Route::match(["get","post"],"/auth/signup",[Authcontroller::class,"signup"])->name('signup'); 
Route::get("/logout",[Authcontroller::class,"logout"])->name('logout');

Route::get("/",[Homecontroller::class,"index"])->name('homepage');


Route::controller(AdminController::class)->group(function (){
        Route::get("admin/index","dashbord")->name("admin.index");
        Route::get("admin/manage/user","manageUser")->name("admin.manage.user");
        Route::get("admin/manage/student","managestudent")->name("admin.manage.student");

});


Route::middleware(['auth'])->group(function  () {
        Route::resource("student",StudentController::class);
});

