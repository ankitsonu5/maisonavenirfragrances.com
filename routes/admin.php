<?php

use App\Http\Controllers\Admin\ActivitylogController;
use App\Http\Controllers\Admin\AiController;
use App\Http\Controllers\Admin\LayerWithController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CollectionController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\FragranceAccordController;
use App\Http\Controllers\Admin\FragranceFamilyController;
use App\Http\Controllers\Admin\IngredientsController;
use App\Http\Controllers\Admin\MoodController;
use App\Http\Controllers\Admin\MoodOccasionController;
use App\Http\Controllers\Admin\OccasionController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceItemController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BlogController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EnquiryController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['guest:admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::group(['middleware' => ['auth:admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {


    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');




    // employees
    Route::resource('employees', EmployeeController::class);
    Route::PATCH('/employees/update-status/{id}', [EmployeeController::class, 'updateStatus'])->name('employees.update.status');
    Route::delete('/employees-delete-all', [EmployeeController::class, 'massDestroy'])->name('employees.massdestroy');
    Route::post('employees/importCSV', [EmployeeController::class, 'importCSV'])->name('employees.importCSV');


    // roles
    Route::resource('roles', RoleController::class);
    Route::PATCH('/roles/update-status/{id}', [RoleController::class, 'updateStatus'])->name('roles.update.status');
    Route::delete('/roles-delete-all', [RoleController::class, 'massDestroy'])->name('roles.massdestroy');
    Route::post('roles/importCSV', [RoleController::class, 'importCSV'])->name('roles.importCSV');

    Route::resource('layer-withs', LayerWithController::class);


    //BlogController Route
    Route::resource('blog', BlogController::class);

    Route::PATCH('/blog/update-status/{id}', [BlogController::class, 'updateStatus'])->name('blog.update.status');
    Route::POST('/blog/update-order', [BlogController::class, 'updateOrder'])->name('blog.update.order');



    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::get('activitylog/index', [ActivitylogController::class, 'index'])->name('activitylog.index');
    Route::get('activitylog/show/{activity}', [ActivitylogController::class, 'show'])->name('activitylog.show');
    Route::delete('activitylog/delete/{activity}', [ActivitylogController::class, 'destroy'])->name('activitylog.destroy');


    //service Route
    Route::resource('service', ServiceController::class);
    Route::PATCH('/service/update-status/{id}', [ServiceController::class, 'updateStatus'])->name('service.update.status');
    Route::POST('/service/update-order', [ServiceController::class, 'updateOrder'])->name('service.update.order');


    //service item Route
    Route::resource('serviceitem', ServiceItemController::class);
    Route::PATCH('/serviceitem/update-status/{id}', [ServiceItemController::class, 'updateStatus'])->name('serviceitem.update.status');
    Route::POST('/serviceitem/update-order', [ServiceItemController::class, 'updateOrder'])->name('serviceitem.update.order');

    //Category Route
    Route::resource('category', CategoryController::class);
    Route::PATCH('/category/update-status/{id}', [CategoryController::class, 'updateStatus'])->name('category.update.status');


    //Collection Route
    Route::resource('collection', CollectionController::class);
    Route::PATCH('/collection/update-status/{id}', [CollectionController::class, 'updateStatus'])->name('collection.update.status');
    Route::POST('/collection/update-order', [CollectionController::class, 'updateOrder'])->name('collection.update.order');


    //MoodController Route
    Route::resource('mood', MoodController::class);
    Route::PATCH('/mood/update-status/{id}', [MoodController::class, 'updateStatus'])->name('mood.update.status');
    Route::POST('/mood/update-order', [MoodController::class, 'updateOrder'])->name('mood.update.order');



    //Occasion Controller Route
    Route::resource('occasion', OccasionController::class);
    Route::PATCH('/occasion/update-status/{id}', [OccasionController::class, 'updateStatus'])->name('occasion.update.status');
    Route::POST('/occasion/update-order', [OccasionController::class, 'updateOrder'])->name('occasion.update.order');




    // Mood Occasion Controller Route
    Route::resource('moodoccasion', MoodOccasionController::class);
    Route::PATCH('/moodoccasion/update-status/{id}', [MoodOccasionController::class, 'updateStatus'])->name('moodoccasion.update.status');
    Route::POST('/moodoccasion/update-order', [MoodOccasionController::class, 'updateOrder'])->name('moodoccasion.update.order');

    Route::GET('/moodoccasion/addproduct/index/{id}', [MoodOccasionController::class, 'addproduct'])->name('moodoccasion.addproduct');
    Route::POST('/moodoccasion/addproduct/store', [MoodOccasionController::class, 'storeProduct'])->name('moodoccasion.storeproduct');
    Route::DELETE('/moodoccasion/addproduct/remove/{moodoccasion_id}/{product_id}', [MoodOccasionController::class, 'removeProduct'])->name('moodoccasion.removeproduct');



    //IngredientsController Route
    Route::resource('ingredients', IngredientsController::class);
    Route::PATCH('/ingredients/update-status/{id}', [IngredientsController::class, 'updateStatus'])->name('ingredients.update.status');
    Route::POST('/ingredients/update-order', [IngredientsController::class, 'updateOrder'])->name('ingredients.update.order');


    //FragranceAccordController Route
    Route::resource('fragranceaccord', FragranceAccordController::class);
    Route::PATCH('/fragranceaccord/update-status/{id}', [FragranceAccordController::class, 'updateStatus'])->name('fragranceaccord.update.status');
    Route::POST('/fragranceaccord/update-order', [FragranceAccordController::class, 'updateOrder'])->name('fragranceaccord.update.order');


    //FragranceFamilyController Route
    Route::resource('fragrancefamily', FragranceFamilyController::class);
    Route::PATCH('/fragrancefamily/update-status/{id}', [FragranceFamilyController::class, 'updateStatus'])->name('fragrancefamily.update.status');
    Route::POST('/fragrancefamily/update-order', [FragranceFamilyController::class, 'updateOrder'])->name('fragrancefamily.update.order');


    //Product Route
    Route::resource('product', ProductController::class);
    Route::PATCH('/product/update-status/{id}', [ProductController::class, 'updateStatus'])->name('product.update.status');
    Route::POST('/product/update-order', [ProductController::class, 'updateOrder'])->name('product.update.order');




    //coupon Route
    Route::resource('coupon', CouponController::class);
    Route::PATCH('/coupon/update-status/{id}', [CouponController::class, 'updateStatus'])->name('coupon.update.status');
    Route::POST('/coupon/update-order', [CouponController::class, 'updateOrder'])->name('coupon.update.order');


    // order Router routes
    Route::get('order/index', [OrderController::class, 'index'])->name('order.index');
    Route::get('order/show/{order}', [OrderController::class, 'show'])->name('order.show');
    Route::delete('order/delete/{order}', [OrderController::class, 'destroy'])->name('order.destroy');
    Route::post('order/update-status', [OrderController::class, 'updateStatus'])->name('order.updateStatus');

    Route::post('/contact', [ContactController::class, 'index'])->name('contact.index');

    Route::get('/enquiry', [EnquiryController::class, 'index'])->name('enquiry.index');
    Route::get('enquiry/delete/{id}', [EnquiryController::class, 'destroy'])->name('enquiry.delete');
    Route::get('enquiry/export', [EnquiryController::class, 'export'])->name('enquiry.export');

    // user Router routes
    Route::get('user/index', [UserController::class, 'index'])->name('user.index');
    Route::get('user/show/{order}', [UserController::class, 'show'])->name('user.show');
    Route::delete('user/delete/{order}', [UserController::class, 'destroy'])->name('user.destroy');

    Route::get('contact/detail', [UserController::class, 'contact'])->name('contact.detail');
    Route::get('contact/export', [UserController::class, 'export'])->name('contact.export');
    Route::get('contact/{id}', [UserController::class, 'contactshow'])->name('contact.show');

    // UserSystemTracking Router routes
    Route::get('user-system-tracking/index', [AiController::class, 'index'])->name('user-system-tracking.index');
    Route::get('user-system-tracking/show/{id}', [AiController::class, 'show'])->name('user-system-tracking.show');
    Route::delete('user-system-tracking/delete/{id}', [AiController::class, 'destroy'])->name('user-system-tracking.destroy');
    Route::get('user-system-tracking/export', [AiController::class, 'export'])->name('user-system-tracking.export');
    Route::get('user-system-tracking/export-pdf', [AiController::class, 'exportPdf'])->name('user-system-tracking.exportPdf');


    // ckeditor
    Route::post('ckeditor/upload', [DashboardController::class, 'upload'])->name('ckeditor.upload');
});

// ssh -p 65002 u923500732@82.112.232.94
// 123.Hostinger
