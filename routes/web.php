<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// use App\Models\Appointment;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;
// use App\Models\Doctor;
// use App\Models\Major;
// use Illuminate\Support\Facades\DB;
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',[PageController::class, 'index'])->name('home_page');
// Route::get('/contact-us',[PageController::class,'contact'])->name('contact_page');
// Route::post('/contact-action',[PageController::class,'contactAction'])->name('contact.action');
// Route::get('/history',[PageController::class,'history'])->name('history_page');
// Route::get('/majors',[PageController::class,'majors'])->name('majors_page');
// Route::get('/login',[PageController::class,'login'])->name('login_page');
// Route::get('/register',[PageController::class,'register'])->name('register_page');

//Model ORM
// Route::get('/create-major', function(){
    //Create
    // Major::create([
    //     'name'=> "Db"
    // ]);

    // $major= new Major();
    // $major->name= "ophthalmologist";
    // $major->save();

    //Select
    // dd(Major::all());
    // dd(Major::find(1));
    // dd(Major::where('id',2)->get());
    // dd(Major::where('id',2)->first());
    // dd(Major::where('id','!=',2)->get());

    //Update
    // $major= Major::find(3);
    // $major->Update([
    //     'name'=>"pediatrician"
    // ]);

    //Delete
    // Major::find(4)->delete();

// });

//Query Builder
// Route::get('/create-major-query',function(){
    // DB::table('majors')->insert([
    //     'name'=> "orthopedic"
    // ]);

    //Select
    // $major= DB::table('majors')->get();
    // $major= DB::table('majors')->where('id',5)->first();
    // dd($major);

    //Update
    // DB::table('majors')->where('id',5)->update([
    //     'name'=>"Internal Medicine"
    // ]);

    //Delete
    //DB::table('majors')->where('id',5)->delete();

 

// });

// Route::get('/relation',function(){
    //$doctor = Doctor::find(1);
   
    //dd($doctor->major);
//     $appointments = Appointment::where('doctor_id', 1)->get();

    
//     dd($appointments->toArray());

// });

// Route::get('/faker-majors',function(){
//     Major::factory(5)->create();
// });
