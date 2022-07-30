<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\HomeController;
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

//Client Routes 

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/master_winner',[HomeController::class,'master_winner'])->name('master_winner');



//Physics

Route::prefix('physic')->group(function(){

    Route::get('/',[HomeController::class,'physic'])->name('physic');

    //Physics winner
    Route::prefix('winner')->group(function(){

        Route::get('/Pierre_Curie',[HomeController::class,'Pierre_Curie'])->name('Pierre_Curie');

        Route::get('/Albert_Einstein',[HomeController::class,'Albert_Einstein'])->name('Albert_Einstein');

        Route::get('/Gabriel_Lippmann',[HomeController::class,'Gabriel_Lippmann'])->name('Gabriel_Lippmann');

        Route::get('/Hendrik_Lorentz',[HomeController::class,'Hendrik_Lorentz'])->name('Hendrik_Lorentz');

        Route::get('/Erwin_Schrödinger',[HomeController::class,'Erwin_Schrödinger'])->name('Erwin_Schrödinger');
    
    });
    
});



//chemistry

Route::prefix('chemistry')->group(function(){

    Route::get('/',[HomeController::class,'chemistry'])->name('chemistry');

    //Chemistry winner
    Route::prefix('winner')->group(function(){

        Route::get('/Harold_Urey',[HomeController::class,'Harold_Urey'])->name('Harold_Urey');

        Route::get('/Frederick_Soddy',[HomeController::class,'Frederick_Soddy'])->name('Frederick_Soddy');

        Route::get('/Alfred_Werner',[HomeController::class,'Alfred_Werner'])->name('Alfred_Werner');

        Route::get('/Irène_Joliot_Curie',[HomeController::class,'Irène_Joliot_Curie'])->name('Irène_Joliot_Curie');

        Route::get('/Hermann_Staudinger',[HomeController::class,'Hermann_Staudinger'])->name('Hermann_Staudinger');
    
    }); 

});



//medicine

Route::prefix('medicine')->group(function(){

    Route::get('/',[HomeController::class,'medicine'])->name('medicine');

    //Medicine winner
    Route::prefix('winner')->group(function(){

        Route::get('/Emil_von_Behring',[HomeController::class,'Emil_von_Behring'])->name('Emil_von_Behring');

        Route::get('/Ronald_Ross',[HomeController::class,'Ronald_Ross'])->name('Ronald_Ross');

        Route::get('/Archibald_Hill',[HomeController::class,'Archibald_Hill'])->name('Archibald_Hill');

        Route::get('/Hermann_Joseph_Muller',[HomeController::class,'Hermann_Joseph_Muller'])->name('Hermann_Joseph_Muller');

        Route::get('/Joshua_Lederberg',[HomeController::class,'Joshua_Lederberg'])->name('Joshua_Lederberg');
    
    });

});



//literature

Route::prefix('literature')->group(function(){

    Route::get('/',[HomeController::class,'literature'])->name('literature');

    //Literature winner
    Route::prefix('winner')->group(function(){

        Route::get('/Ernest_Hemingway',[HomeController::class,'Ernest_Hemingway'])->name('Ernest_Hemingway');

        Route::get('/Pablo_Neruda',[HomeController::class,'Pablo_Neruda'])->name('Pablo_Neruda');

        Route::get('/Pearl_Buck',[HomeController::class,'Pearl_Buck'])->name('Pearl_Buck');

        Route::get('/George_Bernard_Shaw',[HomeController::class,'George_Bernard_Shaw'])->name('George_Bernard_Shaw');

        Route::get('/Gabriel_García_Márquez',[HomeController::class,'Gabriel_García_Márquez'])->name('Gabriel_García_Márquez');
    
    });

});

    

//peace

Route::prefix('peace')->group(function(){

    Route::get('/',[HomeController::class,'peace'])->name('peace');    

    //Peace winner
    Route::prefix('winner')->group(function(){

        Route::get('/Theodore_Roosevelt',[HomeController::class,'Theodore_Roosevelt'])->name('Theodore_Roosevelt');

        Route::get('/Bertha_Von_Suttner',[HomeController::class,'Bertha_Von_Suttner'])->name('Bertha_Von_Suttner');

        Route::get('/Frédéric_Passy',[HomeController::class,'Frédéric_Passy'])->name('Frédéric_Passy');

        Route::get('/Fredrik_Bajer',[HomeController::class,'Fredrik_Bajer'])->name('Fredrik_Bajer');

        Route::get('/Elihu_Root',[HomeController::class,'Elihu_Root'])->name('Elihu_Root');

    });

});



