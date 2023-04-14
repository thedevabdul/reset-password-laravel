<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LabesController;
use App\Http\Controllers\MadicenesController;
use App\Http\Controllers\MDCNesController;
use App\Http\Controllers\LabListController;
use App\Http\Controllers\WalkingTestMdcnController;
use App\Http\Controllers\{ProcedureController,DoctoresController,RoomesController,PatReferedByController,ADMISIONESController,OPDesController,ReportingController,ExpensesController};


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

Route::get('/',[LoginController::class,'index']);

Route::post('/',[LoginController::class,'create']);
Route::get('/create_account',[LoginController::class,'created']);
Route::get('dataTable',[LoginController::class,'dataTable']);
Route::get('BasiecForm',[LoginController::class,'BasiecForm']);

//lab route

Route::group(['middleware'=>['login_auth']],function(){
Route::get('dashboard',[LoginController::class,'show']);
Route::get('add/Lab',[LabesController::class,'index']);
Route::post('add/Lab',[LabesController::class,'store']);
Route::get('Labes/show',[LabesController::class,'show']);
Route::get('Edit/Lab/{id}',[LabesController::class,'edit']);
Route::get('Delete/Lab/{id}',[LabesController::class,'destroy']);
Route::post('update/Lab/{id}',[LabesController::class,'update']);
//Madicenes route
Route::get('Madicenes',[MadicenesController::class,'index']);
Route::get('Madicenes/show',[MadicenesController::class,'show']);
Route::get('Madicenes/edit/{id}',[MadicenesController::class,'edit']);
Route::get('Madicenes/delete/{id}',[MadicenesController::class,'destroy']);
Route::post('Madicenes',[MadicenesController::class,'store']);
Route::post('Madicenes/{id}',[MadicenesController::class,'update']);
//mdcnes Rotue
Route::get('mdcn',[MDCNesController::class,'index']);
Route::get('mdcn/manage',[MDCNesController::class,'show']);
Route::get('mdcn/edit/{id}',[MDCNesController::class,'edit']);
Route::get('mdcn/delete/{id}',[MDCNesController::class,'destroy']);
Route::post('mdcn/update/{id}',[MDCNesController::class,'update']);
Route::post('mdcn',[MDCNesController::class,'store']);
// LabListController Route
Route::get('LabList',[LabListController::class,'index']);
Route::get('LabList/delete/{id}',[LabListController::class,'destroy']);
Route::get('LabList/edit/{id}',[LabListController::class,'edit']);
Route::post('LabList',[LabListController::class,'store']);
Route::post('LabList/update/{id}',[LabListController::class,'update']);
Route::get('LabList/manage',[LabListController::class,'show']);
//test-mdcn/manage
Route::get('test-mdcn',[WalkingTestMdcnController::class,'index']);
Route::get('test-mdcn/manage',[WalkingTestMdcnController::class,'show']);
Route::get('test-mdcn/delete/{id}',[WalkingTestMdcnController::class,'destroy']);
Route::get('test-mdcn/edit/{id}',[WalkingTestMdcnController::class,'edit']);
Route::post('test-mdcn/update/{id}',[WalkingTestMdcnController::class,'update']);
Route::post('test-mdcn',[WalkingTestMdcnController::class,'store']);
Route::get('/mdcn-dropdown',[WalkingTestMdcnController::class,'lab_dropdown']);
Route::get('/mdcn-dropdown1',[WalkingTestMdcnController::class,'lab_dropdown1']);
Route::get('/dr-dropdown',[WalkingTestMdcnController::class,'drdropdown']);
Route::get('/madcn-dropdown',[WalkingTestMdcnController::class,'madcn_dropdown']);
Route::get('/madcn-dropdown1',[WalkingTestMdcnController::class,'madcn_dropdown1']);
Route::get('/test-Bill/manage',[WalkingTestMdcnController::class,'test_Bill']);
Route::get('/test-Bill/create',[WalkingTestMdcnController::class,'test_Bill_create']);
Route::get('/test-Bill/edit/{id}',[WalkingTestMdcnController::class,'test_Bill_edit']);
Route::get('/test-Bill/delete/{id}',[WalkingTestMdcnController::class,'test_Bill_delete']);
Route::post('/test-Bill/update/{id}',[WalkingTestMdcnController::class,'test_Bill_update']);
Route::get('test-Bill_print/{id?}',[WalkingTestMdcnController::class,'test_Bill_print']);
Route::get('/test-Bill/print/{id}',[WalkingTestMdcnController::class,'print']);
Route::get('/mdcn-Bill_print/{id?}',[WalkingTestMdcnController::class,'mdcn_Bill_print']);
Route::get('/mdcn-Bill/print/{id}',[WalkingTestMdcnController::class,'print_mdcn']);
Route::get('/mdcn-Bill/create',[WalkingTestMdcnController::class,'mdcn_Bill_create']);
Route::get('/mdcn-Bill/edit/{id}',[WalkingTestMdcnController::class,'mdcn_Bill_edit']);
Route::get('/mdcn-Bill/delete/{id}',[WalkingTestMdcnController::class,'mdcn_Bill_delete']);
Route::post('/mdcn-Bill/update/{id}',[WalkingTestMdcnController::class,'mdcn_Bill_update']);
Route::get('/mdcn-Bill/manage',[WalkingTestMdcnController::class,'mdcn_Bill']);
Route::post('/test-Bill/manage',[WalkingTestMdcnController::class,'test_Bill_submit']);
Route::post('/mdcn-Bill/manage',[WalkingTestMdcnController::class,'mdcn_Bill_submit']);
//Doctores
Route::get('Doctores',[DoctoresController::class,'index']);
Route::get('/doctor-dropdown',[DoctoresController::class,'create']);
Route::get('Doctores/manage',[DoctoresController::class,'show']);
Route::get('Doctores/edit/{id}',[DoctoresController::class,'edit']);
Route::get('Doctores/delete/{id}',[DoctoresController::class,'destroy']);
Route::post('Doctores',[DoctoresController::class,'store']);
Route::post('Doctores/update/{id}',[DoctoresController::class,'update']);
//RoomesController
Route::post('Roomes/update/{id}',[RoomesController::class,'update']);
Route::post('Roomes',[RoomesController::class,'store']);
Route::get('Roomes',[RoomesController::class,'index']);
Route::get('Roomes/manage',[RoomesController::class,'show']);
Route::get('Roomes/edit/{id}',[RoomesController::class,'edit']);
Route::get('Roomes/delete/{id}',[RoomesController::class,'destroy']);
// PatReferedByController
Route::get('PatRefered/delete/{id}',[PatReferedByController::class,'destroy']);
Route::get('PatRefered/edit/{id}',[PatReferedByController::class,'edit']);
Route::post('PatRefered/update/{id}',[PatReferedByController::class,'update']);
Route::get('PatRefered/manage',[PatReferedByController::class,'show']);
Route::get('PatRefered',[PatReferedByController::class,'index']);
Route::post('PatRefered',[PatReferedByController::class,'store']);
//ADMISIONESController
Route::get('ADMISIONES/delete/{id}',[ADMISIONESController::class,'destroy']);
Route::get('ADMISIONES/edit/{id}',[ADMISIONESController::class,'edit']);
Route::get('ADMISIONES/print/{id}',[ADMISIONESController::class,'print']);
Route::get('ADMISIONES/prin/bill/{id}/{type}',[ADMISIONESController::class,'print_bill']);
Route::get('ADMISIONES/manage',[ADMISIONESController::class,'show']);
Route::get('ADMISIONES',[ADMISIONESController::class,'index']);
Route::get('/ADMISIONES-Bill_print',[ADMISIONESController::class,'create']);
Route::post('ADMISIONES',[ADMISIONESController::class,'store']);
Route::post('ADMISIONES/update/{id}',[ADMISIONESController::class,'update']);
//OPDesController
Route::post('OPD',[OPDesController::class,'store']);
Route::get('OPD_Bill_print',[OPDesController::class,'create']);
Route::get('/OPD-Bill/print/{id}',[OPDesController::class,'print_OPD']);
Route::get('OPD',[OPDesController::class,'index']);
Route::get('OPD/manage',[OPDesController::class,'show']);
Route::get('OPD/edit/{id}',[OPDesController::class,'edit']);
Route::get('OPD/print/{id}',[OPDesController::class,'print']);
Route::get('OPD/delete/{id}',[OPDesController::class,'destroy']);
Route::post('OPD/update/{id}',[OPDesController::class,'update']);
//ReportingController
Route::get('reporting',[ReportingController::class,'index']);
Route::get('report',[ReportingController::class,'create']);
Route::post('reporting',[ReportingController::class,'store']);
//MDCNReporting
Route::get('reporting/MDCN',[ReportingController::class,'view_MDCN']);
Route::get('report/MDCN',[ReportingController::class,'report_MDCN']);
Route::post('reporting/MDCN',[ReportingController::class,'reporting_MDCN']);
//test-reporting
Route::get('test-reporting',[ReportingController::class,'show']);
Route::get('test-report',[ReportingController::class,'edit']);
Route::post('test-reporting',[ReportingController::class,'update']);
//Dr-wise-opd
Route::get('Dr-wise-opd',[ReportingController::class,'destroy']);
Route::get('Dr-wise-opd-report',[ReportingController::class,'Drwiseopd']);
Route::post('Dr-wise-opd',[ReportingController::class,'DrwiseopdPrint']);
//REFERED
Route::get('REFERED-admission',[ReportingController::class,'REFEREDAdmission']);
Route::get('REFERED-admission-report',[ReportingController::class,'REFEREDAdmission_report']);
Route::post('REFERED-admission',[ReportingController::class,'REFERED_admission']);
//Mdcn-by-dr-refered
Route::get('Mdcn-by-dr-refered',[ReportingController::class,'MdcnByDr']);
Route::get('Mdcn-by-dr-refered-report',[ReportingController::class,'MdcnByDr_report']);
Route::post('Mdcn-by-dr-refered',[ReportingController::class,'MdcnByDr_print']);
//OPD/reporting
Route::get('OPD/reporting',[ReportingController::class,'OPD_reportByDrRefferd']);
Route::get('OPD/reporting-report',[ReportingController::class,'OPD_reportByDrRefferd_report']);
Route::post('OPD/reporting',[ReportingController::class,'OPD_reportByDrRefferd_print']);
//expenses
Route::get('expenses',[ExpensesController::class,'index']);


Route::post('expenses',[ExpensesController::class,'store']);
Route::get('expenses/manage',[ExpensesController::class,'show']);
Route::get('expenses/edit/{id}',[ExpensesController::class,'edit']);
Route::post('expenses/update/{id}',[ExpensesController::class,'update']);
Route::get('expenses/delete/{id}',[ExpensesController::class,'destroy']);
Route::get('expenses/report',[ExpensesController::class,'report']);
Route::get('reporttotal',[ExpensesController::class,'reportTotal']);
Route::post('expenses/report-print',[ExpensesController::class,'print']);
//procedure/manage
Route::post('procedure/update/{id}',[ProcedureController::class,'update']);
Route::get('procedure/manage',[ProcedureController::class,'show']);
Route::post('procedure',[ProcedureController::class,'store']);
Route::get('procedure',[ProcedureController::class,'index']);
Route::get('procedure/edit/{id}',[ProcedureController::class,'edit']);
Route::get('procedure/delete/{id}',[ProcedureController::class,'destroy']);



Route::get('dailyreport',[ADMISIONESController::class,'reportDaily']);
Route::post('dailyreport2',[ADMISIONESController::class,'reportDaily2']);

Route::get('passwordReception',function()
{
    return view('receptionPassword');
});

Route::post('passwordUpdate',[ADMISIONESController::class,'passwordUpdate']);


Route::get('/reset-password/{token}', [LoginController::class, 'resetPasswordForm']);

Route::post('/newforgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
});
});






Route::get('forgot',function()
{
    return view('reset');
});



Route::post('/reset-password-submit',[LoginController::class,'reset_pass_submit'])->name('reset-password-submit'); 

Route::get('/reset-password/{token?}',[LoginController::class,'showResetPasswordForm'])->name('reset.password.get');

Route::post('/reset-pass',[LoginController::class,'submitResetPasswordForm'])->name('reset.password.post');









