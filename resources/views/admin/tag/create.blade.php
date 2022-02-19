@extends('admin.layouts.main')

@section('content')
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
            <li class="breadcrumb-item active">Taq əlavə et</li>
              <li class="breadcrumb-item"><a href=" {{route('admin.tag.index')}} ">Taqların siyahısı</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
        @if(session('success'))
            <div class="alert alert-success"> {{ session('success') }} </div>
        @endif
        <div class="col-md-6 m-auto">
        <form action=" {{route('admin.tag.store')}} " method="post">
            @csrf
            <div class="mb-3">
                <label for="tag" class="form-label">Taq adı</label>
                <input type="text" name="name" class="form-control" id="tag" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-outline-success">Əlavə et</button>
        </form>
        </div>
    
</div>


@endsection