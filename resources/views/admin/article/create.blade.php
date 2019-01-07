@extends('layouts.admin')
@section('title','发布文章')
@section('content')
    <style>
        .mce-window {
            transform: initial !important;
        }
    </style>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>发布文章</h2>
            </div>
            <form action="{{route('article.store')}}" method="POST">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="title" required>
                                    <label class="form-label">标题</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="radio" checked="checked" name="is_publish" id="publish" value="true" class="with-gap">
                                <label for="publish">发布</label>

                                <input type="radio" name="is_publish" id="no_publish" value="false" class="with-gap">
                                <label for="no_publish" class="m-l-20">不发布</label>
                            </div>

                            @csrf
                            <div class="form-group">
                            <textarea id="tinymce" name="contents">

                            </textarea>
                            </div>
                            <button class="btn btn-primary waves-effect" type="submit">发布</button>
                        </div>
                    </div>
                </div>
            </div>

            </form>
        </div>
    </section>
@endsection
@section('js')
    <!-- TinyMCE -->
    <script src="{{asset('plugins/jquery-form/jquery.form.js')}}"></script>
    <script src="{{asset('plugins/tinymce/tinymce.js')}}"></script>
    <script>
        $(function(){
            //TinyMCE
            tinymce.init({
                selector: "textarea#tinymce",
                theme: "modern",
                height: 300,
                language:"zh_CN",
                plugins: [
                    'link imageupload codesample',
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                convert_urls: false,
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | imageupload codesample',
                toolbar2: 'print preview media | forecolor backcolor emoticons',
                image_advtab: true,
                imageupload_url: '/admin/upload'
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{asset('plugins/tinymce')}}';
        });
    </script>
@endsection
