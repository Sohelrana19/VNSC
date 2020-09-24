<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','Fontend\aboutController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('users')->group(function()
{
    Route::get('/view','Backend\usersController@view')->name('users.view');
    Route::post('/store','Backend\usersController@store')->name('users.store');
    Route::get('/edit/{id}','Backend\usersController@edit')->name('users.edit');
    Route::post('/update/{id}','Backend\usersController@update')->name('users.update');
    Route::get('/delet/{id}','Backend\usersController@delet')->name('users.delet');

});

Route::prefix('menu')->group(function()
{
    Route::get('/view','Backend\menuController@view')->name('menu.view');
    Route::post('/store','Backend\menuController@store')->name('menu.store');
    Route::get('/edit/{id}','Backend\menuController@edit')->name('menu.edit');
    Route::post('/update/{id}','Backend\menuController@update')->name('menu.update');
    Route::get('/delet/{id}','Backend\menuController@delet')->name('menu.delet');

});



//slider part
Route::prefix('slider')->group(function()
{
    Route::get('/view','Backend\sliderController@sliderView')->name('slider.view');
    Route::post('/store','Backend\sliderController@sliderStore')->name('slider.store');
    Route::get('/edit/{id}','Backend\sliderController@edit')->name('slider.edit');
    Route::post('/update/{id}','Backend\sliderController@update')->name('slider.update');
    Route::get('/delet/{id}','Backend\sliderController@delet')->name('slider.delet');

});


//Notice Part

Route::prefix('notice')->group(function()
{
    Route::get('/view','Backend\noticeController@view')->name('notice.view');
    Route::post('/store','Backend\noticeController@store')->name('notice.store');
    Route::get('/edit/{id}','Backend\noticeController@edit')->name('notice.edit');
    Route::post('/update/{id}','Backend\noticeController@update')->name('notice.update');
    Route::get('/delet/{id}','Backend\noticeController@delet')->name('notice.delet');

});



//Album Part
Route::prefix('album')->group(function()
{
    Route::get('/view','Backend\albumController@albumView')->name('album.view');
    Route::post('/store','Backend\albumController@albumStore')->name('album.store');
    Route::get('/edit/{id}','Backend\albumController@albumedit')->name('album.edit');
    Route::post('/update/{id}','Backend\albumController@albumupdate')->name('album.update');
    Route::get('/delet/{id}','Backend\albumController@albumdelet')->name('album.delet');

});

//Gallary Part
Route::prefix('gallary')->group(function()
{
    Route::get('/view','Backend\gallaryController@gallaryView')->name('gallary.view');
    Route::post('/store','Backend\gallaryController@gallaryStore')->name('gallary.store');
    Route::get('/edit/{id}','Backend\gallaryController@agallaryedit')->name('gallary.edit');
    Route::post('/update/{id}','Backend\gallaryController@gallaryupdate')->name('gallary.update');
    Route::get('/delet/{id}','Backend\gallaryController@gallarydelet')->name('gallary.delet');

});

//branche Part
Route::prefix('branche')->group(function()
{
    Route::get('/view','Backend\branchController@brancheView')->name('branche.view');
    Route::post('/store','Backend\branchController@brancheStore')->name('branche.store');
    Route::get('/edit/{id}','Backend\branchController@brancheedit')->name('branche.edit');
    Route::post('/update/{id}','Backend\branchController@brancheupdate')->name('branche.update');
    Route::get('/delet/{id}','Backend\branchController@branchedelet')->name('branche.delet');

});


//NewsEvent Part
Route::prefix('newsEvent')->group(function()
{
    Route::get('/view','Backend\newsEventController@newsEventView')->name('newsEvent.view');
    Route::post('/store','Backend\newsEventController@newsEventStore')->name('newsEvent.store');
    Route::get('/edit/{id}','Backend\newsEventController@newsEventedit')->name('newsEvent.edit');
    Route::post('/update/{id}','Backend\newsEventController@newsEventupdate')->name('newsEvent.update');
    Route::get('/delet/{id}','Backend\newsEventController@newsEventdelet')->name('newsEvent.delet');

});

Route::get('/branchDetails/{id}','Fontend\aboutController@branchDetails');


    Route::get('/mainPatron','Fontend\aboutController@mainPatron');
    Route::get('/chairmanspeech','Fontend\aboutController@chairmanspeech');
    Route::get('/principlespeech','Fontend\aboutController@principlespeech');
    Route::get('/history','Fontend\aboutController@history');
    Route::get('/missionVission','Fontend\aboutController@missionVission');
    Route::get('/governingbody','Fontend\aboutController@governingbody');
    Route::get('/teacherInformation','Fontend\aboutController@teacherInformation');
    Route::get('/youtube','Fontend\aboutController@youtube');


    Route::get('/dresscode','Fontend\academicController@dresscode');
    Route::get('/lessonplan','Fontend\academicController@lessonplan');
    Route::get('/routine','Fontend\academicController@routine');
    Route::get('/syllabus','Fontend\academicController@syllabus');
    Route::get('/infrastructure','Fontend\academicController@infrastructure');


    Route::get('/notice','Fontend\informationController@notice');
    Route::get('/facilities','Fontend\informationController@facilities');
    Route::get('/ictLab','Fontend\informationController@ictLab');

    Route::get('/photoGallary','Fontend\gallaryController@photoGallary');
    Route::get('/ViewGallary/{id}','Fontend\gallaryController@ViewGallary');



    Route::get('/apply','Fontend\admissionController@apply');
    Route::get('/fastFact','Fontend\admissionController@fastFact');
    Route::get('/feespayment','Fontend\admissionController@feespayment');
    Route::get('/scholarship','Fontend\admissionController@scholarship');
    Route::get('/transfer','Fontend\admissionController@transfer');

    Route::get('/contactUs','Fontend\admissionController@contactUs');

//News Event Details

Route::get('/newsEventView/{id}','Fontend\aboutController@detailsEvent');


    //calss wise Routine

