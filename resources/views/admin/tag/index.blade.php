@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pace</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Taqların siyahısı</li>
              <li class="breadcrumb-item"><a href=" {{route('admin.tag.create')}} ">Tag əlavə et</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if(session('success'))
        <div class="alert alert-success"> {{ session('success') }} </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h1>Taglarin siyahisi</h1>
        </div>
        <div class="card-body">
            Taqlar
        </div>
    </div>

</div>
@endsection