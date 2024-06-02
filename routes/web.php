<?php
/**
 * @author Xanders
 * @see https://team.xsamtech.com/xanderssamoth
 */

use App\Http\Controllers\Web\AccountController;
use App\Http\Controllers\Web\AdminController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\DeveloperController;
use App\Http\Controllers\Web\ExecutiveController;
use App\Http\Controllers\Web\FinancierController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\LogisticsController;
use App\Http\Controllers\Web\TeamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| ROUTES FOR EVERY ROLES
|--------------------------------------------------------------------------
*/
// Generate symbolic link
Route::get('/symlink', function () { return view('symlink'); })->name('generate_symlink');
// Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/language/{locale}', [HomeController::class, 'changeLanguage'])->name('change_language');
Route::get('/notifications', [HomeController::class, 'notification'])->name('notification.home');
Route::get('/notifications/{entity}', [HomeController::class, 'notificationEntity'])->name('notification.entity');
Route::get('/about', [HomeController::class, 'about'])->name('about.home');
Route::get('/about/{entity}', [HomeController::class, 'aboutEntity'])->name('about.entity');
Route::get('/services', [HomeController::class, 'services'])->name('services.home');
Route::get('/services/{entity}', [HomeController::class, 'servicesEntity'])->name('services.entity');
Route::get('/products', [HomeController::class, 'products'])->name('products.home');
Route::get('/products/{entity}', [HomeController::class, 'productsEntity'])->name('products.entity');
Route::get('/event', [HomeController::class, 'event'])->name('event.home');
Route::get('/event/{entity}', [HomeController::class, 'eventEntity'])->name('event.entity');
Route::get('/event/{entity}/{id}', [HomeController::class, 'eventEntityDatas'])->whereNumber('id')->name('event.entity.datas');
Route::get('/career', [HomeController::class, 'career'])->name('career.home');
Route::get('/career/{entity}', [HomeController::class, 'careerEntity'])->name('career.entity');
Route::get('/career/{entity}/{id}', [HomeController::class, 'careerEntityDatas'])->whereNumber('id')->name('career.entity.datas');
// Account
Route::get('/account', [AccountController::class, 'account'])->name('account');
Route::post('/account', [AccountController::class, 'updateAccount']);
Route::get('/account/{entity}', [AccountController::class, 'accountEntity'])->name('account.entity');
Route::post('/account/{entity}', [AccountController::class, 'updateAccountEntity']);
Route::get('/account/{entity}/{id}', [AccountController::class, 'accountEntityDatas'])->whereNumber('id')->name('account.entity.datas');
Route::get('/messenger', [AccountController::class, 'messenger'])->name('messenger.home');
Route::get('/messenger/{id}', [AccountController::class, 'messengerDatas'])->whereNumber('id')->name('messenger.datas');
Route::post('/messenger/{id}', [AccountController::class, 'sendMessage'])->whereNumber('id');

/*
|--------------------------------------------------------------------------
| ROUTES FOR "Team", "Executive" AND "Admin"
|--------------------------------------------------------------------------
*/
Route::get('/product', [DashboardController::class, 'product'])->name('product.home');
Route::get('/product/{id}', [DashboardController::class, 'productDatas'])->whereNumber('id')->name('product.datas');
Route::get('/product/{id}/{entity}', [DashboardController::class, 'productDatasEntity'])->whereNumber('id')->name('product.datas.entity');
Route::get('/service', [DashboardController::class, 'service'])->name('service.home');
Route::get('/service/{id}', [DashboardController::class, 'serviceDatas'])->whereNumber('id')->name('service.datas');
Route::get('/service/{id}/{entity}', [DashboardController::class, 'serviceDatasEntity'])->whereNumber('id')->name('service.datas.entity');

/*
|--------------------------------------------------------------------------
| ROUTES FOR "Team" AND "Executive"
|--------------------------------------------------------------------------
*/
Route::get('/team/{entity}', [TeamController::class, 'teamEntity'])->name('team.entity');

/*
|--------------------------------------------------------------------------
| ROUTES FOR "Developer"
|--------------------------------------------------------------------------
*/
Route::get('/developer', [DeveloperController::class, 'index'])->name('developer.home');
Route::get('/apis', [DeveloperController::class, 'apis'])->name('developer.apis.home');
Route::get('/apis/{entity}', [DeveloperController::class, 'apisEntity'])->name('developer.apis.entity');
Route::get('/integrations', [DeveloperController::class, 'integrations'])->name('developer.integrations.home');
Route::get('/integrations/{entity}', [DeveloperController::class, 'integrationsEntity'])->name('developer.integrations.entity');

/*
|--------------------------------------------------------------------------
| ROUTES FOR "Team"
|--------------------------------------------------------------------------
*/
Route::get('/team', [TeamController::class, 'index'])->name('team.home');
Route::get('/apis', [TeamController::class, 'apis'])->name('developer.apis.home');
Route::get('/apis/{entity}', [TeamController::class, 'apisEntity'])->name('developer.apis.entity');
Route::get('/integrations', [TeamController::class, 'integrations'])->name('developer.integrations.home');
Route::get('/integrations/{entity}', [TeamController::class, 'integrationsEntity'])->name('developer.integrations.entity');

/*
|--------------------------------------------------------------------------
| ROUTES FOR "Logistics"
|--------------------------------------------------------------------------
*/
Route::get('/logistics', [LogisticsController::class, 'index'])->name('logistics.home');
Route::get('/motor', [LogisticsController::class, 'motor'])->name('logistics.motor.home');
Route::get('/motor/{entity}', [LogisticsController::class, 'motorEntity'])->name('logistics.motor.entity');
Route::get('/motor/{entity}/{id}', [LogisticsController::class, 'motorEntityDatas'])->whereNumber('id')->name('logistics.motor.entity.datas');
Route::get('/equipment', [LogisticsController::class, 'equipment'])->name('logistics.equipment.home');
Route::get('/equipment/{entity}', [LogisticsController::class, 'equipmentEntity'])->name('logistics.equipment.entity');
Route::get('/equipment/{entity}/{id}', [LogisticsController::class, 'equipmentEntityDatas'])->whereNumber('id')->name('logistics.equipment.entity.datas');
Route::get('/material', [LogisticsController::class, 'material'])->name('logistics.material.home');
Route::get('/material/{entity}', [LogisticsController::class, 'materialEntity'])->name('logistics.material.entity');
Route::get('/material/{entity}/{id}', [LogisticsController::class, 'materialEntityDatas'])->whereNumber('id')->name('logistics.material.entity.datas');
Route::get('/documents', [LogisticsController::class, 'documents'])->name('logistics.documents.home');
Route::get('/documents/{id}', [LogisticsController::class, 'documentsDatas'])->whereNumber('id')->name('logistics.documents.datas');

/*
|--------------------------------------------------------------------------
| ROUTES FOR "Financier"
|--------------------------------------------------------------------------
*/
Route::get('/financier', [FinancierController::class, 'index'])->name('financier.home');
Route::get('/expenses', [FinancierController::class, 'expenses'])->name('financier.expenses.home');
Route::get('/expenses/{entity}', [FinancierController::class, 'expensesEntity'])->name('financier.expenses.entity');
Route::get('/payments', [FinancierController::class, 'payments'])->name('financier.payments.home');

/*
|--------------------------------------------------------------------------
| ROUTES FOR "Executive"
|--------------------------------------------------------------------------
*/
Route::get('/executive', [ExecutiveController::class, 'index'])->name('executive.home');
Route::get('/staff', [ExecutiveController::class, 'staff'])->name('executive.staff.home');
Route::get('/staff/{entity}', [ExecutiveController::class, 'staffEntity'])->name('executive.staff.entity');

/*
|--------------------------------------------------------------------------
| ROUTES FOR "Admin"
|--------------------------------------------------------------------------
*/
Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
Route::get('/group', [AdminController::class, 'group'])->name('admin.group.home');
Route::get('/group/{id}', [AdminController::class, 'groupDatas'])->whereNumber('id')->name('admin.group.datas');
Route::get('/group/{entity}', [AdminController::class, 'groupEntity'])->name('admin.group.entity');
Route::get('/group/{entity}/{id}', [AdminController::class, 'groupEntityDatas'])->whereNumber('id')->name('admin.group.entity.datas');
Route::get('/miscellaneous', [AdminController::class, 'miscellaneous'])->name('admin.miscellaneous.home');
Route::get('/miscellaneous/{entity}', [AdminController::class, 'miscellaneousEntity'])->name('admin.miscellaneous.entity');
Route::get('/miscellaneous/{entity}/{id}', [AdminController::class, 'miscellaneousEntityDatas'])->whereNumber('id')->name('admin.miscellaneous.entity.datas');
