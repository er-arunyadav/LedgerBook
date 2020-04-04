<div class="page-sidebar">
                <div class="page-sidebar-inner">
                    <div class="page-sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="{{asset('/storage/admin/'.Auth::user()->image)}}">
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
                                <li><a href="{{route('user.profile')}}" class="waves-effect waves-grey"><i class="material-icons">inbox</i>Profile</a></li>

                                <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>  

                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-accordion-menu">
                            <ul class="sidebar-menu list-unstyled">
                                <li>
                                    <a href="{{route('home')}}" class="waves-effect waves-grey active">
                                        <i class="material-icons">settings_input_svideo</i>Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="waves-effect waves-grey">
                                        <i class="material-icons">apps</i>Customer<i class="material-icons sub-arrow">keyboard_arrow_right</i>
                                    </a>
                                    <ul class="accordion-submenu list-unstyled">
                                        <li><a href="{{route('customer')}}">View customer</a></li>
                                        <li><a href="{{route('customer.create')}}">Add customer</a></li>
                                        
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{route('ledger')}}" class="waves-effect waves-grey">
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