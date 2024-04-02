<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\DownloadAttachmentController;
use App\Http\Controllers\ImportDataController;
use App\Http\Controllers\ImportDataSWMController;
use App\Http\Controllers\LogsController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\Profile;
use App\Http\Controllers\ProjectSpecificSubTypeController;
use App\Http\Controllers\ProjectSpecificTypeController;
use App\Http\Controllers\ProjectSubTypeController;
use App\Http\Controllers\ProjectTypeController;
use App\Http\Controllers\PsicClassController;
use App\Http\Controllers\PsicGroupController;
use App\Http\Controllers\PSICSubClassController;
use App\Http\Controllers\RemoveAttachementController;
use App\Http\Controllers\SolidwasteClosedDumpsiteController;
use App\Http\Controllers\SolidwasteEquipmentsController;
use App\Http\Controllers\SolidwasteLCEController;
use App\Http\Controllers\SolidwasteSLFController;
use App\Http\Controllers\SolidwasteMRFController;
use App\Http\Controllers\SolidwasteTenYearController;
use App\Http\Controllers\SolidwasteTenYearMonitoringController;
use App\Http\Controllers\SolidwasteEquipmentController;
use App\Http\Controllers\SolidwasteDuesController;
use App\Http\Controllers\SolidwasteIECController;
use App\Http\Controllers\SolidwasteSection24Controller;
use App\Http\Controllers\SolidwasteGadController;
use App\Http\Controllers\SolidwasteExport;
use App\Http\Controllers\UnitSectionController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\UniverseMapController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\USER_CONTROLLER\UsersAccessController;
use App\Http\Controllers\USER_CONTROLLER\UsersAccessRoleController;
use App\Http\Controllers\USER_CONTROLLER\UsersAccessTemplateController;
use App\Models\USER_ACCESS\UsersAccessRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fleet\Client\RequestController as ChaufferClientController;
use App\Http\Controllers\Fleet\Client\RemarksController as ChaufferClientRemarkController;
use App\Http\Controllers\Fleet\PDFController as ChaufferPDFController;

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
//     return inertia('Pages/index');
// });


Route::get('/', [AuthController::class, 'index'])->name("authForm")->middleware("guest");

Route::get('/getip', function (Request $request) {
    return dd(request());
});

Route::post('/', [AuthController::class, 'login'])->name("auth")->middleware("guest");


Route::get('/forgot_password', [ForgotPasswordController::class, 'index'])->name("forgot_password_form")->middleware("guest");
Route::post('/forgot_password', [ForgotPasswordController::class, 'post'])->name("forgot_password_send_mail")->middleware("guest");
Route::post('/verify_code/{user}', [ForgotPasswordController::class, 'verify_code'])->name("forgot_password_send_mail")->middleware("guest");

Route::group([
    'middleware' => ['auth','handle_user_role'],
    // 'middleware' => ['auth'] ,
    'prefix' => "/app",
], function () {
    Route::group([
        'prefix'=>"chauffeur"
    ], function(){
        Route::get("/",[ChaufferClientController::class, 'index'])->name('chauffeur');
        Route::get("/create",[ChaufferClientController::class, 'create'])->name('chauffeur.create');
        Route::post("/create",[ChaufferClientController::class, 'store'])->name('chauffeur.post');
        Route::get("/{requestModel}",[ChaufferClientController::class, 'show'])->name('chauffeur.show');
        Route::patch("/{requestModel}",[ChaufferClientController::class, 'update'])->name('chauffeur.update');
        Route::delete("/{requestModel}",[ChaufferClientController::class, 'delete'])->name('chauffeur.delete');
        /**
         * chauffeur remark unisys module
         */
        Route::post("/remark",[ChaufferClientRemarkController::class, 'store'])->name('chauffeur.remark.store');

        // Route::get("/pdf",[ChaufferPDFController::class, 'generateRequestVehicleForm'])->name('generateRequestVehicleForm');



    });
    Route::get("/chauffeur-pdf/{requestId}",[ChaufferPDFController::class, 'generateRequestVehicleForm'])->name('generateRequestVehicleForm');


    Route::delete('/', [AuthController::class, 'destroy'])->name("authLogout");
    // Route::post('attachments', DownloadAttachmentController::class)->name("dl");
    Route::get('attachments', [DownloadAttachmentController::class,'index'])->name("dl");


    Route::get('/pornhub', [Dashboard::class, 'index'])->name("dashboard.index");
    Route::get('/profile', [Profile::class, 'index'])->name("profile.index");
    Route::post('/profile', [Profile::class, 'store'])->name("profile.store");//change user pass

    Route::get('/users', [UsersController::class, 'index'])->name("users");
    Route::get('/users/create', [UsersController::class, 'create'])->name("users.create");
    Route::post('/users', [UsersController::class, 'store'])->name("users.store");

    Route::get('/users/{user}', [UsersController::class, 'edit'])->name("users.show");

    Route::patch('/users/{user}', [UsersController::class, 'update'])->name("users.update");

    Route::delete('/users/{user}', [UsersController::class, 'destroy'])->name("users.destroy");

    Route::post('/users/reset_password', [UsersController::class, 'resetPassword'])->name("users.resetPassword");

    Route::get('/unit_section', [UnitSectionController::class, 'index'])->name("unit_section.index");
    Route::post('/unit_section', [UnitSectionController::class, 'store'])->name("unit_section.store");
    Route::patch('/unit_section/{unit_section}', [UnitSectionController::class, 'update'])->name("unit_section.update");
    Route::delete('/unit_section/{unit_section}', [UnitSectionController::class, 'destroy'])->name("unit_section.destroy");

    Route::get('/division', [DivisionController::class, 'index'])->name("division.index");
    Route::post('/division', [DivisionController::class, 'store'])->name("division.store");
    Route::patch('/division/{division}', [DivisionController::class, 'update'])->name("division.update");
    Route::delete('/division/{division}', [DivisionController::class, 'destroy'])->name("division.delete");

    Route::get('/position', [PositionController::class, 'index'])->name("position.index");
    Route::post('/position', [PositionController::class, 'store'])->name("position.store");
    Route::patch('/position/{position}', [PositionController::class, 'update'])->name("position.update");
    Route::delete('/position/{position}', [PositionController::class, 'destroy'])->name("position.delete");

    Route::get('/map', [UniverseController::class, 'imthemap'])->name("imthemap");
    Route::get('/universe/logs', [LogsController::class, 'index'])->name("logs");
    Route::get('/universe/logs_individual/{id}', [LogsController::class, 'logs_individual'])->name("logs_individual");
    // OWENS

    // GET REQUESTS
    Route::get('/import_data', [ImportDataController::class, 'import_data'])->name("import_data");
    Route::get('/import_data_swm', [ImportDataSWMController::class, 'import_data_swm'])->name("import_data_swm");
    Route::get('/universe', [UniverseController::class, 'universe_list'])->name("universe_list");
    Route::get('/universe_dashboard/{firm_type}', [UniverseController::class, 'universe_dashboard'])->name("universe_dashboard");
    Route::get('/universe_form', [UniverseController::class, 'universe_form'])->name("universe_form");
    Route::get('/universe_form/{id}', [UniverseController::class, 'universe_form'])->name("universe_form_id");
    Route::get('/universe_map/{universe_FK}', [UniverseMapController::class, 'universe_map'])->name("universe_map");
    Route::get('/delete_media/{id}/{category}', [DownloadAttachmentController::class, 'delete_media'])->name("delete_media");
    // POST REQUESTS
    Route::post('/universe_process', [UniverseController::class, 'universe_process'])->name("universe_process");
    Route::post('/universe_polygon', [UniverseMapController::class, 'universe_polygon'])->name("universe_polygon");
    Route::delete('/delete_permit/{id}', [UniverseController::class, 'delete_permit'])->name("delete_permit");
    Route::delete('/delete_monitoring/{id}', [UniverseController::class, 'delete_monitoring'])->name("delete_monitoring");
    Route::delete('/delete_legal/{id}', [UniverseController::class, 'delete_legal'])->name("delete_legal");
    Route::delete('/delete_hazwaste/{id}', [UniverseController::class, 'delete_hazwaste'])->name("delete_hazwaste");
    Route::delete('/delete_pco/{id}', [UniverseController::class, 'delete_pco'])->name("delete_pco");
    Route::delete('/delete_complaint/{id}', [UniverseController::class, 'delete_complaint'])->name("delete_complaint");
    //Testing Route
    Route::get('/testing_route', [TestingController::class, 'testing_route'])->name("testing_route");
    Route::get('/universe/export/', [UniverseController::class, 'export']);

    //SOLID WASTE ROUTE
    Route::group([
        'prefix' => "/swm",
    ], function () {
        // LCE
        Route::get('/lce_list', [SolidwasteLCEController::class, 'lce_list'])->name("lce_list");
        Route::get('/lce_register', [SolidwasteLCEController::class, 'create'])->name("lce_register_form");
        Route::get('/lce_show/{id}', [SolidwasteLCEController::class, 'lce_show'])->name("lce_show");
        Route::get('/lce_edit/{id}', [SolidwasteLCEController::class, 'lce_edit'])->name("lce_edit");
        Route::post('/lce_register_process', [SolidwasteLCEController::class, 'lce_register_process'])->name("lce_register_process");
        Route::post('/lce_update_process', [SolidwasteLCEController::class, 'lce_update_process'])->name("lce_update_process");
        Route::delete('/lce_delete/{id}', [SolidwasteLCEController::class, 'lce_delete'])->name("lce_delete");
        // SLF
        Route::get('/slf_register/{id}', [SolidwasteSLFController::class, 'create'])->name("slf_register_form");
        Route::get('/slf_edit/{id}', [SolidwasteSLFController::class, 'slf_edit'])->name("slf_edit");
        Route::post('/slf_register_process', [SolidwasteSLFController::class, 'slf_register_process'])->name("slf_register_process");
        Route::post('/slf_update_process', [SolidwasteSLFController::class, 'slf_update_process'])->name("slf_update_process");
        Route::delete('/slf_delete/{id}', [SolidwasteSLFController::class, 'slf_delete'])->name("slf_delete");
        // MRF
        Route::get('/mrf_register/{id}', [SolidwasteMRFController::class, 'create'])->name("mrf_register_form");
        Route::get('/mrf_edit/{id}', [SolidwasteMRFController::class, 'mrf_edit'])->name("mrf_edit");
        Route::post('/mrf_register_process', [SolidwasteMRFController::class, 'mrf_register_process'])->name("mrf_register_process");
        Route::post('/mrf_update_process', [SolidwasteMRFController::class, 'mrf_update_process'])->name("mrf_update_process");
        Route::delete('/mrf_delete/{id}', [SolidwasteMRFController::class, 'mrf_delete'])->name("mrf_delete");
        // CLOSED DUMPSITE
        Route::get('/cd_register/{id}', [SolidwasteClosedDumpsiteController::class, 'create'])->name("cd_register_form");
        Route::get('/cd_edit/{id}', [SolidwasteClosedDumpsiteController::class, 'cd_edit'])->name("cd_edit");
        Route::post('/cd_register_process', [SolidwasteClosedDumpsiteController::class, 'cd_register_process'])->name("cd_register_process");
        Route::post('/cd_update_process', [SolidwasteClosedDumpsiteController::class, 'cd_update_process'])->name("cd_update_process");
        Route::delete('/cd_delete/{id}', [SolidwasteClosedDumpsiteController::class, 'cd_delete'])->name("cd_delete");
        // TEN YEAR
        Route::get('/ten_year_register/{id}', [SolidwasteTenYearController::class, 'create'])->name("ten_year_register_form");
        Route::get('/ten_year_edit/{id}', [SolidwasteTenYearController::class, 'ten_year_edit'])->name("ten_year_edit");
        Route::post('/ten_year_register_process', [SolidwasteTenYearController::class, 'ten_year_register_process'])->name("ten_year_register_process");
        Route::post('/ten_year_update_process', [SolidwasteTenYearController::class, 'ten_year_update_process'])->name("ten_year_update_process");
        Route::delete('/ten_year_delete/{id}', [SolidwasteTenYearController::class, 'ten_year_delete'])->name("ten_year_delete");
        Route::delete('/ten_year_remove_fIle/{media}', [SolidwasteTenYearController::class, 'removeFIle'])->name("removeFIle");
        // TEN YEAR MONITORING
        Route::get('/ten_year_monitoring_register/{id}', [SolidwasteTenYearMonitoringController::class, 'create'])->name("ten_year_monitoring_register_form");
        Route::get('/ten_year_monitoring_edit/{id}', [SolidwasteTenYearMonitoringController::class, 'ten_year_monitoring_edit'])->name("ten_year_monitoring_edit");
        Route::post('/ten_year_monitoring_register_process', [SolidwasteTenYearMonitoringController::class, 'ten_year_monitoring_register_process'])->name("ten_year_monitoring_register_process");
        Route::post('/ten_year_monitoring_update_process', [SolidwasteTenYearMonitoringController::class, 'ten_year_monitoring_update_process'])->name("ten_year_monitoring_update_process");
        Route::delete('/ten_year_monitoring_delete/{id}', [SolidwasteTenYearMonitoringController::class, 'ten_year_monitoring_delete'])->name("ten_year_monitoring_delete");
        // EQUIPMENTS
        Route::get('/equipment_register/{id}', [SolidwasteEquipmentsController::class, 'create'])->name("equipment_register_form");
        Route::get('/equipment_edit/{id}', [SolidwasteEquipmentsController::class, 'equipment_edit'])->name("equipment_edit");
        Route::post('/equipment_register_process', [SolidwasteEquipmentsController::class, 'equipment_register_process'])->name("equipment_register_process");
        Route::post('/equipment_update_process', [SolidwasteEquipmentsController::class, 'equipment_update_process'])->name("equipment_update_process");
        Route::delete('/equipment_delete/{id}', [SolidwasteEquipmentsController::class, 'equipment_delete'])->name("equipment_delete");
        // DUES
        Route::get('/dues_register/{id}', [SolidwasteDuesController::class, 'create'])->name("dues_register_form");
        Route::get('/dues_edit/{id}', [SolidwasteDuesController::class, 'dues_edit'])->name("dues_edit");
        Route::post('/dues_register_process', [SolidwasteDuesController::class, 'dues_register_process'])->name("dues_register_process");
        Route::post('/dues_update_process', [SolidwasteDuesController::class, 'dues_update_process'])->name("dues_update_process");
        Route::delete('/dues_delete/{id}', [SolidwasteDuesController::class, 'dues_delete'])->name("dues_delete");
        // IEC
        Route::get('/iec_register/{id}', [SolidwasteIECController::class, 'create'])->name("iec_register_form");
        Route::get('/iec_edit/{id}', [SolidwasteIECController::class, 'iec_edit'])->name("iec_edit");
        Route::post('/iec_register_process', [SolidwasteIECController::class, 'iec_register_process'])->name("iec_register_process");
        Route::post('/iec_update_process', [SolidwasteIECController::class, 'iec_update_process'])->name("iec_update_process");
        Route::delete('/iec_delete/{id}', [SolidwasteIECController::class, 'iec_delete'])->name("iec_delete");
        // SECTION 24
        Route::get('/section24_register/{id}', [SolidwasteSection24Controller::class, 'create'])->name("section24_register_form");
        Route::get('/section24_edit/{id}', [SolidwasteSection24Controller::class, 'section24_edit'])->name("section24_edit");
        Route::post('/section24_register_process', [SolidwasteSection24Controller::class, 'section24_register_process'])->name("section24_register_process");
        Route::post('/section24_update_process', [SolidwasteSection24Controller::class, 'section24_update_process'])->name("section24_update_process");
        Route::delete('/section24_delete/{id}', [SolidwasteSection24Controller::class, 'section24_delete'])->name("section24_delete");
        // GAD
        Route::get('/gad_register/{id}', [SolidwasteGadController::class, 'create'])->name("gad_register_form");
        Route::get('/gad_edit/{id}', [SolidwasteGadController::class, 'edit'])->name("gad_edit");
        Route::post('/gad_register_process', [SolidwasteGadController::class, 'register'])->name("gad_register_process");
        Route::post('/gad_update_process', [SolidwasteGadController::class, 'update'])->name("gad_update_process");
        Route::delete('/gad_delete/{id}', [SolidwasteGadController::class, 'delete'])->name("gad_delete");
        // SOLIDWASTE EXPORTS
        Route::get('/lce_export', [SolidwasteExport::class, 'lce_export']);
        Route::get('/mrf_export', [SolidwasteExport::class, 'mrf_export']);
        Route::get('/rca_export', [SolidwasteExport::class, 'rca_export']);
        Route::get('/slf_export', [SolidwasteExport::class, 'slf_export']);
        Route::get('/equipments_export', [SolidwasteExport::class, 'equipments_export']);
        Route::get('/dues_export', [SolidwasteExport::class, 'dues_export']);
        Route::get('/closed_dumpsite_export', [SolidwasteExport::class, 'closed_dumpsite_export']);
        Route::get('/ten_year_export', [SolidwasteExport::class, 'ten_year_export']);
    });

    //USER ACCESS ROUTE
    Route::group([
        'prefix' => "/users_access",
    ], function () {
        // ACCESS ROLE
        Route::get('/users_access_role_list', [UsersAccessRoleController::class, 'list'])->name("users_access_role_list");
        Route::get('/users_access_role_register/{id}', [UsersAccessRoleController::class, 'create'])->name("users_access_role_register");
        Route::get('/users_access_role_edit/{id}', [UsersAccessRoleController::class, 'edit'])->name("users_access_role_edit");
        Route::post('/users_access_role_register_process', [UsersAccessRoleController::class, 'register'])->name("users_access_role_register_process");
        Route::post('/users_access_role_update_process', [UsersAccessRoleController::class, 'update'])->name("users_access_role_update_process");
        Route::delete('/users_access_role_delete/{id}', [UsersAccessRoleController::class, 'delete'])->name("users_access_role_delete");
        // ACCESS TEMPLATE
        Route::get('/users_access_template_list', [UsersAccessTemplateController::class, 'list'])->name("users_access_template_list");
        Route::get('/users_access_template_register', [UsersAccessTemplateController::class, 'create'])->name("users_access_template_register");
        Route::get('/users_access_template_edit/{id}', [UsersAccessTemplateController::class, 'edit'])->name("users_access_template_edit");
        Route::post('/users_access_template_register_process', [UsersAccessTemplateController::class, 'register'])->name("users_access_template_register_process");
        Route::post('/users_access_template_update_process', [UsersAccessTemplateController::class, 'update'])->name("users_access_template_update_process");
        Route::delete('/users_access_template_delete/{id}', [UsersAccessTemplateController::class, 'delete'])->name("users_access_template_delete");
        // ACCESS
        Route::get('/users_access_list', [UsersAccessController::class, 'list'])->name("users_access_list");
        Route::get('/users_access_register/{id}', [UsersAccessController::class, 'create'])->name("users_access_register");
        Route::get('/users_access_edit/{id}', [UsersAccessController::class, 'edit'])->name("users_access_edit");
        Route::post('/users_access_register_process', [UsersAccessController::class, 'register'])->name("users_access_register_process");
        Route::post('/users_access_update_process', [UsersAccessController::class, 'update'])->name("users_access_update_process");
        Route::delete('/users_access_delete/{id}', [UsersAccessController::class, 'delete'])->name("users_access_delete");
    });

    Route::delete('/delete_attachements/{media}', RemoveAttachementController::class)->name("slf_delete_attachements");



    // PCIC ALLAN ROUTES
    Route::group([
        'prefix' => "/psic",
    ], function () {
        Route::get('/group', [PsicGroupController::class, 'index'])->name("psic.group");
        Route::post('/group', [PsicGroupController::class, 'store'])->name("psic.group.store");
        Route::patch('/group/{psicGroup}', [PsicGroupController::class, 'update'])->name("psic.group.update");
        Route::delete('/group/{psicGroup}', [PsicGroupController::class, 'destroy'])->name("psic.group.delete");

        Route::get('/class', [PsicClassController::class, 'index'])->name("psic.class");
        Route::post('/class', [PsicClassController::class, 'store'])->name("psic.class.store");
        Route::patch('/class/{psicClass}', [PsicClassController::class, 'update'])->name("psic.class.update");
        Route::delete('/class/{psicClass}', [PsicClassController::class, 'destroy'])->name("psic.class.delete");

        Route::get('/sub-class', [PSICSubClassController::class, 'index'])->name("psic.class");
        Route::post('/sub-class', [PSICSubClassController::class, 'store'])->name("psic.class.store");
        Route::patch('/sub-class/{psicSubClass}', [PSICSubClassController::class, 'update'])->name("psic.class.update");
        Route::delete('/sub-class/{psicSubClass}', [PSICSubClassController::class, 'destroy'])->name("psic.class.delete");
    });
    Route::group([
        'prefix' => "/project",
    ], function () {
        Route::get('/type', [ProjectTypeController::class, 'index'])->name("project.type.class");
        Route::post('/type', [ProjectTypeController::class, 'store'])->name("project.type.store");
        Route::patch('/type/{projectType}', [ProjectTypeController::class, 'update'])->name("project.type.update");
        Route::delete('/type/{projectType}', [ProjectTypeController::class, 'destroy'])->name("project.type.delete");

        Route::get('/subtype', [ProjectSubTypeController::class, 'index'])->name("project.subtype.class");
        Route::post('/subtype', [ProjectSubTypeController::class, 'store'])->name("project.subtype.store");
        Route::patch('/subtype/{projectSubType}', [ProjectSubTypeController::class, 'update'])->name("project.subtype.update");
        Route::delete('/subtype/{projectSubType}', [ProjectSubTypeController::class, 'destroy'])->name("project.subtype.delete");

        Route::get('/specifictype', [ProjectSpecificTypeController::class, 'index'])->name("project.specifictype.class");
        Route::post('/specifictype', [ProjectSpecificTypeController::class, 'store'])->name("project.specifictype.store");
        Route::patch('/specifictype/{projectSpecificType}', [ProjectSpecificTypeController::class, 'update'])->name("project.specifictype.update");
        Route::delete('/specifictype/{projectSpecificType}', [ProjectSpecificTypeController::class, 'destroy'])->name("project.specifictype.delete");

        Route::get('/specificsubtype', [ProjectSpecificSubTypeController::class, 'index'])->name("project.specifictype.class");
        Route::post('/specificsubtype', [ProjectSpecificSubTypeController::class, 'store'])->name("project.specifictype.store");
        Route::patch('/specificsubtype/{projectSpecificSubType}', [ProjectSpecificSubTypeController::class, 'update'])->name("project.specifictype.update");
        Route::delete('/specificsubtype/{projectSpecificSubType}', [ProjectSpecificSubTypeController::class, 'destroy'])->name("project.specifictype.delete");
    });
});
