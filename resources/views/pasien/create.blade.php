@extends('layouts.app')
@section('title','Pendaftaran Pasien Baru')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Formulir Pendaftaran Pasien
        <small>Pendaftaran Pasien Baru</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-body">
                  {!! Form::open(['route'=>'pasien.store', 'files' => true]) !!}
                  @include('pasien.form')
                  {!! Form::close() !!}
              </div>
            </div>
          </div>
        </div>
      </section>
  </div>
@endsection
