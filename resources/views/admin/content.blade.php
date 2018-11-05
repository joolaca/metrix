@extends('admin.layouts.admin_layout')
@section('content')

    <div class="portlet light">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-green bold uppercase">Index oldal szerkesztése</span>
            </div>

        </div>

    </div>
//tinymce

    <div class="row">
        <div class="col-md-6">

            <img src="{{ URL::asset('/images/index/intro-bg.jpg') }}"
                 data-img-path="{{ '/images/index/intro-bg.jpg' }}"
                 data-ajax-href="/admin/show_crop_image_modal"
                 data-crop-width = "1463"
                 data-crop-height = "762"

                 class="crop_image img-thumbnail"
                 title="Szerkesztés">
        </div>

        <div class="col-md-6">

            <form action="/admin/upload_image"  enctype="multipart/form-data" method="post">
                <input type="file" name="image">
                <button type="submit" class="btn btn-lg green" >Új kép feltöltése <i class="fa fa-plus"></i></button>
                <input type="hidden" name="image_name" value="intro-bg.jpg">
                <input type="hidden" name="path" value="images/index/">
                <input type='hidden' name='_token' value='{{csrf_token()}}'>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </form>

            <a class="crop_image   btn btn-lg grey-cascade"
               data-img-path="{{ '/images/index/intro-bg.jpg' }}"
               data-ajax-href="/admin/show_crop_image_modal"
               data-crop-width = "1463"
               data-crop-height = "762"
            >
                Kép szerkesztése
                <i class="fa fa-link"></i>
            </a>

        </div>
    </div>
@endsection
