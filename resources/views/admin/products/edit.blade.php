@extends('home-admin')
@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Users</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">
                                        <i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{route('product.index')}}">Users</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="#" class="btn btn-sm btn-neutral">New</a>
                        <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<<<<<<< HEAD
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h2 class="mb-0">Pet Add New</h2>
                    </div>
                    <div class="card-body">
                        {{session('update-error')}}
                        <form method="post" action="{{route('product.update', $product->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="small mb-1">Product Code</label>
                                <input class="form-control py-4"
                                       name="product_code" type="text"
                                       value="{{ $product->product_code }}"/>
=======
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h2 class="mb-0">Pet Add New</h2>
                </div>
                <div class="card-body">
                    {{session('update-error')}}
                    <form method="post" action="{{route('product.update', $product->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="small mb-1">Product Code</label>
                            <input class="form-control py-4"
                                   name="product_code" type="text"
                                   placeholder="{{ $product->product_code }}"/>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Origination</label>
                            <input class="form-control py-4"
                                   name="origination" id="inputEmailAddress" type="text"
                                   aria-describedby="emailHelp"
                                   placeholder="{{ $product->origination }}" />
                        </div>
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputPassword">Fur Color</label>
                                    <input class="form-control py-4"
                                           name="fur_color" id="inputPassword" type="text"
                                           placeholder="{{ $product->fur_color }}" />
                                </div>
>>>>>>> 442c4fa4575abdfa47545ed7979a27340e19317e
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Origination</label>
                                <input class="form-control py-4"
                                       name="origination" id="inputEmailAddress" type="text"
                                       aria-describedby="emailHelp"
                                       value="{{ $product->origination }}"/>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Fur Color</label>
                                        <input class="form-control py-4"
                                               name="fur_color" id="inputPassword" type="text"
                                               value="{{ $product->fur_color }}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputConfirmPassword">Weight</label>
                                        <input class="form-control py-4"
                                               name="weight" id="inputConfirmPassword" type="text"
                                               value="{{ $product->weight }}"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputConfirmPassword">Longevity</label>
                                        <input class="form-control py-4"
                                               name="longevity" id="inputConfirmPassword" type="text"
                                               value="{{ $product->longevity }}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1">Characteristics</label>
                                             <textarea  class="form-control py-4"
                                                        name="characteristics"
                                                        placeholder="{{ $product->characteristics }}"
                                                        disabled="disabled"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="small md-1">Avatar</label>
                                <input class="form-control py-4" type="file" name="image" value="{{ $product->image }}">
                            </div>
                            <hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Create</button>
                                <a href="{{route('product.index')}}" class="btn btn-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
