<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','Front\HomeController@view')->name('home');
Route::get('/professionals','Front\ProfessionalController@category')->name('professionals');
Route::get('/single-professionals','Front\ProfessionalController@eachCategory')->name('single_professional');
Route::get('/professional-details','Front\ProfessionalController@view')->name('professionalDetails');
Route::get('/articles','Front\ArticleController@view')->name('articles');
Route::get('/products','Front\ProductController@view')->name('products');
Route::get('/projects','Front\ProjectController@view')->name('projects');
Route::get('/product-details','Front\ProductDetailsController@view')->name('productDetails');
Route::get('/project-details','Front\ProjectDetailsController@view')->name('projectDetails');

//register
Route::get('/user-register','CustomRegisterController@index')->name('supplier_register');
Route::post('/user-store','CustomRegisterController@store')->name('user.store');

//supplier
Route::get('/supplier-profile','Supplier\ProfileController@index')->name('supplier.profile');
// Route::get('/supplier-profile/{id}','Supplier\ProfileController@edit')->name('supplier.profile.edit');
Route::post('/supplier-profile-update/{id}','Supplier\ProfileController@updateSupplier')->name('supplier.profile.update');
Route::post('/supplier-profile-pic-update/{id}','Supplier\ProfileController@updateSupplierPic')->name('supplier.profile.pic.update');

Route::resource('/supplier/product','Supplier\ProductController');
Route::post('/supplier-product-update/{id}','Supplier\ProductController@updateProduct')->name('supplier.product.update');
Route::get('/supplier-product-delete/{id}','Supplier\ProductController@delete')->name('supplier.product.delete');

//admin
Route::get('admin/dashboard','Admin\DashboardController@view')->name('admin.dashboard');

//professional category
Route::get('create/professional/category','Admin\ProfessionalCategoryController@view')->name('admin.professional.category');
Route::get('professional/category/list','Admin\ProfessionalCategoryController@index')->name('admin.professional.category.list');
Route::post('store/professional/category','Admin\ProfessionalCategoryController@store')->name('admin.professional.category.store');
Route::get('store/professional/category/{id}','Admin\ProfessionalCategoryController@edit')->name('admin.professional.category.edit');
Route::post('update/professional/category/{id}','Admin\ProfessionalCategoryController@update')->name('admin.professional.category.update');
Route::get('delete/professional/category/{id}','Admin\ProfessionalCategoryController@delete')->name('admin.professional.category.delete');


//slider
Route::get('create/slider','Admin\SliderController@view')->name('admin.slider');
Route::get('slider/list','Admin\SliderController@index')->name('admin.slider.list');
Route::post('store/slider','Admin\SliderController@store')->name('admin.slider.store');
Route::get('edit/slider/{id}','Admin\SliderController@edit')->name('admin.slider.edit');
Route::post('update/slider/{id}','Admin\SliderController@update')->name('admin.slider.update');
Route::get('delete/slider/{id}','Admin\SliderController@delete')->name('admin.slider.delete');


//product category
Route::get('create/product/category','Admin\ProductCategoryController@view')->name('admin.product.category');
Route::get('product/category/list','Admin\ProductCategoryController@index')->name('admin.product.category.list');
Route::post('store/product/category','Admin\ProductCategoryController@store')->name('admin.product.category.store');
Route::get('store/product/category/{id}','Admin\ProductCategoryController@edit')->name('admin.product.category.edit');
Route::post('update/product/category/{id}','Admin\ProductCategoryController@update')->name('admin.product.category.update');
Route::get('delete/product/category/{id}','Admin\ProductCategoryController@delete')->name('admin.product.category.delete');

//professional
Route::get('create/professional','Admin\ProfessionalController@view')->name('admin.professional');
Route::get('professional/list','Admin\ProfessionalController@index')->name('admin.professional.list');
Route::post('store/professional','Admin\ProfessionalController@store')->name('admin.professional.store');
Route::get('edit/professional/{id}','Admin\ProfessionalController@edit')->name('admin.professional.edit');
Route::post('update/professional/{id}','Admin\ProfessionalController@update')->name('admin.professional.update');
Route::get('delete/professional/{id}','Admin\ProfessionalController@delete')->name('admin.professional.delete');

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
