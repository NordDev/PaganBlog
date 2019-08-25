@extends('blog.admin.layout')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Создать статью
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="{{ route('admin.blog.posts.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <!-- Default box -->
                <div class="box">
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название</label>
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="exampleInputEmail1" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Картинка: </label><br>
                                <input type="file" name="img" id="exampleInputFile">

                                <p class="help-block">Поддерживаемые файлы: jpg, png</p>
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<label>Категория</label>--}}
                                {{--<select class="form-control select2" name="category" style="width: 100%;">--}}
                                        {{--<option></option>--}}
                                {{--</select>--}}
                            {{--</div>--}}

                            <!-- Date -->

                            <!-- checkbox -->
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="minimal" name="is_published">
                                </label>
                                <label>
                                    Запостить
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Текст статьи</label>
                                <textarea name="content" id="" cols="30" rows="10" class="form-control">{{ old('content') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{ route('admin.blog.posts.index') }}" class="btn btn-default">Назад</a>
                        <button type="submit" class="btn btn-success pull-right">Добавить</button>
                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box -->
            </form>
        </section>
        <!-- /.content -->
@endsection