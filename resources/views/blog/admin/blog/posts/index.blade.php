@extends('blog.admin.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Blank page
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Листинг сущности</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                    <a href="{{ route('admin.blog.posts.create') }}" class="btn btn-success">Добавить</a>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Категория</th>
                        <th>Просмотры</th>
                        <th>Опубликовано</th>
                        <th>Картинка</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>id</td>
                            <td>Название</td>
                            <td>Категория</td>
                            <td>Просмотры</td>
                            <td>Опубликовано</td>
                            <td>Картинка</td>
                            <td>
                                <a href="#" class="fa fa-pencil"></a>
                                    <button onclick="return confirm('Вы точно хотите удалить?')" type="submit" class="delete">
                                        <i class="fa fa-remove"></i>
                                    </button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
@endsection