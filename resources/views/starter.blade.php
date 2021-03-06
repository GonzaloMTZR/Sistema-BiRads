@extends('layouts.master')
@section('main-content')
    <div class="breadcrumb">
        <h1>Dashboard</h1>
        <ul>
            <li><a href="">Dashboard</a></li>
            <li></li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center">
                    <i class="i-Add-User"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Total Pacientes</p>
                        <p class="text-primary text-24 line-height-1 mb-2">{{$countPacientes}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
