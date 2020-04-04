@extends('layouts.app')
@section('content')


                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page-title">Dashboard</h2>
                            <a href="{{route('customer')}}" class="btn btn-text-secondary float-right">Customer</a>
                            <a href="{{route('ledger')}}" class="btn btn-text-danger float-right m-r-sm">Ledger</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="card info-card">
                                        <div class="card-body">
                                            <h5 class="card-title">Credit</h5>
                                            <div class="info-card-text">
                                                <h3>792.8 $</h3>
                                                <span class="info-card-helper">This Month</span>
                                            </div>
                                            <div class="info-card-icon">
                                                <i class="material-icons">attach_money</i>
                                            </div>
                                        </div>
                                        <div id="sparkline-bar"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="card info-card info-info">
                                        <div class="card-body">
                                            <h5 class="card-title">Debit</h5>
                                            <div class="info-card-text">
                                                <h3>460.9 K</h3>
                                                <span class="info-card-helper">This Month</span>
                                            </div>
                                            <div class="info-card-icon">
                                                <i class="material-icons-outlined">attach_money</i>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="card info-card info-warning">
                                        <div class="card-body">
                                            <h5 class="card-title">Customer</h5>
                                            <div class="info-card-text">
                                                <h3>570.4 K</h3>
                                                <span class="info-card-helper">This Week</span>
                                            </div>
                                            <div class="info-card-icon">
                                                <i class="material-icons">trending_up</i>
                                            </div>
                                        </div>
                                        <div id="sparkline-line"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="card info-card info-success">
                                        <div class="card-body">
                                            <h5 class="card-title">Profit</h5>
                                            <div class="info-card-text">
                                                <h3>142,739</h3>
                                                <span class="info-card-helper">This Month</span>
                                            </div>
                                            <div class="info-card-icon">
                                                <i class="material-icons">attach_money</i>
                                            </div>
                                        </div>
                                        <div id="sparkline-bar-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>

                  
                    
                </div>

@endsection