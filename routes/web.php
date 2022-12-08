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
Route::group(
    [
        'prefix' => App\Services\Localization\Localization::locale(),
        'middleware' => 'setLocale'
    ],
    function () {
        Route::get('/', function () {
            return view('home');
        })->name('home');
        Route::get('/delivery', function () {
            return view('delivery');
        })->name('delivery');
        Route::get('/mystic', function () {
            return view('mystic');
        })->name('mystic');
        Route::get('/maxrelax', function () {
            return view('maxrelax');
        })->name('maxrelax');
        Route::get('/casino69deep', function () {
            return view('casino69deep');
        })->name('casino69deep');
        Route::get('/casino69', function () {
            return view('casino69');
        })->name('casino69');
        Route::get('/about', function () {
            return view('about');
        })->name('about');
        Route::get('/faq', function () {
            return view('faq');
        })->name('faq');
        Route::get('/future', function () {
            return view('future');
        })->name('future');
        Route::get('/osirismap', function () {
            return view('map');
        })->name('osirismap');
        Route::get('/osiris', function () {
            return view('osiris');
        })->name('osiris');
        Route::get('/shespeech', function () {
            return view('shespeech');
        })->name('shespeech');
        Route::get('/admin', function () {
            return view('admin');
        })->name('admin');
//        Route::get('/ru', function () {
//            if (segment(count(request()->segments())) != 'ru') {
//                $path = segment(count(request()->segments()));
//               return Redirect::route('ru.path', ['path' => $path]);
//            }
//            return Redirect::route('/ru');
//        });

    }
);
//Route::group(
//    [
//        'prefix' => 'en',
//        'middleware' => 'setLocale'
//    ],
//    function () {
//        Route::get('/about', function () {
//            return view('about');
//        })->name('about');
//
//    }
//
//);

