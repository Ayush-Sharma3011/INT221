<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('home');
});

Route::get('/s1/{name}', function($name){
    if(!ctype_alpha($name)){
        return "only alphabet are acceptible";
    }
    else{
        return "<h1>Welcome to S1 $name</h1>";
    }
});

Route:: get('/s2/{id}',function($id){
    return "User id is $id";
})->where('id','[0-9]+');
//[0-9] means only numbers are allowed in the id parameter. 
//positive closure [0-9]+ means that there must be at least one digit in the id parameter.
//[0-9]+ The + sign means that there must be at least one digit in the id parameter. 
//So, this route will only match URLs that have a numeric id parameter, such as /s2/123, but it will not match URLs that have non-numeric characters in the id parameter, such as /s2/abc or /s2/123abc.

Route::get('s3/{name}/{id}', function($name,$id){
    return "Welcome $name, your id is $id"; //if in${name} it is called string interpolation
})->where('name','[A-Z][A-Za-z]+')->where('id','[0-9]+');

Route::get('/Ayush/{name?}', function ($name="Guest") {
    return view('Ayush',['name'=>$name]);
});


Route::get('/student1/{name}/{rollno}', function($name,$rollno){
    // return view('student1',['name'=>$name,'rollno'=>$rollno,'class'=>$class]);
    // second method
    return view('student1',compact('name','rollno'));// you can pass complete list using compact fun if data is long just pass the name of the list variable and it will automatically create an array with the variable name as key and variable value as value.
    // third method
    // return view('student1')->with('name',$name)->with('rollno',$rollno)->with('class',$class);
})->where('name','[A-Z][A-Za-z]+')->where('rollno','[0-9]+')->where('class','[0-9]+');


Route::get('/student2/{name}/{rollno}/{class}', function($name,$rollno,$class){
    return view('student2',['name'=>$name,'rollno'=>$rollno,'class'=>$class]);
})->where('name','[A-Z][A-Za-z]+')->where('rollno','[0-9]+')->where('class','[0-9]+');


Route::get('/student3/{name}/{rollno}/{class}', function($name,$rollno,$class){
    return view('student3',['name'=>$name,'rollno'=>$rollno,'class'=>$class]);
})->where('name','[A-Z][A-Za-z]+')->where('rollno','[0-9]+')->where('class','[0-9]+');

Route:: get('/students',function(){
    $stud = [
        ['name'=>'Ayush','rollno'=>1,'class'=>12],
        ['name'=>'Rahul','rollno'=>2,'class'=>12],
        ['name'=>'Rohit','rollno'=>3,'class'=>12],
    ];
    return view('students',compact('stud'));
});

Route::domain('hello.com')->group(function () {
    Route::get('/greet', function () {
        return 'Hello from hello.com!';
    });
});