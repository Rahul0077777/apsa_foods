<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Models\Product;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductuserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\AddressController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\User\UserOrderController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\Admin\DistributorPackageController;
use App\Http\Controllers\DistributorOrderController;
/*
|--------------------------------------------------------------------------
| Home Page (Dynamic Products)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    $products = Product::where('status', 1)->latest()->get();
    return view('home', compact('products'));
});

/*
|--------------------------------------------------------------------------
| Smart Dashboard Redirect (Admin / User)
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    if (auth()->user()->is_admin == 1) {
        return redirect('/admin/dashboard');
    }
    return redirect('/user/dashboard');
})->middleware(['auth'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| User Dashboard
|--------------------------------------------------------------------------
*/
// Route::middleware(['auth'])->group(function () {
//     Route::get('/user/dashboard', function () {
//     return view('user.dashboard');
// })->name('user.dashboard')->middleware('auth');
// });

Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
    Route::post('/user/profile-update', [UserDashboardController::class, 'updateProfile'])->name('user.profile.update');
});

Route::middleware(['auth'])->prefix('user')->name('user.')->group(function () {

    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');

    Route::get('/orders', [UserOrderController::class, 'index'])->name('orders');

    Route::get('/addresses', [AddressController::class, 'index'])->name('addresses');

    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
});

Route::middleware(['auth'])->prefix('user')->name('address.')->group(function () {
    Route::post('/address/{id}/default', [AddressController::class, 'setDefault'])->name('default');
});

Route::post('/user/address/store', [AddressController::class, 'store'])->name('address.store');
Route::post('/user/address/{id}/default', [AddressController::class, 'setDefault'])->name('address.default');

Route::get('/user/profile', [UserDashboardController::class, 'profile'])->name('user.profile');

Route::middleware(['auth'])->prefix('user')->name('user.')->group(function () {
    Route::get('/orders', [UserOrderController::class, 'index'])->name('orders');
    Route::get('/orders/{id}', [UserOrderController::class, 'show'])->name('orders.show');
    Route::get('/orders/{id}', [UserOrderController::class, 'show'])->name('orders.view');
});

Route::post('/user/profile-photo', [ProfileController::class, 'uploadPhoto'])->name('user.profile.photo');

Route::post('/user/profile/photo', [UserProfileController::class, 'updatePhoto'])
    ->name('user.profile.photo')
    ->middleware('auth');
/*
|--------------------------------------------------------------------------
| Admin Dashboard
|--------------------------------------------------------------------------
*/
Route::middleware(['auth','admin'])->prefix('admin')->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('admin.dashboard');
    // })->name('admin.dashboard');
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    // Admin Product Management
    Route::resource('products', ProductController::class);
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('orders', \App\Http\Controllers\Admin\OrderController::class);
    Route::put('orders/{id}/status', [OrderController::class, 'updateStatus'])
        ->name('orders.updateStatus');

    Route::get('orders/{id}/invoice', [OrderController::class, 'invoice'])
        ->name('orders.invoice');


    Route::get('customers', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('customers/{id}', [CustomerController::class, 'show'])->name('customers.show');
    Route::post('customers/{id}/block', [CustomerController::class, 'block'])->name('customers.block');

    Route::get('customers/{id}', [CustomerController::class, 'show'])->name('customers.show');
   
  Route::resource('distributor',
        \App\Http\Controllers\Admin\DistributorPackageController::class)
        ->names('admin.distributor');

});

/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Cart Routes
|--------------------------------------------------------------------------
*/
Route::post('/add-to-cart/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/remove-from-cart/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/increase/{id}', [CartController::class, 'increase'])->name('cart.increase');
Route::post('/cart/decrease/{id}', [CartController::class, 'decrease'])->name('cart.decrease');

/*
|--------------------------------------------------------------------------
| Shop & Product
|--------------------------------------------------------------------------
*/
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/product/{slug}', [ProductuserController::class, 'show'])->name('product.show');

/*
|--------------------------------------------------------------------------
| Checkout
|--------------------------------------------------------------------------
*/
Route::get('/checkout', function () {
    return view('checkout');
})->middleware('auth')->name('checkout');




Route::post('/place-order', [CheckoutController::class, 'placeOrder'])->name('place.order');

Route::get('/order-success', function () {
    return view('order-success');
})->name('order.success');


Route::get('/careers', [CareerController::class, 'index'])->name('careers');

Route::post('/careers/apply', [CareerController::class, 'apply'])->name('career.apply');

Route::get('/admin/jobs', [CareerController::class, 'adminIndex'])->name('admin.jobs');
Route::get('/admin/jobs/create', [CareerController::class, 'create'])->name('admin.jobs.create');
Route::post('/admin/jobs/store', [CareerController::class, 'storeJob'])->name('admin.jobs.store');
Route::get('/admin/jobs/{id}/edit', [CareerController::class, 'edit'])
    ->name('admin.jobs.edit');

Route::put('/admin/jobs/{id}', [CareerController::class, 'update'])
    ->name('admin.jobs.update');

Route::delete('/admin/jobs/{id}', [CareerController::class, 'destroy'])
    ->name('admin.jobs.delete');

Route::get('/admin/contact-leads', [ContactController::class, 'adminIndex'])
    ->name('admin.contact.leads');

Route::delete('/admin/contact-leads/{id}', [ContactController::class, 'destroy'])
    ->name('admin.contact.leads.delete');


Route::get('/admin/subscribers', [SubscriberController::class, 'index'])
    ->name('admin.subscribers');
Route::delete('/admin/subscribers/{id}', [SubscriberController::class, 'destroy'])
    ->name('admin.subscribers.delete');

Route::get('/blog', [BlogController::class,'blogList'])->name('blog');

Route::get('/admin/blogs', [BlogController::class,'index'])->name('admin.blogs');
Route::get('/admin/blogs/create', [BlogController::class,'create'])->name('admin.blogs.create');
Route::post('/admin/blogs/store', [BlogController::class,'store'])->name('admin.blogs.store');
Route::get('/blog/{slug}', [BlogController::class,'show'])->name('blog.show');
    
Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');
Route::get('/terms-and-conditions', function () {
    return view('terms');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/shipping-policy', function () {
    return view('shipping-policy');
});

Route::get('/return-refund-policy', function () {
    return view('return-refund-policy');
});

Route::get('/shipping-policy.blade', function () {
    return view('shipping-policy.blade');
});

Route::post('/apply-partnership', [PartnershipController::class, 'store'])
    ->name('partnership.store');


Route::get('/faq', function () {
    return view('faq');
});

Route::get('/distributor',
    [DistributorController::class,'index']);

Route::get('/distributor/order/{slug}',
    [DistributorOrderController::class,'create'])
    ->name('distributor.order');

Route::post('/distributor/order',
    [DistributorOrderController::class,'store'])
    ->name('distributor.order.store');
    
    Route::post('/cart/add-package/{id}',
    [CartController::class,'addPackage'])
    ->name('cart.add.package');

// Route::get('/blog', [BlogController::class,'index'])->name('blog');

Route::post('/wishlist/{product}', [\App\Http\Controllers\WishlistController::class, 'toggle'])
    ->name('wishlist.toggle')
    ->middleware('auth');


   Route::get('/wishlist', [WishlistController::class, 'index'])
    ->middleware('auth')
    ->name('wishlist.index');
/*
|--------------------------------------------------------------------------
| Static Pages
|--------------------------------------------------------------------------
*/
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/wholesale', function () {
    return view('wholesale');
})->name('wholesale');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

/*
|--------------------------------------------------------------------------
| Contact Form Submit
|--------------------------------------------------------------------------
*/
Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');



/*
|--------------------------------------------------------------------------
| Auth Routes (Breeze)
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';
