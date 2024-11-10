    <?php

    use App\Http\Controllers\AdminController;
    use App\Http\Controllers\HomeController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

    // Route::get('/', function () {
    //     return view('home.homepage');
    // });

    Route::get('/',[HomeController::class,'homepage'])->name('home');
    
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });
    

    //Route::resource('user', AdminController::class);
    Route::get('/home', [HomeController::class, 'index'])->name('home');




    Route::get('/login1',function(){
        if(!Auth::check()){
    return view('auth.login');
        }else{
            return redirect()->back();
        }
    })->name('login1');

    Route::get('/register1', function() {
        return view('auth.register');
    })->middleware('guest')->name('register1');


    Route::get('/profile2',[HomeController::class,'showProfile'])->name('profile');
    

