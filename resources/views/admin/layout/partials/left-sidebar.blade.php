        <div id="left-sidebar" class="sidebar ">
            <h5 class="brand-name">{{ env('APP_NAME') }} <a href="javascript:void(0)" class="menu_option float-right"><i
                        class="icon-grid font-16" data-toggle="tooltip" data-placement="left"
                        title="Grid & List Toggle"></i></a></h5>
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul class="metismenu">
                    <li class="g_heading">Project</li>
                    <li class="{{ $pageTitle == 'Dashboard' ? 'active' : '' }}"><a
                            href="{{ route('admin.dashboard') }}"><i
                                class="fa fa-dashboard"></i><span>Dashboard</span></a>
                    </li>
                    <li
                        class="{{ $pageTitle == 'People' || $pageTitle == 'Organizations' || $pageTitle == 'Lead Groups' ? 'active' : '' }}">
                        <a href="javascript:void(0)" class="has-arrow arrow-c"><i
                                class="fa fa-users"></i><span>Leads</span></a>
                        <ul>
                            <li><a href="{{ route('people.index') }}">People</a></li>
                            <li><a href="{{ route('organizations.index') }}">Organizations</a></li>
                            <li><a href="{{ route('lead-groups.index') }}">Lead Groups</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="has-arrow arrow-c"><i
                                class="fa fa-laptop"></i><span>Deals</span></a>
                        <ul>
                            <li><a href="{{ route('pipelines.index') }}">Pipeline View</a></li>
                            <li><a href="{{ route('deals.index') }}">All Deals</a></li>
                            <li><a href="{{ route('pipelines.index') }}">Pipeline</a></li>
                            <li><a href="{{ route('lost-reasons.index') }}">Lost Reason</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('invoices.index') }}"><i
                                class="fa fa-file-text"></i><span>Invoices</span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="has-arrow arrow-c"><i
                                class="fa fa-bolt"></i><span>Proposals</span></a>
                        <ul>
                            <li><a href="{{ route('proposals.index') }}">Proposal List</a></li>
                            <li><a href="{{ route('templates.index') }}">Templates</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="has-arrow arrow-c"><i
                                class="fa fa-tasks"></i><span>Activities</span></a>
                        <ul>
                            <li><a href="{{ route('activities.index') }}">Calendar View</a></li>
                            <li><a href="{{ route('activities.index') }}">Activity List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="has-arrow arrow-c"><i
                                class="fa fa-money"></i><span>Expenses</span></a>
                        <ul>
                            <li><a href="{{ route('expenses.index') }}">Expenses List</a></li>
                            <li><a href="{{ route('expense-areas.index') }}">Area of Expense</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="has-arrow arrow-c"><i
                                class="fa fa-rocket"></i><span>Report</span></a>
                        <ul>
                            <li><a href="{{ route('deal-report.index') }}">Deal</a></li>
                            <li><a href="{{ route('proposal-report.index') }}">Proposal</a></li>
                            <li><a href="{{ route('pipeline-report.index') }}">Pipeline</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('roles.index') }}"><i class="fa fa-briefcase"></i><span>Roles</span></a>
                    </li>
                    <li><a href="{{ route('permissions.index') }}"><i
                                class="fa fa-shield"></i><span>Permissions</span></a>
                    </li>
                    <li><a href="{{ route('roles.index') }}"><i class="fa fa-cogs"></i><span>Settings</span></a>
                    </li>
                </ul>
            </nav>
        </div>
