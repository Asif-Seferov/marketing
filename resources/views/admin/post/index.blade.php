@extends('admin.layouts.main')

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
        @if(session('success'))
            <div class="alert alert-success"> {{ session('success') }} </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger"> {{ session('error') }} </div>
        @enderror
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Şəkil</th>
                        <th scope="col">Post adı</th>
                        <th scope="col">Bölmə</th>
                        <th scope="col">Teqlər</th>
                        <th scope="col">Əməliyyatlar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                            <td><img class="img-thumbnail" width="100" height="100" src="{{ $post->getImage($post->img) }}" alt="post image"></td>
                            <td> {{ $post->name }} </td>
                            <td> {{ $post->getCatName($post->category_id) }} </td>
                            <td> {{ $post->tags->pluck('name')->join(',') }} </td>
                            <td>
                                <a href=" {{ route('admin.post.edit', ['id' => $post->id]) }} " class="btn btn-outline-primary btn-sm"><i class="fas fa-pencil"></i></a> &nbsp;
                                <a href=" {{ route('admin.post.destroy', ['id' => $post->id]) }} " onclick="return confirm('silmek istediyinizden eminsiniz?')" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
          
              
                {{ $posts->links() }}
            </div>
           
        </div>
       

    </div>
@endsection