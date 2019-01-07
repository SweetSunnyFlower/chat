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

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TINYMCE
                                <small>Taken from <a href="https://www.tinymce.com" target="_blank">www.tinymce.com</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <textarea id="tinymce">

                            </textarea>
                        </div>
                    </div>
                </div>
            </div>

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
