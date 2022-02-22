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
                <form action=" {{route('admin.category.store')}} " method="post" class="mb-3">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Bölmə adı</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="emailHelp">
                        @error('name')
                            <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-outline-success">Əlavə et</button>
                </form>
            </div>
        </div>
        
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection