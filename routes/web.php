<?php
use Illuminate\Http\Request; 
use App\Announcement;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view("welcome");
});

Route::get('/login', function(){
    return view("login");
});

Route::post('login', function(Request $request){
    if($request->password == "gcmadmin2020"){
        return view('admin');
    }else{
        return view('login')->with(['error' => 'Wrong password!']);
    }
})->name('login');

Route::post('createannouncement', function(Request $request){

    $announcement = new Announcement;
    $announcement->title = $request->title;
    $announcement->content = $request->content;
    $announcement->save();
    
    return view('admin')->with(['success' => 'Announcement created!']);

})->name('createannouncement');

Route::post('deleteannouncement', function(Request $request){

    $announcement = Announcement::find($request->id);
    $temp = $announcement->title;
    $announcement->delete();
    
    return view('admin')->with(['deleted' => $temp.' deleted!']);

})->name('deleteannouncement');


