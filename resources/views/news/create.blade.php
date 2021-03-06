@extends('layouts.master')

@section('resource')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/news.css">
    <link rel="stylesheet" type="text/css" href="../release/wangEditor.min.css">
@stop

@section('content')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5> 创建新的新闻 </h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('news.store') }}" method="post">
                    @include('shared._errors')
                    {{ csrf_field() }}
                    <input type="text" class="form-control" name="title" id="title" placeholder="在这里输入标题">
                    <input type="text" class="hidden" id="content" name="content" value="空">
                    <div id="editor" name="content">
                        <p>在这里输入新闻内容……</p>
                    </div>
                    <script type="text/javascript" src="../release/jquery-3.3.1.min.js"></script>
                    <script type="text/javascript" src="../release/wangEditor.min.js"></script>
                    
                    <button type="submit" id="submit" class="btn btn-primary center-block">提交</button>
                    <script type="text/javascript">
                        $(function () {

                            var editor = new wangEditor('#editor');

                            console.log(editor)

                            editor.customConfig.uploadImgServer= '../api/photo';

                            editor.customConfig.uploadImgMaxSize = 3 * 1024 * 1024;

                            editor.customConfig.uploadImgMaxLength = 30;

                            editor.customConfig.uploadFileName = 'photo';

                            editor.customConfig.uploadImgHeaders = {
                                 'Accept': 'text/x-json'
                            }

                            console.log(editor.customConfig)

                            editor.customConfig.onchange = function(html){
                                $("#content").val(html) ;
                                console.log($("#content").val());
                            };
                            editor.create();
                            
                        });
                    </script>
                </form>
            </div>
        </div>
    </div>
@endsection