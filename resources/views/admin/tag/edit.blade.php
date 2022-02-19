@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        @if(session('success'))
            <div class="alert alert-success"> {{ session('success') }} </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger"> {{ session('error') }} </div>
        @endif
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Pace</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Taqı yenilə</li>
                <li class="breadcrumb-item"><a href=" {{route('admin.tag.index')}} ">Tagların siyahısı</a></li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>
        <div class="col-md-6">
            <h4 class="text-secondary">Taqı yenilə</h4>
            <form action=" {{route('admin.tag.update', ['id' => $tag->id])}} " method="post">
                @csrf
                <div class="mb-3">
                    <label for="tag" class="form-label">Taq adı</label>
                    <input type="text" value=" {{ $tag->name }} " name="name" class="form-control" id="tag" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-outline-success">Yenilə</button>
            </form>
        </div>
    </div>
@endsection