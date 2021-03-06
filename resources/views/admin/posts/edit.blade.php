@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{$title}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{config('app.url_admin')}}">{{__('Trang chủ')}}</a>
                            </li>
                            <li class="breadcrumb-item active">{{$title}}</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">{{$title}} {!! __('<span class="text-muted">(Vui lòng điền các trường có chứa dấu <span class="text-danger">*</span>)</span>') !!}</h3>
                        <div class="card-tools">
                            <div class="btn-group mr-5">
                                <a href="{{route('admin.posts.index')}}"
                                   class="btn  btn-flat btn-default" title="List"><i class="fa fa-list"></i><span
                                        class="hidden-xs"> Trở lại danh sách</span></a>
                            </div>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('admin.posts.update',$post->slug) }}" method="post" enctype="multipart/form-data">
                            @method('PATCH')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">{{__('Tổng quan')}}</h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                        title="Collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="name"
                                                       class="col-sm-2 col-form-label">{{__('Name')}} <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-pencil-alt"></i></span>
                                                        </div>
                                                        <input type="text" id="name" name="name"
                                                               value="{{old('name') ?? $post->name}}"
                                                               class="form-control"
                                                               placeholder="3 hình thức chiếu sáng mới trong nội thất năm 2021" required/>
                                                    </div>
                                                    <span class="form-text">
                                                        <i class="fa fa-info-circle"></i> Tối đa 200 kí tự
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="meta_title"
                                                       class="col-sm-2 col-form-label">{{__('Tiêu đề')}}</span></label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-pencil-alt"></i></span>
                                                        </div>
                                                        <input type="text" id="meta_title"
                                                               name="meta_title"
                                                               value="{{old('meta_title') ?? $post->meta_title}}"
                                                               class="form-control"
                                                               placeholder="3 hình thức chiếu sáng mới trong nội thất năm 2021"/>
                                                    </div>
                                                    <span class="form-text">
                                                        <i class="fa fa-info-circle"></i> Tối đa 100 kí tự
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="summernote"
                                                       class="col-sm-2 col-form-label">{{__('Mô tả')}}</label>
                                                <div class="col-sm-10">
                                                    <textarea id="summernote" class="summernote"
                                                              name="description">{{old('description') ?? $post->description}}</textarea>
                                                    <span class="form-text">
                                                        <i class="fa fa-info-circle"></i> Tối đa 300 kí tự
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="content"
                                                       class="col-sm-2 col-form-label">{{__('Nội dung')}}<span
                                                        class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <textarea id="content" class="summernote"
                                                              name="content">{{old('content') ?? $post->content}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputStatus"
                                                       class="col-sm-2 col-form-label">{{__('Danh mục bài viết')}} <span
                                                        class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <select id="inputStatus" name="category_id"
                                                            class="form-control select2"
                                                            style="width: 100%" required>
                                                        <option value="">Trống</option>
                                                        @foreach($categories as $cate_parent)
                                                            <option
                                                                value="{{$cate_parent->id}}" {{ $post->category_id === $cate_parent->id ? "selected" :""}}>{{$cate_parent->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-secondary">
                                        <div class="card-header">
                                            <h3 class="card-title">{{__('Customize')}}</h3>
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                        title="Collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="slug" class="col-sm-2 col-form-label">{{__('Đường dẫn')}}
                                                    <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-pencil-alt"></i></span>
                                                        </div>
                                                        <input type="text" id="slug" class="form-control"
                                                               value="{{old('slug') ?? $post->slug}}" name="slug"
                                                               placeholder="3-hinh-thuc-chieu-sang-moi-trong-noi-that-nam-2021" required/>
                                                    </div>
                                                    <span class="form-text">
                                                        <i class="fa fa-info-circle"></i> Tối đa 120 kí tự
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="keyword"
                                                       class="col-sm-2 col-form-label">{{__('Từ khóa')}}</label>

                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <input type="text" id="keyword"
                                                               name="keyword"
                                                               value="{{old('keyword')}}"
                                                               class="form-control" placeholder=""/>
                                                    </div>
                                                    <span class="form-text">
                                                        <i class="fa fa-info-circle"></i> Tối đa 200 kí tự, phân cách nhau bởi dấu ","
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox2"
                                                       name="active" value="1" {{$post->active === 1 ? 'checked="': ""}}/>
                                                <label for="customCheckbox2" class="custom-control-label">Hoạt
                                                    động</label>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Files</h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                        title="Collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="slug">{{__('Hình thu nhỏ')}}</label>
                                                <img class="card-img-right flex-auto d-none d-md-block" src="{{asset($post->image)}}"
                                                     alt="Thumbnail [200x250]" style="width: 200px;"
                                                     data-holder-rendered="true">
                                                <div class="custom-file mt-2">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile"
                                                           accept="image/*" name="image">
                                                    <label class="custom-file-label"
                                                           for="exampleInputFile">{{__('Choose File')}}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <button type="submit"
                                                class="btn btn-success d-block w-100">{{__('Edit')}}</button>
                                    </div>
                                </div>
                            </div>
                            @csrf
                        </form>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('stylesheets')
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('manage/plugins/summernote/summernote-bs4.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('manage/plugins/select2/css/select2.min.css')}}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('manage/plugins/sweetalert2/sweetalert2.min.css') }}">
@endpush

@push('scripts')
    <!-- Summernote -->
    <script src="{{asset('manage/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- File input -->
    <script src="{{asset('manage/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <!-- Select2 -->
    <script rel="stylesheet" src="{{asset('manage/plugins/select2/js/select2.full.min.js')}}"></script>
    <!-- Repeater button -->
    <script rel="stylesheet" src="{{asset('manage/plugins/jquery.repeater/jquery.repeater.js')}}"></script>
    <!-- SweetAlert2 -->
    <script src="{{ asset('manage/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- Edit page -->
    <script src="{{asset('manage/dist/js/pages/edit-form.js')}}"></script>
@endpush
