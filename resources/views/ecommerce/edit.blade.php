@extends('layouts.app')
@section('title', 'Edit Article')
@section('content')
<link rel="stylesheet" href="{{ asset('blog/css/editBlog.css') }}">
<div class="slab container col-sm-12">
    <article>
        <div class="mt-5 row">
            <h1 class="col-lg text-center mb-1">
                {{ $product->title ?? ''}}
            </h1>
        </div>
        <div class="row">
            <div class="col-12 text-center">
            <blockquote style="color: grey;" class="blockquote">{{ $product->quip ?? '' }}</blockquote>
            </div>
        </div>
        <div class="row">
            <div class="col-md text-center">
            <img class="img-responsive" src="{{ $product->image_name ?? '' }}" alt="article image" width="80%;" max-height="75%">
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="margin-left: 10%;">
            <p style="color: black;" class="col-sm"> {!! $product->imageCredit1 !!} </p>
            </div>
        </div>

        @if ($product->heading1)
            <div class="row">
            <div class="col-md mt-5 mb-1 text-center">
                <h2> {{ $product->heading1 }} </h2>
            </div>
            </div>
            @if($product->image1_name)
            <div class="row">
                <div class="col-md text-center mt-2">
                <img class="img-responsive" src="{{$product->image1_name ?? ''}}" alt="article image" width="80%;" max-height="75%">
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="margin-left: 10%;">
                <p> {!! $product->imageCredit !!} </p>
                </div>
            </div>
            @endif

            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-1"> {!! $product->paragraph1Heading1 !!} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $product->paragraph2Heading1 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-5"> {{ $product->paragraph3Heading1 }} </p>
            </div>
            </div>
        @endif

        @if(!is_null($product->heading2))
            <div class="row">
                <div class="col-md mt-3 text-center">
                    <h2> {{ $product->heading2 }} </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md text-center mt-2">
                  <img class="img-responsive" src="{{$product->image2_name ?? ''}}" alt="article image" width="80%;" max-height="75%">
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="margin-left: 10%;">
                <p> {!! $product->imageCredit2 !!} </p>
                </div>
            </div>
        @endif
            <div class="row ">
                <div class="col-md text-left">
                    <p class="mt-1 ml-5 mr-5 mb-1"> {{ $product->paragraph1Heading2 }} </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md text-left">
                    <p class="mt-1 ml-5 mr-5 mb-1"> {{ $product->paragraph2Heading2 }} </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md text-left">
                    <p class="mt-1 ml-5 mr-5 mb-5"> {{ $product->paragraph3Heading2 }} </p>
                </div>
            </div>
        @if($product->heading3)
            <div class="row">
            <div class="col-md text-center">
                <h2> {{ $product->heading3 }} </h2>
            </div>
            </div>
            @if($product->image3_name)
            <div class="row">
                <div class="col-md text-center mt-2">
                    <img class="img-responsive" src="{{ $product->image3_name }}" alt="article image" width="80%;" max-height="75%">
                </div>
                </div>
                <div class="row">
                <div class="col-12 mt-1" style="margin-left: 10%;">
                    <p class="mt-1"> {!! $product->imageCredit3 !!} </p>
                </div>
                </div>
            @endif
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $product->paragraph1Heading3 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $product->paragraph2Heading3 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-5"> {{ $product->paragraph3Heading3 }} </p>
            </div>
            </div>
        @endif
        @if($product->heading4)
            <div class="row">
            <div class="col-md text-center">
                <h2> {{ $product->heading4 }} </h2>
            </div>
            </div>
            @if($product->image4_name)
            <div class="row">
                <div class="col-md text-center mt-2">
                <img class="img-responsive" src="{{ $product->image4_name ?? '' }}" alt="article image" width="80%;" max-height="75%;">
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-1" style="margin-left: 10%;">
                <p> {!! $product->imageCredit4 !!} </p>
                </div>
            </div>
            @endif
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $product->paragraph1Heading4 }}</p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $product->paragraph2Heading4 }}</p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-5"> {{ $product->paragraph3Heading4 }}</p>
            </div>
            </div>
        @endif
        @if($product->heading5)
            <div class="row">
            <div class="col-md mb-3 text-center">
                <h2> {{ $product->heading5 }} </h2>
            </div>
            </div>
            @if($product->image5_name)
            <div class="row">
                <div class="col-md text-center mt-2">
                <img class="img-responsive" src="{{ $product->image5_name ?? '' }}" alt="article image" width="80%;" max-height="75%">
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-1" style="margin-left: 10%;">
                <p class="mt-1"> {!! $product->imageCredit5 !!} </p>
                </div>
            </div>
            @endif
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $product->paragraph1Heading5 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $product->paragraph2Heading5 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-5"> {{ $product->paragraph3Heading5 }} </p>
            </div>
            </div>
        @endif
        @if($product->heading6)
            <div class="row">
            <div class="col-md mb-3 text-center">
                <h2> {{ $product->heading6 }} </h2>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center mt-2">
                <img class="img-responsive" src="{{ $product->image6_name ?? '' }}" alt="article image" width="80%;" max-height="75%">
            </div>
            </div>
            <div class="row">
            <div class="col-12 mt-1" style="margin-left: 10%;">
                <p class="mt-1"> {!! $product->imageCredit6 !!} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $product->paragraph1Heading6 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $product->paragraph2Heading6 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-5"> {{ $product->paragraph3Heading6 }} </p>
            </div>
            </div>
        @endif
        @if($product->heading7)
            <div class="row">
            <div class="col-md mb-3 text-center">
                <h2> {{ $product->heading7 }} </h2>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center mt-2">
                <img class="img-responsive" src="{{ $product->image7_name ?? '' }}" alt="article image" width="80%;" max-height="75%">
            </div>
            </div>
            <div class="row">
            <div class="col-12 mt-1" style="margin-left: 10%;">
                <p class="mt-1"> {!! $product->imageCredit7 !!} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $product->paragraph1Heading7 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $product->paragraph2Heading7 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-5"> {{ $product->paragraph3Heading7 }} </p>
            </div>
            </div>
        @endif
        @if($product->heading8)
            <div class="row">
            <div class="col-md mb-3 text-center">
                <h2> {{ $product->heading8 }} </h2>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center mt-2">
                <img class="img-responsive" src="{{ $product->image8_name ?? '' }}" alt="article image" width="80%;" max-height="75%">
            </div>
            </div>
            <div class="row">
            <div class="col-12 mt-1" style="margin-left: 10%;">
                <p class="mt-1"> {!! $product->imageCredit8 !!} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $product->paragraph1Heading8 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $product->paragraph2Heading8 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-5"> {{ $product->paragraph3Heading8 }} </p>
            </div>
            </div>
        @endif
        @if($product->heading9)
            <div class="row">
            <div class="col-md mb-3 text-center">
                <h2> {{ $product->heading9 }} </h2>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center mt-2">
                <img class="img-responsive" src="{{ $product->image9_name ?? '' }}" alt="article image" width="80%;" max-height="75%">
            </div>
            </div>
            <div class="row">
            <div class="col-12 mt-1" style="margin-left: 10%;">
                <p class="mt-1"> {!! $product->imageCredit9 !!} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $product->paragraph1Heading9 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-2 ml-5 mr-5 mb-5"> {{ $product->paragraph2Heading9 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-5"> {{ $product->paragraph3Heading9 }} </p>
            </div>
            </div>
        @endif
        @if($product->heading10)
            <div class="row">
            <div class="col-md mb-3 text-center">
                <h2> {{ $product->heading10 }} </h2>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center mt-2">
                <img class="img-responsive" src="{{ $product->image10_name ?? '' }}" alt="article image" width="80%;" max-height="75%">
            </div>
            </div>
            <div class="row">
            <div class="col-12 mt-1" style="margin-left: 10%;">
                <p class="mt-1"> {!! $product->imageCredit10 !!} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $product->paragraph1Heading10 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $product->paragraph2Heading10 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-5"> {{ $product->paragraph3Heading10 }} </p>
            </div>
            </div>
        @endif
        </article>
    </div>

    <!-- above this is the current article -->
    <!-- beyond this line is the edit article form -->


    <hr>

        <div class="m-3 row">
        <h1 style="padding-bottom: 15px; color: red;" class="col-lg text-center">
            THIS IS YOUR CHANCE TO EDIT THE ARTICLE
        </h1>
        </div>
        <div class="row">
        <div class="col-12 text-center">
            <p style="color:#383838;">If the article is perfect, then feel free to leave this page, or scroll down and click <B>' Go Back '</B>
            </p>
        </div>
        </div>

        <!-- action="{{ route('update', $product->id) }}" -->

    <div class="container container-fluid">
        <div class="col-4">
            <form method="POST" action="{{ route('updateProduct', $product->id) }}">
                @csrf

                <div class="form-group">
                    <label for="type">Product Name</label>
                    <input type="text"
                            name="name"
                            class="form-control form-control-lg"
                            value="{{ old('name') ?? '' }}"
                    >
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="type">Product Type</label>
                    <input type="text"
                            name="type"
                            class="form-control form-control-lg"
                            value="{{ old('type') ?? 'see ex: below' }}"
                    >
                    @if (session('failure'))
                        <div class="alert alert-danger">
                            {{ session('failure') }}
                        </div>
                    @endif
                    <small id="typeHelp" class="form-text text-muted">
                        ex : General, Book
                        This field is determines where the product will be placed
                    </small>
                </div>
                <div class="form-group">
                    <label for="image">Product Image</label>
                    <input type="text"
                            name="image"
                            class="form-control form-control-lg"
                            value="{{ old('image') }}"
                    >
                    @if ($errors->has('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
                    <small id="imageHelp" class="form-text text-muted">
                    What should we share regarding this field?
                    </small>
                </div>

                <div class="form-group">
                    <label for="imageCredit1">Product Description</label>
                    <input type="text"
                            name="description"
                            class="form-control form-control-lg"
                            value="{{ old('description') }}"
                    >
                    @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                    <small id="imageHelp" class="form-text text-muted">What should we share regarding this field?</small>
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text"
                            name="price"
                            class="form-control form-control-lg"
                            value="{{ old('price') }}"
                    >
                    @if ($errors->has('price'))
                        <span class="text-danger">{{ $errors->first('price') }}</span>
                    @endif
                    <small id="titleHelp" class="form-text text-muted">This may appear in search engines.</small>
                </div>
                <div class="form-group">
                    <label for="price">Source Url</label>
                    <input type="text"
                            name="source"
                            class="form-control form-control-lg"
                            value="{{ old('source') }}"
                    >
                    @if ($errors->has('source'))
                        <span class="text-danger">{{ $errors->first('source') }}</span>
                    @endif
                    <small id="titleHelp" class="form-text text-muted">Where to find the product.</small>
                </div>
                <div class="form-group">
                    <label for="sale">Sale</label>
                    <select name="sale" id="sale">
                        <option value="true">true</option>
                        <option value="false">false</option>
                    </select>
                    @if ($errors->has('sale'))
                        <span class="text-danger">{{ $errors->first('sale') }}</span>
                    @endif
                    <small id="quipHelp" class="form-text text-muted">The product is on sale, true or false?.</small>
                </div>
                <div id='createOrReturn' class="row mt-5 text-center">
                    <div class="col-4">
                        <button id="createArticleButton"
                                class="btn btn-lg btn-success mt-3"
                                type="submit"
                                onclick="addFieldOnButtonClick(this.id)"
                                >
                                <!-- <a style="color:white;" href="{{ route('updateProduct', $product->id) }} "> -->
                                Make edit
                                <!-- </a> -->
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-4">
            <button id="backButton"
                    class="btn btn-lg btn-dark mt-3"
                    type="submit"
                    onclick="addFieldOnButtonClick(this.id)"
                    >
                <a style="color:white;" href="{{ url('editProducts') }} ">
                Edit Home Page
                </a>
            </button>
        </div>
        <div class="">
            <form action="{{ url('/shop/product/delete/.', $product->id) }}" method="POST" style="display: inline-block;">
                @csrf
                <button id="backButton"
                        class="btn btn-lg btn-dark mt-3"
                        type="submit"
                        onclick="addFieldOnButtonClick(this.id)"
                        >
                    <a style="color:white;" >
                    Delete Article
                    </a>
                </button>
            </form>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
            <p style="font-weight: bold;">{{ $messages['success'] ?? '' }}</p>
            </div>

            <div class="col-sm-3">
            <button id="return-btn" class="btn btn-dark"><a href="/babies">Go Back</a></button>
            </div>
        </div>
    </div>

    <script src="{{ asset('blog/js/edit.js') }}"
@endsection
