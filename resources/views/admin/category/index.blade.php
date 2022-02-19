@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bölmələrin siyahısı</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=" {{route('admin.index')}} ">Panel</a></li>
              <li class="breadcrumb-item active">Bölmələrin siyahısı</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Bölmə adı</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Əməliyyat</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($categories as $category)
                  <tr>
                    <td> {{ $category->name }} </td>
                    <td> {{ $category->slug }} </td>
                    <td>
                        <a href=" {{ route('admin.category.edit', ['id' => $category->id]) }} " class="btn btn-outline-primary btn-sm"><i class="fas fa-pencil"></i></a> &nbsp;
                        <a href=" {{ route('admin.category.destroy', ['id' => $category->id]) }} " onclick="return confirm('Silmək istədiyinizdən əminsiniz?')" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            {{$categories->links()}}
        </div>
        <!-- /.card-body -->
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