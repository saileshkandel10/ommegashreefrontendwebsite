<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'));
Route::get('/admin/login', [App\Http\Controllers\Admin\AuthController::class,'showLogin']);
Route::get('/admin/dashboard', fn() => view('admin.dashboard'))->middleware('auth');
Route::get('/about', [App\Http\Controllers\AboutController::class,'index']);
Route::get('/about/chairperson-message', [App\Http\Controllers\AboutController::class,'chairperson']);
Route::get('/about/vision-mission', [App\Http\Controllers\AboutController::class,'vision']);
Route::get('/about/board-of-directors', [App\Http\Controllers\AboutController::class,'board']);
Route::get('/about/milestones', [App\Http\Controllers\AboutController::class,'milestones']);
Route::get('/about/corporate-governance', [App\Http\Controllers\AboutController::class,'governance']);
Route::get('/about/quality-policy', [App\Http\Controllers\AboutController::class,'quality']);
Route::get('/chairpersons-message', [App\Http\Controllers\AboutRefineController::class,'chairperson']);
Route::get('/our-vision-and-mission', [App\Http\Controllers\AboutRefineController::class,'vision']);
Route::get('/board-of-directors', [App\Http\Controllers\AboutRefineController::class,'board']);
Route::get('/who-we-are', [App\Http\Controllers\AboutRefineController::class,'who']);
Route::get('/our-expertise-and-services', [App\Http\Controllers\AboutRefineController::class,'expertise']);
Route::get('/milestones-and-achievements', [App\Http\Controllers\AboutRefineController::class,'milestones']);
Route::get('/commitment-to-quality-and-society', [App\Http\Controllers\AboutRefineController::class,'quality']);
Route::get('/departments', [App\Http\Controllers\DepartmentPageController::class,'index']);
Route::get('/departments/{slug}', [App\Http\Controllers\DepartmentPageController::class,'show']);
Route::get('/research-development', fn() => view('departments.research-development'));
Route::get('/quality-control', fn() => view('departments.quality-control'));
Route::get('/quality-assurance', fn() => view('departments.quality-assurance'));
Route::get('/production', fn() => view('departments.production'));
Route::get('/sales-marketing', fn() => view('departments.sales-marketing'));
Route::get('/products', [App\Http\Controllers\ProductsController::class,'index']);
Route::get('/products/{slug}', [App\Http\Controllers\ProductsController::class,'show']);
Route::get('/product-category/{slug}', [App\Http\Controllers\ProductsController::class,'category']);
Route::post('/enquiry', fn() => redirect('/products')->with('status','Enquiry received'));

Route::get('/career', fn() => view('career.index'));
Route::get('/contact', fn() => view('contact.index'));

Route::get('/disclosure', fn() => view('disclosure.index'));
Route::get('/disclosure/blog', fn() => view('disclosure.blog'));
Route::get('/disclosure/news', fn() => view('disclosure.news'));
Route::get('/disclosure/notice', fn() => view('disclosure.notice'));
Route::get('/disclosure/gallery', fn() => view('disclosure.gallery'));
Route::get('/disclosure/downloads', fn() => view('disclosure.downloads'));
