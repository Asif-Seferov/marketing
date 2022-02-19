@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    @if(session('success'))
        <div class="alert alert-success"> {{ session('success') }} </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-4">
                <form action=" {{route('admin.category.update', ['id' => $category->id])}} " method="post" class="mb-3">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Bölmə adı</label>
                        <input type="text" name="name" value=" {{ $category->name }} " class="form-control" id="name" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-outline-success">Düzəliş et</button>
                </form>
            </div>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection