<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicantsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoseManageController;
use App\Http\Controllers\GeneralPublicController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VaccineCenterController;
use App\Http\Controllers\VaccineManageController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

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


/********************************
 ******* For Admin Section **********
 *********************************/

/***** Registration Section ******/
Route::get('/admin/register', [AuthController::class, 'showRegisterForm'])->name('show.register');
Route::post('/admin/register', [AuthController::class, 'register'])->name('store.register');

/******* login Section ***********/
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('show.Login');
Route::post('/user/login', [AuthController::class, 'userLogin'])->name('get.Login');



Route::middleware(['IsLoggedIn'])->group(function(){


/******* logout Section ***********/
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('logout');

/******* Dashboard Section ***********/
Route::get('/admin/dashboard', [AdminController::class, 'showDashboard'])->name('show.Dashboard');
Route::get('/admin/admin-list', [UserController::class, 'activeAdmins'])->name('allAdmin.list');
Route::get('/admin/approve-users/{userId}', [UserController::class, 'approveUsers'])->name('approveUsers');
Route::get('/admin/pending-users', [UserController::class, 'pendingAdmins'])->name('pendingAdmin.list');
Route::get('/admin/pending_users', [AdminController::class, 'showPendingUsers'])->name('show.pendingUsers');
Route::get('/admin/add_admin', [AdminController::class, 'addAdmin'])->name('addAdmin');
Route::get('/admin/add_applicant', [AdminController::class, 'addApplicant'])->name('addApplicant');


/******* Applicants Section ***********/
Route::get('/admin/all_applicants', [ApplicantsController::class, 'allApplicants'])->name('show.allApplicants');
Route::get('/admin/zero-dosed', [ApplicantsController::class, 'zeroDosedApplicants'])->name('show.zeroDosedApplicants');
Route::get('/admin/first-dosed', [ApplicantsController::class, 'firstDosedApplicants'])->name('show.firstDosedApplicants');
Route::get('/admin/second-dosed', [ApplicantsController::class, 'secondDosedApplicants'])->name('show.secondDosedApplicants');
Route::get('/admin/third-dosed', [ApplicantsController::class, 'thirdDosedApplicants'])->name('show.thirdDosedApplicants');
Route::get('/admin/vaccinated', [ApplicantsController::class, 'vaccinatedApplicants'])->name('show.vaccinatedApplicants');


/******* Dose Section ***********/
Route::get('/admin/all-dose', [DoseManageController::class, 'allDose'])->name('show.allDose');
Route::post('/admin/store-dose', [DoseManageController::class, 'storeDose'])->name('storeDose');
Route::get('/admin/delete-dose/{dose_id}', [DoseManageController::class, 'deleteDose'])->name('deleteDose');
Route::get('/admin/edit-dose/{dose_id}', [DoseManageController::class, 'editDose'])->name('editDose');
Route::post('/admin/update-dose/{dose_id}', [DoseManageController::class, 'updateDose'])->name('updateDose');


/******* Vaccine Section ***********/
Route::get('/admin/all-vaccine', [VaccineManageController::class, 'allVaccine'])->name('show.allVaccine');
Route::post('/admin/store-vaccine', [VaccineManageController::class, 'storeVaccine'])->name('storeVaccine');
Route::get('/admin/delete-vaccine/{vaccine_id}', [VaccineManageController::class, 'deleteVaccine'])->name('deleteVaccine');
Route::get('/admin/edit-vaccine/{vaccine_id}', [VaccineManageController::class, 'editVaccine'])->name('editVaccine');
Route::post('/admin/update-vaccine/{vaccine_id}', [VaccineManageController::class, 'updateVaccine'])->name('updateVaccine');


/******* Volunteer Section ***********/
Route::get('/admin/volunteer/all', [VolunteerController::class, 'allVolunteer'])->name('show.allVolunteer');
Route::get('/admin/volunteer/add', [VolunteerController::class, 'volunteerForm'])->name('show.volunteerForm');
Route::post('/admin/store-volunteer', [VolunteerController::class, 'storeVolunteer'])->name('storeVolunteer');
Route::get('/admin/delete-volunteer/{volunteer_id}', [VolunteerController::class, 'deleteVolunteer'])->name('deleteVolunteer');
Route::get('/admin/edit-volunteer/{volunteer_id}', [VolunteerController::class, 'editVolunteer'])->name('editVolunteer');
Route::post('/admin/update-volunteer/{volunteer_id}', [VolunteerController::class, 'updateVolunteer'])->name('updateVolunteer');


/******* Vaccine Center Section ***********/
Route::get('/admin/all-vaccine-center', [VaccineCenterController::class, 'allVaccineCenter'])->name('show.allVaccineCenter');
Route::get('/admin/vaccine-center/form', [VaccineCenterController::class, 'showVaccineCenterForm'])->name('show.VaccineCenterForm');
Route::post('/admin/vaccine_center/data/store', [VaccineCenterController::class, 'storeVaccineCenter'])->name('storeVaccineCenter');
Route::get('/admin/delete-vaccine-center/{vaccine-center_id}', [VaccineCenterController::class, 'deleteVaccineCenter'])->name('deleteVaccineCenter');
Route::get('/admin/edit-vaccine-center/{vaccine-center_id}', [VaccineCenterController::class, 'editVaccineCenter'])->name('editVaccineCenter');
Route::post('/admin/update-vaccine-center/{vaccine-center_id}', [VaccineCenterController::class, 'updateVaccineCenter'])->name('updateVaccineCenter');


/******* General Public Section ***********/
Route::get('/admin/public/register-form', [GeneralPublicController::class, 'registerPublicForm'])->name('show.registerPublicForm');
Route::post('/admin/public/store', [GeneralPublicController::class, 'store'])->name('store.registerPublicFormDataStore');
Route::get('/admin/public', [GeneralPublicController::class, 'showVerifiedPublic'])->name('show.public');


/******* Location Manage Section ***********/
Route::get('/admin/location/details', [LocationController::class, 'showLocationDetails'])->name('showLocationDetails');
Route::get('/admin/location/division/manage', [LocationController::class, 'showDivisionManage'])->name('show.DivisionManage');
Route::get('/admin/location/district/manage', [LocationController::class, 'showDistrictManage'])->name('showDistrictManage');
Route::get('/admin/location/sub_district/manage', [LocationController::class, 'showSubDistrictManage'])->name('showSubDistrictManage');
Route::get('/admin/location/union/manage', [LocationController::class, 'showUnionManage'])->name('showUnionManage');
Route::post('/admin/location/division/store', [LocationController::class, 'storeDivision'])->name('store.Division');
Route::post('/admin/location/district/store', [LocationController::class, 'storeNewDistrict'])->name('store.District');
Route::post('/admin/location/sub_district/store', [LocationController::class, 'storeNewSubDistrict'])->name('store.storeNewSubDistrict');
Route::post('/admin/location/union/store', [LocationController::class, 'storeNewUnion'])->name('store.storeNewUnion');


});

/********************************
 ***** For Website Section ******
 *********************************/
Route::get('/', [WebsiteController::class, 'homePage'])->name('homePage');
Route::get('/enroll', [WebsiteController::class, 'RegistrationPage'])->name('RegistrationPage');
Route::post('enroll', [WebsiteController::class, 'registerApplicants'])->name('registerApplicants');
Route::get('getCard', [WebsiteController::class, 'getCard'])->name('getCard');
Route::get('/vaccine-card', [WebsiteController::class, 'cardPage'])->name('cardPage');
Route::get('/certificate', [WebsiteController::class, 'certificatePage'])->name('certificatePage');
Route::get('/verify', [WebsiteController::class, 'verifyCertificatePage'])->name('verifyCertificatePage');
Route::get('/vaccine-status', [WebsiteController::class, 'checkStatusPage'])->name('checkStatusPage');
Route::get('/faq', [WebsiteController::class, 'faqPage'])->name('faqPage');




