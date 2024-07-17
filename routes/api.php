<?php


use App\Domains\Company\Application\Api\Controllers\AddCompanyController;
use App\Domains\Company\Application\Api\Controllers\DeleteCompanyController;
use App\Domains\Company\Application\Api\Controllers\EditCompanyController;
use App\Domains\Company\Application\Api\Controllers\GetCompaniesController;
use App\Domains\Country\Application\Api\Controllers\AddCountryController;
use App\Domains\Country\Application\Api\Controllers\DeleteCountryController;
use App\Domains\Country\Application\Api\Controllers\EditCountryController;
use App\Domains\Country\Application\Api\Controllers\GetCountriesController;
use App\Domains\Mining\Application\Api\Controllers\AddMiningController;
use App\Domains\Mining\Application\Api\Controllers\DeleteMiningController;
use App\Domains\Mining\Application\Api\Controllers\EditMiningController;
use App\Domains\Mining\Application\Api\Controllers\GetMiningsController;
use Illuminate\Support\Facades\Route;

Route::prefix('/countries')->group(function () {
    Route::get('/', [GetCountriesController::class, 'getCountries']);
    Route::post('/add', [AddCountryController::class, 'addCountry']);
    Route::put('/{id}', [EditCountryController::class, 'editCountry']);
    Route::delete('/', [DeleteCountryController::class, 'deleteCountry']);
});

Route::prefix('/companies')->group(function () {
    Route::get('/', [GetCompaniesController::class, 'getCompanies']);
    Route::post('/add', [AddCompanyController::class, 'addCompany']);
    Route::put('/{id}', [EditCompanyController::class, 'editCompany']);
    Route::delete('/', [DeleteCompanyController::class, 'deleteCompany']);
});

Route::prefix('/minings')->group(function () {
    Route::get('/', [GetMiningsController::class, 'getMinings']);
    Route::post('/add', [AddMiningController::class, 'addMining']);
    Route::put('/{id}', [EditMiningController::class, 'editMining']);
    Route::delete('/', [DeleteMiningController::class, 'deleteMining']);
});
