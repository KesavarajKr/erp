<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\CalandarController;
use App\Http\Controllers\CallupdateController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Monthwisefullreport;
use App\Http\Controllers\MonthwisereportController;
use App\Http\Controllers\PayslipController;
use App\Http\Controllers\WorkingDaysController;

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

Route::get('/', function () {
    return view('pages.login');
});

Route::view('dashboard','pages.dashboard');

Route::view('add_product','pages.add_products');
Route::view('calendar','pages.calendar');
Route::view('emp_id','pages.idcard');
// Route::view('user','pages.users');
Route::view('emp_report','pages.emp_report');
// Route::view('attendance','pages.attendance');
Route::view('month-wise-report','pages.month_wise_report');
Route::view('month-wise-full-report','pages.month_wise_full_report');
Route::view('salary-generation','pages.salary_generation');
Route::view('salary-report','pages.salary-report');
// Route::view('pay-slip','pages.pay-slip');
Route::view('estimate','pages.estimate');
Route::view('create-estimate','pages.create_estimate');
Route::view('invoice','pages.invoice');
Route::view('create-invoice','pages.create_invoice');
Route::view('customer-credit','pages.customer-credit');
Route::view('invoice-details','pages.invoice-details');
Route::view('vendor','pages.vendor');
Route::view('create-vendor','pages.create-vendor');
Route::view('purchase','pages.purchase');
Route::view('create-purchase','pages.create-purchase');
Route::view('expense','pages.expense');
Route::view('create-expense','pages.create-expense');
Route::view('addCustomer','pages.add_customer');
Route::view('purchase-order','pages.purchase_order');
Route::view('create-purchase-order','pages.create_purchase_order');
Route::view('leads','pages.leads');
Route::view('leadview','pages.leadview');

Route::resource('user',UserController::class);
Route::get('getuser',[UserController::class,'getuser']);
Route::post('authenticate',[LoginController::class,'authenticate']);

Route::post('authenticate',[LoginController::class,'authenticate']);
Route::get('logout',[LoginController::class,'logout']);

Route::resource('employees',employeeController::class);

Route::get('emp_report',[employeeController::class,'emp_report']);
Route::get('restore_employees',[employeeController::class,'restore_employees']);
Route::get('restore/{empid}',[employeeController::class,'restore']);

Route::get('id_card',[employeeController::class,'id_card']);

Route::GET('getemp/{empid}',[employeeController::class,'getemp']);

Route::GET('getidcard/{empid}',[employeeController::class,'getidcard']);

Route::GET('deleteemp/{empid}',[employeeController::class,'deleteemp']);

Route::resource('company',CompanyController::class);

Route::POST('savecompany',[CompanyController::class,'savecompany']);

Route::resource('bankdetails',BankController::class);

Route::POST('savebank',[BankController::class,'savebank']);

Route::GET('empedit/{empid}',[employeeController::class,'empedit']);

Route::POST('updateemployee',[employeeController::class,'updateemployee']);

Route::resource('leads',LeadController::class);

Route::POST('savelead',[LeadController::class,'savelead']);
Route::POST('saveFollowup',[LeadController::class,'saveFollowup']);
Route::POST('leadstatus',[LeadController::class,'leadstatus']);
Route::POST('updatelead',[LeadController::class,'updatelead']);

Route::GET('deletelead/{leadid}',[LeadController::class,'deletelead']);
Route::GET('viewlead/{leadid}',[LeadController::class,'viewlead']);
Route::GET('leadedit/{leadid}',[LeadController::class,'leadedit']);

Route::POST('/getFilteration',[LeadController::class,'getFilteration']);

Route::POST('/getDateFilteration',[LeadController::class,'getDateFilteration']);

Route::POST('/sendMail',[LeadController::class,'sendMail']);

Route::resource('callupdate',CallupdateController::class);

Route::POST('/getcallupdate',[CallupdateController::class,'getcallupdate']);
Route::POST('/getfilternotes',[CallupdateController::class,'getfilternotes']);

Route::resource('attendance',AttendanceController::class);

Route::POST('/getAttendance',[AttendanceController::class,'getAttendance']);

Route::POST('/getAttendanceFirst',[AttendanceController::class,'getAttendanceFirst']);

Route::POST('/getAttendanceSecond',[AttendanceController::class,'getAttendanceSecond']);
Route::POST('/getAttendanceTotal',[AttendanceController::class,'getAttendanceTotal']);
Route::POST('/getfilterattendance',[AttendanceController::class,'getfilterattendance']);

Route::GET('/importattendance',[AttendanceController::class,'importattendance']);

Route::resource('workingdays',WorkingDaysController::class);

Route::POST('/saveworkingdays',[WorkingDaysController::class,'saveworkingdays']);

Route::resource('month-wise-report',MonthwisereportController::class);
Route::resource('month-wise-full-report',Monthwisefullreport::class);
Route::POST('/monthwisereport',[MonthwisereportController::class,'monthwisereport']);
Route::POST('/monthwisefullreportfilter',[Monthwisefullreport::class,'monthwisefullreportfilter']);

Route::POST('/salarygenerate',[AttendanceController::class,'salarygenerate']);

Route::POST('/salarygenerateemployee',[AttendanceController::class,'salarygenerateemployee']);

Route::POST('/customsalarygenerateemployee',[AttendanceController::class,'customsalarygenerateemployee']);

Route::POST('/salaryReportgeneration',[AttendanceController::class,'salaryReportgeneration']);
Route::POST('/customsalaryReportgeneration',[AttendanceController::class,'customsalaryReportgeneration']);

Route::resource('payslip',PayslipController::class);

Route::POST('/generatepayslip',[PayslipController::class,'generatepayslip']);
Route::POST('/updatesalarydetails',[AttendanceController::class,'updatesalarydetails']);

Route::resource('designation',DesignationController::class);
Route::POST('/savedesignation',[DesignationController::class,'savedesignation']);
Route::GET('/deletedesignation/{desig}',[DesignationController::class,'deletedesignation']);
Route::POST('/getpfdata',[DesignationController::class,'getpfdata']);
Route::POST('/attendanceentry',[AttendanceController::class,'attendanceentry']);

Route::resource('calendar',CalandarController::class);
Route::POST('/createCalandar',[CalandarController::class,'createCalandar']);
Route::POST('/leavechange',[CalandarController::class,'leavechange']);

Route::POST('/leadassign',[LeadController::class,'leadassign']);

Route::POST('/customsalarygenerate',[AttendanceController::class,'customsalarygenerate']);

Route::POST('/getnotification',[Controller::class,'getnotification']);
