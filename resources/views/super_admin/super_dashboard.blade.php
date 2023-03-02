@extends('layouts.master')
@section('title','blog dashboard')
@section('content')
<div class="container-fluid px-4">
                        <h1 class="mt-4">SuperDashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">

                        <div class="col-xl-3 col-md-6">
                                <div class="card bg-gray text-dark mb-4">
                                    <div class="card-body">total categories<h4>{{$categories}}</h4></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-dark stretched-link" href="{{url('super_admin/category')}}">View Details</a>
                                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-gray text-dark mb-4">
                                    <div class="card-body">total posts<h4>{{$posts}}</h4></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-dark stretched-link" href="{{url('super_admin/posts')}}">View Details</a>
                                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-gray text-dark mb-4">
                                    <div class="card-body">total authors<h4>{{$authors}}</h4></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-dark stretched-link text-decoration-none" href="{{url('super_admin/users')}}">View Details</a>
                                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-gray text-dark mb-4">
                                    <div class="card-body">total admins <h4>{{$admins}}</h4></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-dark stretched-link" href="{{url('super_admin/users')}}">View Details</a>
                                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>



                            </div>

                        </div>

@endsection