<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\AnnonceController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EvaluateController;
use App\Http\Controllers\ObjetController;
use App\Http\Controllers\ReserverController;
use App\Http\Controllers\ReviewsController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientCont;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

//Route::post('/signup', 'App\Http\Controllers\ClientCont@createUser')->name('signup');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});








Route::get('admin',function(){
    return view('dashboard_admin');
})->name('admin')->middleware('admin');


// Route::get('user',function(){
//     return view('parteniare');
// })->name('user')->middleware('user');

Route::get('user', function () {
    if (Auth::check()) {
        if (Auth::user()->role == 2) {
            return view('partenaire');
        } else {
            return view('home');
        }
    }
})->name('user')->middleware('user');



Auth::routes();


//Ay wahed la bgha izid chi route izido f controller dyalo wa chourkan ^-^

//-------------------------------ContratController---------------------------------

Route::get('/contrat/{id_partenaire}/{id_annonce}', [App\Http\Controllers\ContratController::class, 'showContrat'])->name('contrat.show');
Route::get('/contrat/{id_partenaire}/{id_annonce}/pdf', [App\Http\Controllers\ContratController::class, 'pdf'])->name('contrat.pdf');


//-----------------------------------HomeController:-----------------------------------
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/objets', [App\Http\Controllers\HomeController::class, 'objets'])->name('objets');


//-----------------------------------aDMINController:-----------------------------------
// Route::get('/objets', [App\Http\Controllers\HomeController::class, 'objets'])->name('objets');





//-----------------------------------Objet Controller :-----------------------------------
Route::get('partenaire', [ObjetController::class, 'display'])->name('partenaire');
//Displaying data for objects in the hme page
Route::get('/', [ObjetController::class, 'show'])->name('index');



Route::get('/new-blade-file', [ReserverController::class, 'displayNewBladeFile']);


// Taha added
Route::post('/reservations/{id_objet}/reclamer', [ReserverController::class,'sendReclamation'])->name("reclamer");
// Route::get('/admin', [ReserverController::class, 'showData'])->name('admin');
Route::get('/admin', [AdminController::class, 'showData'])->name('admin');
Route::get('/clients',[AdminController::class,'showClients'])->name('clients');
Route::get('/partners',[AdminController::class,'index'])->name('partners');

Route::delete('/reclamations/{id}',[ReserverController::class,'supprimer'])->name('reclamations.destroy');
Route::get('/client/{id_Client}/profile',[ReserverController::class,'voirClient'])->name('client.profile');


//-----------------------------------ReserverController:-----------------------------------
// Route::post('/product-single/{product}',[ReserverController::class,'storeReserve'])->name('product-single');
//  Route::get('/product-single/{product}',[ReserverController::class,'showProduct'])->name('product-single');
Route::get('/product-single/{id_annonce}',[ReserverController::class,'display'])->name('product-single');
//Route::post('/product-single',[ReserverController::class,'storeReserve'])->name('product-single');
Route::post('/product-single/{id_annonce}',[ReserverController::class,'storeReserve'])->name('product-single');

Route::get('/voir_profile/{idAnnonce}',[ReserverController::class,'voirProfile'])->name('partenaire.profile_part1');
Route::put('/reservations-update1/{id}', [ReserverController::class, 'update1'])->name('reservations.update1');
//Route::put('/reservations/{id}', 'ReserverController@update')->name('reservations.update');
Route::get('/reservations/new-rows', [ReserverController::class, 'newRows'])->name('reservations.newRows');
//Route::get('order1', [ReserverController::class, 'index1'])->name('order1');
Route::get('/reservations/{id}/confirmed', [ReserverController::class, 'reservationConfirmed'])->name('reservations.confirmed');
Route::post('/mark-notification-as-read/{id}', [ReserverController::class, 'markNotificationAsRead'])->name('mark_notification_as_read');
//Route::get('/orders', [ReserverController::class, 'affichage'])->name('reservations.order');
 //Route::get('order', [ReserverController::class, 'index'])->name('order');

 Route::get('/order', [ReserverController::class, 'index']);
 Route::get('/order_envoyer', [ReserverController::class, 'order_envoyer']);






//-----------------------------------CategoryController:-----------------------------------
//Displaying data for categories in the hme page
Route::get('/', [CategoryController::class, 'display'])->name('index');
//DISLAYING PRODUCTS BASED ON THEIR CATEGORIES /
Route::get('/objets/{cat}', [CategoryController::class, 'basedCategory'])->name('objets');
//DISLAYING PRODUCTS BASED ON THEIR CATEGORIES and showing details  /
// Route::get('/product-single/{prod}', [CategoryController::class, 'basedCategoryDetails'])->name('product-single');







//-----------------------------------PartenaireController:-----------------------------------
//Route::post('partenaire/update-status/{id_annonce}', [PartenaireController::class, 'updateStatus']);
Route::put('/partenaire/{id_annonce}', [PartenaireController::class, 'updateStatus'])->name('partenaire');
// Route::get('/test', [PartenaireController::class, 'updateStatus'])->name('test');







//-----------------------------------EvaluateController:-----------------------------------

// Route::post('/eval_partenaire', [EvaluateController::class, 'store'])->name('eval_partenaire');
// Route::post('/eval_client', [EvaluateController::class, 'store2'])->name('eval_client');

Route::post('/eval_partenaire', [EvaluateController::class, 'store'])->name('eval_partenaire');
Route::get('/eval_partenaire', [EvaluateController::class, 'index'])->name('eval_partenaire');

Route::post('/eval_client', [EvaluateController::class, 'store2'])->name('eval_client');
Route::get('/eval_client', [EvaluateController::class, 'index2'])->name('eval_client');



//-----------------------------------ReviewsController:-----------------------------------
Route::get('/reviews_partenaire', [ReviewsController::class, 'showReviews'])->name('reviews_partenaire');
Route::get('/reviews_client', [ReviewsController::class, 'showReviews1'])->name('reviews_client');


///Partie ghada
//AJOUTER ANNONCE CONTROLLER
Route::post('/addad', [AnnonceController::class, 'store1'])->name('partenaire.addad');
//AJOUTER OBJET CONTROLLER
Route::post('/partenaire/addobjet', [ObjetController::class, 'storing'])->name('partenaire.addobjet');
Route::get('/partenaire/addobjet', [ObjetController::class, 'showObjet'])->name('partenaire.addobjet');


//Fetching objets
//Route::get('/addad', [AnnonceController::class, 'getCategory'])->name('partenaire.addad');
Route::get('/partenaire/addadfirst', [AnnonceController::class, 'showCategory'])->name('partenaire.addadfirst');
Route::get('/partenaire/addad/{identifiant}', [AnnonceController::class, 'redirectForm'])->name('addad');


//Souhaila:
Route::delete('/annonces/{id_annonce}/delete', [ObjetController::class, 'delete'])->name('annonces.delete');
Route::put('/annonces/{id_annonce}/delete' ,[ObjetController::class, 'update'])->name('annonces.update');


//-----------------------------------ReviewsController:-----------------------------------


Route::post('/profile-details', [ProfileController::class, 'update'])->name('profile-details');
//----------------------------------------------------------------------

//Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/addad', function () {
    return view('partenaire.addad');
});

Route::get('/addadfirst', function () {
    return view('partenaire.addadfirst');
});

Route::get('/addobjet', function () {
   return view('partenaire.addobjet');
});


// Route::get('/profile_partenaire',function(){
// return view('partenaire.profile_part');
// }

// );




// Route::get('/signup', function () {
//     return view('signup');
// });
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/objets', function () {
    return view('objets');
});

Route::get('/test', function () {
    return view('test');
});

//Route::get('profile_partenaire/{id}', [PartenaireController::class, 'show']);
// Route::get('/voir_profile', function () {
//     return view('partenaire.profile_part1');
// });


// Route::get('/addobjet', function () {
//     return view('addobjet');
// });
Route::get('/reclamations_client', function () {
    return view('reclamations_client');
});
Route::get('/reclamations_partenaire', function () {
    return view('reclamations_partenaire');
});
// Route::get('/reviews_client', function () {
//     return view('reviews_client');
// });
// Route::get('/reviews_partenaire', function () {
//     return view('reviews_partenaire');
// });
Route::get('/dashboard_client', function () {
    return view('dashboard_client');
});
//Route::get('/order_envoyer', function () {
  //  return view('order_envoyer');
//});


// added by souhaila
 //Route::get('/order', function () {
  //  return view('order');
//});
// Route::get('/index', function () {
//     return view('index');
// });
Route::get('/404', function () {
    return view('404');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/address', function () {
    return view('address');
});
Route::get('/alerts', function () {
    return view('alerts');
});
Route::get('blog-grid/', function () {
    return view('blog-grid');
});
Route::get('/blog-full-width', function () {
    return view('blog-full-width');
});
Route::get('/blog-left-sidebar', function () {
    return view('blog-left-sidebar');
});
Route::get('/blog-right-sidebar', function () {
    return view('blog-right-sidebar');
});
Route::get('/blog-single', function () {
    return view('blog-single');
});
Route::get('/buttons', function () {
    return view('buttons');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/coming-soon', function () {
    return view('coming-soon');
});
Route::get('/confirmation', function () {
    return view('confirmation');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/empty-cart', function () {
    return view('empty-cart');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/forget-password', function () {
    return view('forget-password');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/product-single', function () {
    return view('product-single');
});
Route::get('/profile-details', function () {
    return view('profile-details');
});
Route::get('/purchase-confirmation', function () {
    return view('purchase-confirmation');
});
Route::get('/shop-sidebar', function () {
    return view('shop-sidebar');
});
Route::get('/shop-single', function () {
    return view('shop-single');
});
Route::get('/shop', function () {
    return view('shop');
});

// Route::get('/eval_partenaire', function () {
//     return view('eval_partenaire');
// });

// Route::get('/eval_client', function () {
//     return view('eval_client');
// });
