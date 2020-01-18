<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * Categories
 */
Route::resource('categories', 'Category\CategoryController', ['except' => ['create', 'edit']]);
/**
 * Product
 */
Route::resource('product', 'Product\ProductController', ['only' => ['index', 'show']]);
/**
 * Buyer
 */
Route::resource('buyers', 'Buyer\BuyerController', ['only' => ['index', 'show']]);
Route::resource('buyers.transaction', 'Buyer\BuyerTransactionController', ['only' => ['index']]);
Route::resource('buyers.product', 'Buyer\BuyerProductController', ['only' => ['index']]);
Route::resource('buyers.seller', 'Buyer\BuyerSellerController', ['only' => ['index']]);
Route::resource('buyers.category', 'Buyer\BuyerCategoryController', ['only' => ['index']]);
/**
 * Seller
 */
Route::resource('sellers', 'Seller\SellerController', ['only' => ['index', 'show']]);
/**
 * Transaction
 */
Route::resource('transactions', 'Transaction\TransactionController', ['only' => ['index', 'show']]);
Route::resource('transactions.category', 'Transaction\TransactionCategoryController', ['only' => ['index']]);
Route::resource('transactions.seller', 'Transaction\TransactionSellerController', ['only' => ['index']]);
/**
 * User
 */
Route::resource('users', 'User\UserController', ['except' => ['create', 'edit']]);
