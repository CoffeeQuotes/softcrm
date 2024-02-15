<?php

use App\Http\Controllers\Admin\Activity\ActivityController;
use App\Http\Controllers\Admin\Deal\DealController;
use App\Http\Controllers\Admin\Deal\LostReasonController;
use App\Http\Controllers\Admin\Deal\PipelineController;
use App\Http\Controllers\Admin\Deal\PipelineStageController;
use App\Http\Controllers\Admin\Expense\ExpenseAreaController;
use App\Http\Controllers\Admin\Expense\ExpenseController;
use App\Http\Controllers\Admin\Invoice\InvoiceController;
use App\Http\Controllers\Admin\Lead\LeadGroupController;
use App\Http\Controllers\Admin\Lead\OrganizationController;
use App\Http\Controllers\Admin\Lead\PeopleController;
use App\Http\Controllers\Admin\Proposal\ProposalController;
use App\Http\Controllers\Admin\Proposal\TemplateController;
use App\Http\Controllers\Admin\Report\DealReportController;
use App\Http\Controllers\Admin\Report\PipelineReportController;
use App\Http\Controllers\Admin\Report\ProposalReportController;
use App\Http\Controllers\Admin\Role\PermissionController;
use App\Http\Controllers\Admin\Role\RoleController;
use App\Http\Controllers\Admin\Setting\BroadcastSetupController;
use App\Http\Controllers\Admin\Setting\CustomFieldController;
use App\Http\Controllers\Admin\Setting\EmailSetupController;
use App\Http\Controllers\Admin\Setting\GeneralSettingController;
use App\Http\Controllers\Admin\Setting\InvoiceSettingController;
use App\Http\Controllers\Admin\Setting\NotificationController;
use App\Http\Controllers\Admin\Setting\PersonWebFormController;
use App\Http\Controllers\Admin\Setting\TagController;
use App\Http\Controllers\Admin\Setting\TaxController;
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

Route::get('/', function () {
    return view('welcome');
});
/** *
 * Leads
 *  - People
 *  - Organization
 *  - Lead Group
 *
 * Deals
 * Invoices
 * Proposals
 * Activities
 * Expenses
 * Reports
 * User and Roles
 * Settings
 * */

Route::prefix('admin')->group(function () {
    /**
     * Lead
     *  People
     *  Organization
     *  Lead Group
     *
     * */
    Route::resource('people', PeopleController::class);
    Route::resource('organizations', OrganizationController::class);
    Route::resource('lead-groups', LeadGroupController::class);

    /**
     * Deals
     *  Deals
     *  Pipelines
     *  Pipeline Stages
     *  Lost Reason
     */
    Route::resource('deals', DealController::class);
    Route::resource('pipelines', PipelineController::class);
    Route::resource('pipeline-stages', PipelineStageController::class);
    Route::resource('lost-reasons', LostReasonController::class);

    /**
     * Invoices
     */
    Route::resource('invoices', InvoiceController::class);
    /**
     * Proposals
     *  Proposals
     *  Templates
     */
    Route::resource('proposals', ProposalController::class);
    Route::resource('templates', TemplateController::class);

    /**
     * Acitivity 
     */
    Route::resource('activities', ActivityController::class);

    /**
     * Expenses
     *  Expenses
     *  Area of Expenses 
     */

    Route::resource('expenses', ExpenseController::class);
    Route::resource('expense-areas', ExpenseAreaController::class);

    /**
     * Reports     
     *   Deal Report 
     *   Pipeline Report 
     *   Proposal Report 
     */
    Route::resource('deal-report', DealReportController::class);
    Route::resource('pipeline-report', PipelineReportController::class);
    Route::resource('proposal-report', ProposalReportController::class);

    /**
     * Role
     *  roles
     *  permissions
     */
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);

    /**
     * Settings 
     *  BroadCastSetup
     *  CustomFields
     *  EmailSetup
     *  GeneralSetting 
     *  InvoiceSetting
     *  Notification
     *  PersonWebForm
     *  Tag
     *  Tax
     */
    Route::resource('broadcast-setup', BroadcastSetupController::class);
    Route::resource('custom-field', CustomFieldController::class);
    Route::resource('email-setup', EmailSetupController::class);
    Route::resource('general-setting', GeneralSettingController::class);
    Route::resource('invoice-setting', InvoiceSettingController::class);
    Route::resource('notification', NotificationController::class);
    Route::resource('person-web-form', PersonWebFormController::class);
    Route::resource('tag', TagController::class);
    Route::resource('tax', TaxController::class);
});
