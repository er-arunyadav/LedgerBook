<div class="page-sidebar">
                <div class="page-sidebar-inner">
                    <div class="page-sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="{{asset('images/avatars/avatar1.png')}}">
                        </div>
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <p>{{Auth::user()->name}}</p>
                                <span>{{Auth::user()->email}}<i class="material-icons float-right">arrow_drop_down</i></span>
                            </a>
                        </div>
                    </div>
                    <div class="page-sidebar-menu">
                        <div class="page-sidebar-settings hidden">
                            <ul class="sidebar-menu list-unstyled">
                                <li><a href="#" class="waves-effect waves-grey"><i class="material-icons">inbox</i>Profile</a></li>

                                <li><a href="#" class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-accordion-menu">
                            <ul class="sidebar-menu list-unstyled">
                                <li>
                                    <a href="index.html" class="waves-effect waves-grey active">
                                        <i class="material-icons">settings_input_svideo</i>Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="waves-effect waves-grey">
                                        <i class="material-icons">apps</i>Customer<i class="material-icons sub-arrow">keyboard_arrow_right</i>
                                    </a>
                                    <ul class="accordion-submenu list-unstyled">
                                        <li><a href="app-mailbox.html">View customer</a></li>
                                        <li><a href="app-file-manager.html">Add customer</a></li>
                                        
                                    </ul>
                                </li>

                                <li>
                                    <a href="charts.html" class="waves-effect waves-grey">
                                        <i class="material-icons">trending_up</i>Ledger
                                    </a>
                                </li>

                           
                                <li>
                                    <a href="forms.html" class="waves-effect waves-grey">
                                        <i class="material-icons">mode_edit</i>Report
                                    </a>
                                </li>
                                

                              
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-footer">
                        <p class="copyright">LedgerBook © Arun Yadav</p>
                       
                    </div>
                </div>
            </div><!-- Left Sidebar -->