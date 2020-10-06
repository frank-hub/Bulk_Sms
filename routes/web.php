<?php

use Illuminate\Support\Facades\Route;
use ArielMejiaDev\LarapexCharts\LarapexChart;

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('github', 'ProfileController@github')->name('github');

// Auth Group
// Route::group(['middleware' => ['auth']], function () {
    Route::get('client/add', function () {
      $earnings_chart = (new LarapexChart)
            ->setType('line')
            ->setTitle('Earnings')
            ->setXAxis([
                'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'
            ])
            ->setDataset([
                [
                    'name'  =>  'Earnings',
                    'data'  =>  [0, 10000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000]
                ]
            ])
        ;

        $statics_chart = (new LarapexChart)
            ->setTitle('Statics')
            ->setType('area')
            ->setColors(['#4e73df', '#1cc88a', '#36b9cc'])
            ->setLabels(["Direct", "Referral", "Social"])
            ->setDataset([
                [
                    'name'  =>  'Statics',
                    'data'  =>  [55, 30, 15]
                ]
            ])
        ;
        return view('admin/client/add',compact('earnings_chart','statics_chart'));
    });

    Route::get('sms/bulk', function () {
        $earnings_chart = (new LarapexChart)
              ->setType('line')
              ->setTitle('Earnings')
              ->setXAxis([
                  'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'
              ])
              ->setDataset([
                  [
                      'name'  =>  'Earnings',
                      'data'  =>  [0, 10000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000]
                  ]
              ])
          ;
  
          $statics_chart = (new LarapexChart)
              ->setTitle('Statics')
              ->setType('area')
              ->setColors(['#4e73df', '#1cc88a', '#36b9cc'])
              ->setLabels(["Direct", "Referral", "Social"])
              ->setDataset([
                  [
                      'name'  =>  'Statics',
                      'data'  =>  [55, 30, 15]
                  ]
              ])
          ;
          return view('admin/sms/index',compact('earnings_chart','statics_chart'));
      });

      Route::get('reports/all', function () {
        $earnings_chart = (new LarapexChart)
              ->setType('line')
              ->setTitle('Earnings')
              ->setXAxis([
                  'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'
              ])
              ->setDataset([
                  [
                      'name'  =>  'Earnings',
                      'data'  =>  [0, 10000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000]
                  ]
              ])
          ;
  
          $statics_chart = (new LarapexChart)
              ->setTitle('Statics')
              ->setType('area')
              ->setColors(['#4e73df', '#1cc88a', '#36b9cc'])
              ->setLabels(["Direct", "Referral", "Social"])
              ->setDataset([
                  [
                      'name'  =>  'Statics',
                      'data'  =>  [55, 30, 15]
                  ]
              ])
          ;
          return view('/reports/all_reports',compact('earnings_chart','statics_chart'));
      });
// });

Route::get('sms/send','SmsController@sms');

//**************Profiles Routes ****************************
// Route::prefix('/profile')->middleware('auth')->group(function(){
Route::prefix('/profile')->group(function(){
   Route::get('/','ProfileController@index')->name('profile');
   Route::get('/passwordChange','ProfileController@changePassword');
   Route::post('/passwordChange/{id}','ProfileController@postChangePassword');
   Route::get('/editProfile/{id}','ProfileController@editprofile');
  Route::post('/editprofile/{id}','ProfileController@posteditprofile');
  // Route::post('/editprofile/{id}', 'ProfileController@cover');
});

// -------Clients Controller-------
Route::post('clients/store','ClientController@store');




Route::resource('clients','ClientController');
Route::redirect('.env', 'https://www.youtube.com/watch?v=M8ogFbLP9XQ');
Route::redirect('wp-login.php', 'https://www.youtube.com/watch?v=M8ogFbLP9XQ');
Route::redirect('wp-admin', 'https://www.youtube.com/watch?v=M8ogFbLP9XQ');
