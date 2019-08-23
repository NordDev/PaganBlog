@extends('blog.admin.layout')

@section('content')
    <section class="content">
        <!-- Default box -->
        <div class="box">
    <div class="container">
        {{--@include('blog.admin.posts.includes.result_messages')--}}

        <form method="POST" action="#">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @include('blog.admin.includes.item_edit_main_col')
                    </div>
                    {{--<div class="col-md-3">--}}
                        {{--@include('blog.admin.includes.item_edit_add_col')--}}
                    {{--</div>--}}
                </div>
            </div>
    </div>
        </div>
    </section>
@endsection