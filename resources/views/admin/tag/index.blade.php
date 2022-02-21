@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Taqların siyahısı</h1>
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
        <div class="card-body">
            <table class="table table-bordered table-hover">
            <thead>
                <tr>
                <th scope="col">Taq adı</th>
                <th scope="col">Slug</th>
                <th scope="col">Əməliyyatlar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tags as $tag)
                <tr>
                <td> {{ $tag->name }} </td>
                <td> {{ $tag->slug }} </td>
                <td>
                    <a href=" {{route('admin.tag.edit', ['id' => $tag->id])}} " class="btn btn-outline-primary btn-sm"><i class="fas fa-pencil"></i></a> &nbsp;
                    <a href=" {{route('admin.tag.destroy', ['id' => $tag->id])}} " onclick="return confirm('Silmək istədiyinizdən əminsiniz?')" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                </td>
                </tr>
                <tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>

    {{ $tags->links() }}
    
</div>
@endsection