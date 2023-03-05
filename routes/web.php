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


//front

Route::middleware('HtmlMinifier')->group(function () {
    Route::get('/', 'Front\HomeController@view')->name('home');
    Route::get('/professionals', 'Front\ProfessionalController@category')->name('professionals');
    Route::get('/single-professionals/{id}', 'Front\ProfessionalController@eachCategory')->name('single_professional');
    Route::get('/professional-details/{id}', 'Front\ProfessionalController@view')->name('professionalDetails');
    Route::get('/articles', 'Front\ArticleController@view')->name('articles');
    Route::get('/front/products', 'Front\ProductController@view')->name('front.products');
    Route::get('/projects', 'Front\ProjectController@view')->name('projects');
    Route::get('/product-details/{id}', 'Front\ProductDetailsController@view')->name('productDetails');
    Route::get('/project-details/{id}', 'Front\ProjectDetailsController@view')->name('projectDetails');
    Route::get('/front/category/products/{id}', 'Front\ProductController@pCategory')->name('front.category.products');
    Route::get('/front/location/products/{id}', 'Front\ProductController@pLocation')->name('front.location.products');
    Route::get('/download/catalouges/{id}', 'Front\ProductDetailsController@catalouges')->name('download.catalouges');
    Route::get('/download/drawing/{id}', 'Front\ProductDetailsController@drawing')->name('download.drawing');
    Route::get('/front/category/projects/{id}', 'Front\ProjectController@pCategory')->name('front.category.projects');
    Route::get('/front/location/projects/{id}', 'Front\ProjectController@pLocation')->name('front.location.projects');
    Route::get('/articles-details/{id}', 'Front\ArticleController@eachArticles')->name('front.articles_details');
    Route::match (['get', 'post'], '/search', 'Front\HomeController@search')->name('professional.search');
    Route::get('/search-professionals', 'Front\ProfessionalController@searchProfessionals')->name('front.search.professionals');

});


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


//projects
Route::get('create/projects','Admin\projectsController@view')->name('admin.projects');
Route::get('projects/list','Admin\projectsController@index')->name('admin.projects.list');
Route::post('store/projects','Admin\projectsController@store')->name('admin.projects.store');
Route::get('edit/projects/{id}','Admin\projectsController@edit')->name('admin.projects.edit');
Route::post('update/projects/{id}','Admin\projectsController@update')->name('admin.projects.update');
Route::get('delete/projects/{id}','Admin\projectsController@delete')->name('admin.projects.delete');

//products
Route::get('admin/create/products','Admin\ProductsController@view')->name('admin.products');
Route::get('admin/products/list','Admin\ProductsController@index')->name('admin.products.list');
Route::post('admin/store/products','Admin\ProductsController@store')->name('admin.products.store');
Route::get('admin/edit/products/{id}','Admin\ProductsController@edit')->name('admin.products.edit');
Route::post('admin/update/products/{id}','Admin\ProductsController@update')->name('admin.products.update');
Route::get('admin/delete/products/{id}','Admin\ProductsController@delete')->name('admin.products.delete');

//articles
Route::get('admin/create/articles','Admin\ArticlesController@view')->name('admin.articles');
Route::get('admin/articles/list','Admin\ArticlesController@index')->name('admin.articles.list');
Route::post('admin/store/articles','Admin\ArticlesController@store')->name('admin.articles.store');
Route::get('admin/edit/articles/{id}','Admin\ArticlesController@edit')->name('admin.articles.edit');
Route::post('admin/update/articles/{id}','Admin\ArticlesController@update')->name('admin.articles.update');
Route::get('admin/delete/articles/{id}','Admin\ArticlesController@delete')->name('admin.articles.delete');

//admin
Route::get('/admin-profile','Admin\ProfileController@index')->name('admin.profile');
Route::get('/admin-profile/pic','Admin\ProfileController@updatePic')->name('admin.profile.pic');
Route::post('/admin-profile-update/{id}','Admin\ProfileController@updateAdmin')->name('admin.profile.update');
Route::post('/admin-profile-pic-update/{id}','Admin\ProfileController@updateAdminPic')->name('admin.profile.pic.update');

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');


//professional & others
Route::get('/professional-profile','Professional\ProfileController@index')->name('professional.profile');
// Route::get('/supplier-profile/{id}','Supplier\ProfileController@edit')->name('supplier.profile.edit');
Route::post('/professional-profile-update/{id}','Professional\ProfileController@updateProfessional')->name('professional.profile.update');
Route::post('/professional-profile-pic-update/{id}','Professional\ProfileController@updateProfessionalPic')->name('professional.profile.pic.update');

Route::resource('/professional/project','Professional\ProjectController');
Route::post('/professional-product-update/{id}','Professional\ProjectController@updateProject')->name('professional.project.update');
Route::get('/professional-product-delete/{id}','Professional\ProjectController@delete')->name('professional.project.delete');

Route::get('/products-status-approved/{id}','Admin\DashboardController@productEdit')->name('admin.products.dashboard.edit');
Route::get('/projects-status-approved/{id}','Admin\DashboardController@projectEdit')->name('admin.projects.dashboard.edit');


Route::post('/projects-status-update/{id}','Admin\DashboardController@projectUpdate')->name('admin.projects.status.update');
Route::post('/products-status-update/{id}','Admin\DashboardController@productUpdate')->name('admin.products.status.update');

Route::get('/news','Front\HomeController@news')->name('front.news');
Route::get('/events','Front\HomeController@events')->name('front.events');


