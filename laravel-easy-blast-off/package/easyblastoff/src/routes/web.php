<?php
 
use Illuminate\Http\Request;

Route::get('contact',function(){
    return view('easyblastoff::contact'); 
})->name('contact');

Route::post('contact',function(Request $request){
    return $request->all(); 
});