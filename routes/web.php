<?php

use App\Http\Controllers\FundsController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\OrderListController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReferenceCodesController;
use App\Http\Controllers\UserValletController;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware('admin')->group(function () {
    // Administration Routes
    Route::get('administration', [MembersController::class, 'index'])->name('administration');
    Route::get('add-member', [MembersController::class, 'create']);
    Route::post('add-member', [MembersController::class, 'store']);
    Route::get('update-user/{id}', [MembersController::class, 'edit']);
    Route::post('update-members/{id}', [MembersController::class, 'update'])->name('members.update');
    Route::get('reset-todays-orders/{user}', [MembersController::class, 'resetTodaysOrders'])->name('reset.todays.orders');
    Route::post('save_selected_orders/{user}', [MembersController::class, 'saveSelectedOrders'])->name('save_selected_orders');
    Route::get('user-recharge-history/{user}', [MembersController::class, 'userRechargeHistory'])->name('user_recharge_history');
    Route::get('user-redemption-history/{user}', [MembersController::class, 'userRedemptionHistory'])->name('user_redemption_history');
    Route::get('reference-codes', [ReferenceCodesController::class, 'index']);
    Route::get('add-reference-code', [ReferenceCodesController::class, 'create']);
    Route::post('create-reference-code', [ReferenceCodesController::class, 'store']);
    Route::get('memberships', [MembershipController::class, 'index']);
    Route::get('add-memberships', [MembershipController::class, 'create']);
    Route::post('create-memberships', [MembershipController::class, 'store']);
    Route::get('edit-memberships/{id}', [MembershipController::class, 'edit']);
    Route::post('update-memberships/{id}', [MembershipController::class, 'update']);
    Route::get('delete-memberships/{id}', [MembershipController::class, 'destroy']);
    Route::get('reset-single/{id}', [MembersController::class, 'reset_single_order'])->name('reset.single');
    Route::get('reset-orders/{id}', [MembersController::class, 'reset_orders']);
    Route::post('update-orders/{id}', [MembersController::class, 'update_orders'])->name('update.orders');
    Route::get('add-debit/{id}', [FundsController::class, 'index']);
    Route::post('add-debit', [FundsController::class, 'store']);
    Route::get('order-list', [OrderListController::class, 'index']);
    Route::get('add-order-list', [OrderListController::class, 'create']);
    Route::post('create-orders-list', [OrderListController::class, 'store']);
    Route::get('edit-order-list/{id}', [OrderListController::class, 'edit']);
    Route::match(['post','put'], 'update-order-list/{id}', [OrderListController::class, 'update']);
    Route::get('delete-order-list/{id}', [OrderListController::class, 'destroy']);
    Route::get('vallet-information/{id}', [UserValletController::class, 'index']);
    Route::post('update-wallet', [UserValletController::class, 'show'])->name('update.wallet');
    Route::post('update-wallet-info', [UserValletController::class, 'update'])->name('update.wallet.info');
    Route::get('add-vallet-information/{id}', [UserValletController::class, 'create']);
    Route::post('save-vallet', [UserValletController::class, 'store']);
});
// Admin Authentication Routes
Route::get('admin-login', [MembersController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin-login', [MembersController::class, 'login']);
Route::get('admin-logout', [MembersController::class, 'logout'])->name('admin.logout');

// User Routes
Route::view('/', 'user.index')->name('home');
Route::view('/about-us', 'user.about-us')->name('about');
Route::view('/projects', 'user.projects')->name('projects');
Route::view('/contact-us', 'user.contact-us')->name('contact');
Route::view('/blogs', 'user.blogs')->name('blogs');
Route::view('/dashboard', 'user.home')->name('dashboard')->middleware('auth');
// Route::view('support', 'user.support')->name('support')->middleware('auth');
Route::view('user-login', 'user.signin')->name('user.login')->middleware('redirect.auth');
Route::view('user-register', 'user.register')->middleware('redirect.auth');
Route::post('user-registeration', [ProfileController::class, 'userRegisteration'])->name('user-registeration');
Route::get('profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::get('data-optimization', [ProfileController::class, 'show'])->name('data-optimization')->middleware('auth');
Route::get('history', [OrdersController::class, 'history'])->name('history')->middleware('auth');
Route::get('generate-order', [OrdersController::class, 'index'])->name('generate.order')->middleware('auth');
Route::post('submit-order', [OrdersController::class, 'submitOrder'])->name('submit.order')->middleware('auth');
Route::post('process-order', [OrdersController::class, 'processOrder'])->name('process.order')->middleware('auth');
Route::match(['get', 'post'], 'support', [OrdersController::class, 'support'])->name('support');
Route::get('wallet-information', [ProfileController::class, 'showWalletInformation'])->name('wallet-information')->middleware('auth');
Route::post('wallet-information', [ProfileController::class, 'storeWalletInformation'])->name('wallet-information.save')->middleware('auth');
Route::view('company-information', 'user.company-information')->name('company-information')->middleware('auth');
Route::get('invitation', [ProfileController::class, 'invitation'])->name('invitation')->middleware('auth');
Route::view('security', 'user.security')->name('security')->middleware('auth');
Route::view('termsconditions', 'user.termsconditions')->name('termsconditions')->middleware('auth');
Route::view('faq', 'user.faq')->name('faq')->middleware('auth');
Route::view('membership', 'user.membership')->name('membership')->middleware('auth');
Route::get('recharge', [ProfileController::class, 'showBalanceinRecharge'])->name('recharge')->middleware('auth');
Route::get('redemption', [ProfileController::class, 'showRedemption'])->name('redemption')->middleware('auth');
Route::get('user.logout', [ProfileController::class, 'logout'])->name('user.logout')->middleware('auth');
Route::post('/change-login-password', [ProfileController::class, 'changeLoginPassword'])->name('change.login.password')->middleware('auth');
Route::post('/change-wallet-password', [ProfileController::class, 'changeWalletPassword'])->name('change.wallet.password')->middleware('auth');
Route::post('/redemption', [ProfileController::class, 'redeem'])->name('redeem')->middleware('auth');
Route::get('/recharge-history', [ProfileController::class, 'rechargeHistory'])->name('recharge.history')->middleware('auth');
Route::get('/redemption-history', [ProfileController::class, 'redemptionHistory'])->name('redemption.history')->middleware('auth');
