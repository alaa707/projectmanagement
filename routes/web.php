<?php
use App\Mail\TestEmail;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Category;
use App\Neww;;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();




Route::group([ 'middleware'=>'auth','middleware'=> 'maintenance'], function () {
 Route::get('/home', 'HomeController@index')->name('home');   
     
Route::get('/category', 'CategoriesController@index')->name('category');
Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('category.edit');
Route::post('/category/store', 'CategoriesController@store')->name('category.store'); 
Route::get('/category/create', 'CategoriesController@create')->name('category.create'); 
Route::get('/category/delete/{id}', 'CategoriesController@destroy')->name('category.delete'); 
Route::post('/category/update/{id}', 'CategoriesController@update')->name('category.update'); 
    
    

Route::get('/new', 'NewsController@index')->name('new');
Route::get('/new/edit/{id}', 'NewsController@edit')->name('new.edit');
Route::post('/new/store', 'NewsController@store')->name('new.store'); 
Route::get('/new/create', 'NewsController@create')->name('new.create'); 
Route::get('/new/delete/{id}', 'NewsController@destroy')->name('new.delete'); 
Route::post('/new/update/{id}', 'NewsController@update')->name('new.update'); 
    
 
    Route::get('/setting', 'SittingsController@index')->name('setting');

    Route::post('/setting/store', 'SittingsController@store')->name('setting.store'); 
    
Route::post('/setting/update', 'SittingsController@update')->name('setting.update'); 
    
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

    Route::post('/search', function(){
        
    $q=Input::get('q');
        if($q != ""){
            $user=User::where('name', 'LIKE', '%' . $q . '%')
                ->orwhere('email', 'LIKE', '%' . $q . '%' )->get();
            if(count($user)>0)
                return view('layouts.searchuser')->withDetails($user)->withQuery($q);
            
        }
        return view('layouts.searchuser')->withMessage("No User Found");
        
        
    });
    
    
    Route::post('/searchcat', function(){
        
    $q=Input::get('q');
        if($q != ""){
            $srhcat=Category::where('name', 'LIKE', '%' . $q . '%')
                ->orwhere('description', 'LIKE', '%' . $q . '%' )->get();
            if(count($srhcat)>0)
                return view('layouts.searchcat')->withDetails($srhcat)->withQuery($q);
            
        }
        return view('layouts.searchcat')->withMessage("No Category Found");
        
        
    });
    
    
         
Route::post('/searchnews', function(){
        
    $q=Input::get('q');
        if($q != ""){
            $srchnew=Neww::where('subject', 'LIKE', '%' . $q . '%')
                ->orwhere('content', 'LIKE', '%' . $q . '%' )->get();
            if(count($srchnew)>0)
                return view('layouts.searchnews')->withDetails($srchnew)->withQuery($q);
            
        }
        return view('layouts.searchnews')->withMessage("No News Found");
        
        
    });
         
    
    
    


});    






             