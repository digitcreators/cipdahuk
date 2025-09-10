<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\HomeController;


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

Route::get('/clear', function () {
    // Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    // Artisan::call('optimize');
    return 'Caching cleared successfully.';
});

Auth::routes([
    //  'login'     =>true,   //    login Routes
    'register'  => true,     // Registration Routes...
    'verify'    => true,       // Email Verification Routes...
    'reset'     => true,        // Password Reset Routes...
]);
Route::get('logout', 'Auth\LoginController@logout');


Route::get('redirect/{driver}', [App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider']);
Route::get('{driver}/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'verified', 'admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    // Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    // Route::resource('permissions', 'PermissionsController');
    // Roles
    // Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    // Route::resource('roles', 'RolesController');
    // Users
    // Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    // Route::resource('users', 'UsersController');
    // Orders
    Route::get('get-orders', 'OrdersController@getOrders')->name('orders.get');
    Route::resource('orders', 'OrdersController');
    // Invoices
    Route::resource('invoices', 'InvoicesController');
    // Contacts
    Route::get('get-contacts', 'ContactController@getContacts')->name('contacts.get');
    Route::resource('contacts', 'ContactController');
    // Services
    Route::get('get-services', 'ServicesController@getServices')->name('services.get');
    Route::resource('services', 'ServicesController')->except('show');
    // Blogs
    Route::get('get-blogs', 'BlogsController@getBlogs')->name('blogs.getSlug');
    Route::resource('blogs', 'BlogsController');
    // Customers
    Route::resource('setting', 'WebSettingController');
    // Customers
    Route::resource('customers', 'CustomersController');
});
Route::group(['prefix' => 'customer', 'as' => 'customer.', 'namespace' => 'Customer', 'middleware' => [ 'auth', 'verified', 'customer']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Orders
    Route::resource('orders', 'OrdersController');
    // Invoices
    Route::resource('invoices', 'InvoicesController');
    // Profile
    Route::resource('profile', 'ProfileController')->only(['index', 'update']);
    // Change
    Route::get('change-password', 'ProfileController@changePassword')->name('profile.change-password');
    Route::post('change-password', 'ProfileController@changePasswordUpdate')->name('profile.change-password.change');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});

Route::get('/invoice',          "OrderController@invoice")->name('invoice');



Route::get('/', 'HomeController@index')->name('home');
Route::get('cipd-level-3', 'HomeController@cipd_level_3')->name('cipd-level-3');
Route::get('cipd-level-5', 'HomeController@cipd_level_5')->name('cipd-level-5');
Route::get('cipd-level-7', 'HomeController@cipd_level_7')->name('cipd-level-7');
Route::get('hr-assignment-help', 'HomeController@hr_assignment_help')->name('hr-assignment');





// Section Pages

Route::get('about-us', 'HomeController@about_us')->name('about-us');
Route::get('reviews', 'HomeController@reviews')->name('reviews');
Route::get('pricing', 'HomeController@pricing')->name('pricing');
Route::get('samples', 'HomeController@samples')->name('samples');
Route::get('sitemap', 'HomeController@sitemap')->name('sitemap');
Route::get('terms-and-conditions', 'HomeController@terms_and_conditions')->name('terms-and-conditions');
Route::get('privacy-policy', 'HomeController@privacy_policy')->name('privacy-policy');
Route::get('return-and-exchange-policy', 'HomeController@return_and_exchange_policy')->name('return-and-exchange-policy');
Route::get('refund-policy', 'HomeController@refund_policy')->name('refund-policy');

Route::get('contact-us','ContactController@index')->name('contact-us');
Route::post('contact-store','ContactController@store')->name('contact.store');

// Show order page
Route::get('order', [OrderController::class, 'order'])->name('order');

// Store order form submission
Route::post('order-store', [OrderController::class, 'store'])->name('order.store');

Route::get('/blogs','BlogController@create')->name('blogs');
Route::get('blogs/{slug}',           'BlogController@show')->name('blogs.show');
Route::get('blogs/category/{slug}', "BlogController@category")->name('blogs.category');
Route::get('blogs/s', "BlogController@search")->name('blogs.search');















    
               
                   
                  
           
              
                 
                 
             
                    
                    
                 
                   
                 
           
                   
          
                   
             
                  
                   
                   