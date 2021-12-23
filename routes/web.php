<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


                                /* index page route */

Route::get('/',[IndexController::class,'index'])->name('IndexPage');
Route::post('/',[IndexController::class,'contact_store'])->name('IndexPage');
Route::post('/',[IndexController::class,'access_one_store'])->name('IndexPage');


                                /* home page route */

Route::get('/home',[IndexController::class,'home'])->name('HomePage');

                              /* Products page route */

Route::get('/products',[IndexController::class,'products'])->name('ProductsPage');

                              /* Integrations page route */

Route::get('/integrations',[IndexController::class,'integrations'])->name('IntegrationsPage');

                               /* Learning & Support page route */

Route::get('/learn',[IndexController::class,'learn'])->name('LearningSupportPage');

                             /* About Us page route */

Route::get('/about',[IndexController::class,'about_us'])->name('AboutUsPage');

                             /* Contact Us page route */

Route::get('/contact',[IndexController::class,'contact_us'])->name('ContactUsPage');




                            /* Early Access  page One route */

Route::get('/access_one',[IndexController::class,'access_one'])->name('EarlyAccessOnePage');

                             /* Early Access  page Two route */

Route::get('/access_two',[IndexController::class,'access_two'])->name('EarlyAccessTwoPage');

