@extends('admin.layouts.main')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="content-wrapper">
           <!-- Content Header (Page header) -->
           <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Postlarin siyahısı</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Postların siyahısı</li>
                    <li class="breadcrumb-item"><a href=" {{route('admin.post.create')}} ">Post əlavə et</a></li>
                    </ol>
                </div>
                </div>
            </div><!-- /.container-fluid -->
            </section>

            <div class="col-md-12">
            @if(session('success'))
                <div class="alert alert-success"> {{ session('success') }} </div>
            @endif
        <form action=" {{route('admin.post.update', ['id' => $post->id])}} " method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <img class="img-thumbnail" width="100" height="100" src=" {{ $post->getImage($post->img) }} " alt="post image">
            </div>
        <div class="mb-3">
            <label for="name" class="form-label">Post adı</label>
            <input type="text" autofocus name="name" value=" {{ $post->name }} " class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Qısa açıqlama</label>
            <input type="text" name="desc" value=" {{ $post->desc }} " class="form-control" id="desc" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Tam mətn</label>
            <textarea name="content" id="content" class="form-control" rows="10"> {{$post->content}} </textarea>
        </div>
        <div class="mb-3">
            <label for="categoryId" class="form-label">Bölmə</label>
            <select name="category_id" id="categoryId" class="custom-select">
                @foreach($categories as $key => $value)
                <option @if($key == $post->category_id) selected @endif value=" {{ $key }} "> {{ $value }} </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tagId" class="form-label">Taq</label>
            <select name="tags[]" id="tagId" class="custom-select select2" multiple="multiple">
                @foreach($tags as $key => $value)
                <option @if(in_array($key, $post->tags->pluck('id')->all())) selected @endif value=" {{ $key }} "> {{ $value }} </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Şəkil seç</label>
            <input type="file" name="img" class="form-control pb-4" id="image" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-outline-success mb-3">Göndər</button>
        </form>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection