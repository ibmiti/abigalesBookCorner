@extends('layouts.app')
@section('title', 'Edit Article')
@section('content')
<link rel="stylesheet" href="{{ asset('blog/css/editBlog.css') }}">
<div class="slab container col-sm-12">
    <article>
        <div class="mt-5 row">
            <h1 class="col-lg text-center mb-1">
                {{ $blogPost->title ?? ''}}
            </h1>
        </div>
        <div class="row">
            <div class="col-12 text-center">
            <blockquote style="color: grey;" class="blockquote">{{ $blogPost->quip ?? '' }}</blockquote>
            </div>
        </div>
        <div class="row">
            <div class="col-md text-center">
            <img class="img-responsive" src="{{ $blogPost->image_name ?? '' }}" alt="article image" width="80%;" max-height="75%">
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="margin-left: 10%;">
            <p style="color: black;" class="col-sm"> {!! $blogPost->imageCredit1 !!} </p>
            </div>
        </div>

        @if ($blogPost->heading1)
            <div class="row">
            <div class="col-md mt-5 mb-1 text-center">
                <h2> {{ $blogPost->heading1 }} </h2>
            </div>
            </div>
            @if($blogPost->image1_name)
            <div class="row">
                <div class="col-md text-center mt-2">
                <img class="img-responsive" src="{{$blogPost->image1_name ?? ''}}" alt="article image" width="80%;" max-height="75%">
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="margin-left: 10%;">
                <p> {!! $blogPost->imageCredit !!} </p>
                </div>
            </div>
            @endif

            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-1"> {!! $blogPost->paragraph1Heading1 !!} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $blogPost->paragraph2Heading1 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-5"> {{ $blogPost->paragraph3Heading1 }} </p>
            </div>
            </div>
        @endif

        @if(!is_null($blogPost->heading2))
            <div class="row">
                <div class="col-md mt-3 text-center">
                    <h2> {{ $blogPost->heading2 }} </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md text-center mt-2">
                  <img class="img-responsive" src="{{$blogPost->image2_name ?? ''}}" alt="article image" width="80%;" max-height="75%">
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="margin-left: 10%;">
                <p> {!! $blogPost->imageCredit2 !!} </p>
                </div>
            </div>
        @endif
            <div class="row ">
                <div class="col-md text-left">
                    <p class="mt-1 ml-5 mr-5 mb-1"> {{ $blogPost->paragraph1Heading2 }} </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md text-left">
                    <p class="mt-1 ml-5 mr-5 mb-1"> {{ $blogPost->paragraph2Heading2 }} </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md text-left">
                    <p class="mt-1 ml-5 mr-5 mb-5"> {{ $blogPost->paragraph3Heading2 }} </p>
                </div>
            </div>
        @if($blogPost->heading3)
            <div class="row">
            <div class="col-md text-center">
                <h2> {{ $blogPost->heading3 }} </h2>
            </div>
            </div>
            @if($blogPost->image3_name)
            <div class="row">
                <div class="col-md text-center mt-2">
                    <img class="img-responsive" src="{{ $blogPost->image3_name }}" alt="article image" width="80%;" max-height="75%">
                </div>
                </div>
                <div class="row">
                <div class="col-12 mt-1" style="margin-left: 10%;">
                    <p class="mt-1"> {!! $blogPost->imageCredit3 !!} </p>
                </div>
                </div>
            @endif
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $blogPost->paragraph1Heading3 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $blogPost->paragraph2Heading3 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-5"> {{ $blogPost->paragraph3Heading3 }} </p>
            </div>
            </div>
        @endif
        @if($blogPost->heading4)
            <div class="row">
            <div class="col-md text-center">
                <h2> {{ $blogPost->heading4 }} </h2>
            </div>
            </div>
            @if($blogPost->image4_name)
            <div class="row">
                <div class="col-md text-center mt-2">
                <img class="img-responsive" src="{{ $blogPost->image4_name ?? '' }}" alt="article image" width="80%;" max-height="75%;">
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-1" style="margin-left: 10%;">
                <p> {!! $blogPost->imageCredit4 !!} </p>
                </div>
            </div>
            @endif
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $blogPost->paragraph1Heading4 }}</p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $blogPost->paragraph2Heading4 }}</p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-5"> {{ $blogPost->paragraph3Heading4 }}</p>
            </div>
            </div>
        @endif
        @if($blogPost->heading5)
            <div class="row">
            <div class="col-md mb-3 text-center">
                <h2> {{ $blogPost->heading5 }} </h2>
            </div>
            </div>
            @if($blogPost->image5_name)
            <div class="row">
                <div class="col-md text-center mt-2">
                <img class="img-responsive" src="{{ $blogPost->image5_name ?? '' }}" alt="article image" width="80%;" max-height="75%">
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-1" style="margin-left: 10%;">
                <p class="mt-1"> {!! $blogPost->imageCredit5 !!} </p>
                </div>
            </div>
            @endif
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $blogPost->paragraph1Heading5 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $blogPost->paragraph2Heading5 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-5"> {{ $blogPost->paragraph3Heading5 }} </p>
            </div>
            </div>
        @endif
        @if($blogPost->heading6)
            <div class="row">
            <div class="col-md mb-3 text-center">
                <h2> {{ $blogPost->heading6 }} </h2>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center mt-2">
                <img class="img-responsive" src="{{ $blogPost->image6_name ?? '' }}" alt="article image" width="80%;" max-height="75%">
            </div>
            </div>
            <div class="row">
            <div class="col-12 mt-1" style="margin-left: 10%;">
                <p class="mt-1"> {!! $blogPost->imageCredit6 !!} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $blogPost->paragraph1Heading6 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $blogPost->paragraph2Heading6 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md">
                <p class="mt-1 ml-5 mr-5 mb-5"> {{ $blogPost->paragraph3Heading6 }} </p>
            </div>
            </div>
        @endif
        @if($blogPost->heading7)
            <div class="row">
            <div class="col-md mb-3 text-center">
                <h2> {{ $blogPost->heading7 }} </h2>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center mt-2">
                <img class="img-responsive" src="{{ $blogPost->image7_name ?? '' }}" alt="article image" width="80%;" max-height="75%">
            </div>
            </div>
            <div class="row">
            <div class="col-12 mt-1" style="margin-left: 10%;">
                <p class="mt-1"> {!! $blogPost->imageCredit7 !!} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $blogPost->paragraph1Heading7 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $blogPost->paragraph2Heading7 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-5"> {{ $blogPost->paragraph3Heading7 }} </p>
            </div>
            </div>
        @endif
        @if($blogPost->heading8)
            <div class="row">
            <div class="col-md mb-3 text-center">
                <h2> {{ $blogPost->heading8 }} </h2>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center mt-2">
                <img class="img-responsive" src="{{ $blogPost->image8_name ?? '' }}" alt="article image" width="80%;" max-height="75%">
            </div>
            </div>
            <div class="row">
            <div class="col-12 mt-1" style="margin-left: 10%;">
                <p class="mt-1"> {!! $blogPost->imageCredit8 !!} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $blogPost->paragraph1Heading8 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $blogPost->paragraph2Heading8 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-5"> {{ $blogPost->paragraph3Heading8 }} </p>
            </div>
            </div>
        @endif
        @if($blogPost->heading9)
            <div class="row">
            <div class="col-md mb-3 text-center">
                <h2> {{ $blogPost->heading9 }} </h2>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center mt-2">
                <img class="img-responsive" src="{{ $blogPost->image9_name ?? '' }}" alt="article image" width="80%;" max-height="75%">
            </div>
            </div>
            <div class="row">
            <div class="col-12 mt-1" style="margin-left: 10%;">
                <p class="mt-1"> {!! $blogPost->imageCredit9 !!} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $blogPost->paragraph1Heading9 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-2 ml-5 mr-5 mb-5"> {{ $blogPost->paragraph2Heading9 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-5"> {{ $blogPost->paragraph3Heading9 }} </p>
            </div>
            </div>
        @endif
        @if($blogPost->heading10)
            <div class="row">
            <div class="col-md mb-3 text-center">
                <h2> {{ $blogPost->heading10 }} </h2>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center mt-2">
                <img class="img-responsive" src="{{ $blogPost->image10_name ?? '' }}" alt="article image" width="80%;" max-height="75%">
            </div>
            </div>
            <div class="row">
            <div class="col-12 mt-1" style="margin-left: 10%;">
                <p class="mt-1"> {!! $blogPost->imageCredit10 !!} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $blogPost->paragraph1Heading10 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-1"> {{ $blogPost->paragraph2Heading10 }} </p>
            </div>
            </div>
            <div class="row">
            <div class="col-md text-center">
                <p class="mt-1 ml-5 mr-5 mb-5"> {{ $blogPost->paragraph3Heading10 }} </p>
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

        <!-- action="{{ route('update', $blogPost->id) }}" -->

    <div class="container container-fluid">
        <form method="POST" action="{{ route('update', $blogPost->id ) }}">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="type">Article Type</label>
                <input type="text"
                        name="type"
                        class="form-control form-control-lg"
                        value="{{ old('type') }}"
                >
                @if ($errors->has('type'))
                    <span class="text-danger">{{ $errors->first('type') }}</span>
                @endif
                    <small id="typeHelp" class="form-text text-muted">
                    ex : Featured, Shop, General
                    This field is determines where the blog will be placed
                    </small>
                </div>

                    <div class="form-group">
                        <label for="subtype">Sub Type</label>
                        <small class="form-text text-muted">
                        ex : Health, Science, Philosophy, other
                    this field is required.
                        </small>
                        <input type="text"
                                name="subtype"
                                class="form-control form-control-lg"
                                value="{{ old('subtype') }}"
                        >
                        @if ($errors->has('subtype'))
                                <span class="text-danger">{{ $errors->first('subtype') }}</span>
                        @endif
                        <small id="subtypeHelp" class="form-text text-muted">
                            Something short and interesting maybe even a quote for the quip field? Draw the potential reader in with a hook.
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="image_name">
                            Main Article Image
                        </label>
                        <input type="text"
                            name="image_name"
                            class="form-control form-control-lg"
                            value="{{ old('image_name') }}"
                        >
                        @if ($errors->has('image_name'))
                            <span class="text-danger">{{ $errors->first('image_name') }}</span>
                        @endif
                        <small id="imageHelp" class="form-text text-muted">
                            What should we share regarding this field?
                        </small>
                    </div>

                    <div class="form-group">
                    <label for="imageCredit1">Credit The Image</label>
                    <input type="text"
                            name="imageCredit1"
                            class="form-control form-control-lg"
                            value="{{ old('imageCredit1') }}"
                    >
                    @if ($errors->has('imageCredit1'))
                            <span class="text-danger">{{ $errors->first('imageCredit1') }}</span>
                    @endif
                    <small id="imageHelp" class="form-text text-muted">What should we share regarding this field?</small>
                    </div>

                    <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text"
                            name="title"
                            class="form-control form-control-lg"
                            value="{{ old('title') }}"
                    >
                    @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                    <small id="titleHelp" class="form-text text-muted">This may appear in search engines.</small>
                    </div>

                    <div class="form-group">
                    <label for="quip">Quip</label>
                    <input type="text"
                            name="quip"
                            class="form-control form-control-lg"
                            value="{{ old('quip') }}"
                    >
                    @if ($errors->has('quip'))
                            <span class="text-danger">{{ $errors->first('quip') }}</span>
                    @endif
                    <small id="quipHelp" class="form-text text-muted">Something short and interesting maybe even a quote for the quip field? Draw the potential reader in with a hook.</small>
                    </div>

                    <div class="form-group">
                    <label for="excerpt">Excerpt</label>
                    <input type="textarea"
                            name="excerpt"
                            class="form-control form-control-lg"
                            value=" {{ old('excerpt') }} "
                    >
                        @if ($errors->has('excerpt'))
                            <span class="text-danger">{{ $errors->first('excerpt') }}</span>
                        @endif
                    <small id="excerptHelp" class="form-text text-muted">A short snippet from the article for the excerpt</small>
                    </div>

                    <div class="form-group">
                    <label for="heading1">First Header</label>
                    <input type="textarea"
                            name="heading1"
                            class="form-control form-control-lg"
                            value="{{ old('heading1') }}"
                    >
                    @if ($errors->has('heading1'))
                            <span class="text-danger">{{ $errors->first('heading1') }}</span>
                    @endif
                    <small id="header1Help" class="form-text text-muted">Very first header on page</small>
                    </div>

                    <div class="form-group">
                    <label for="image1_name">First Image</label>
                    <input type="text"
                            name="image1_name"
                            class="form-control form-control-lg"
                            value="{{ old('image1_name') }}"
                    >
                    @if ($errors->has('image1_name'))
                            <span class="text-danger">{{ $errors->first('image1_name') }}</span>
                    @endif
                    <small id="image1Help" class="form-text text-muted">
                        What should we share regarding this field?
                    </small>
                    </div>


                    <div class="form-group">
                    <label for="imageCredit">Credit The Image</label>
                    <input type="text"
                            name="imageCredit"
                            class="form-control form-control-lg"
                            value="{{ old('imageCredit') }}"
                    >
                    @if ($errors->has('imageCredit'))
                            <span class="text-danger">{{ $errors->first('imageCredit') }}</span>
                    @endif
                    <small id="imageCreditHelp" class="form-text text-muted">What should we share regarding this field?</small>
                    </div>

                    <div class="form-group">
                    <label for="paragraph1Heading1">First Paragraph For Heading 1</label>
                    <input type="textarea"
                            name="paragraph1Heading1"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph1Heading1') }}"
                    >
                    @if ($errors->has('paragraph1Heading1'))
                            <span class="text-danger">{{ $errors->first('paragraph1Heading1') }}</span>
                    @endif
                    <small class="form-text text-muted">Very first paragraph of the article, the paragraph supports the header, and vice versa.</small>
                    </div>

                    <div class="form-group">
                    <label for="paragraph2Heading1">Second Paragraph For Heading 1</label>
                    <input type="textarea"
                            name="paragraph2Heading1"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph2Heading1') }}"
                    >
                    @if ($errors->has('paragraph2Heading1'))
                            <span class="text-danger">{{ $errors->first('paragraph2Heading1') }}</span>
                    @endif
                    <small class="form-text text-muted">Second paragraph of the article, the paragraph supports the header, and vice versa.</small>
                    </div>

                    <div class="form-group">
                    <label for="paragraph3Heading1">Third Paragraph For Heading 1</label>
                    <input type="textarea"
                            name="paragraph3Heading1"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph3Heading1') }}"
                    >
                    @if ($errors->has('paragraph3Heading1'))
                            <span class="text-danger">{{ $errors->first('paragraph3Heading1') }}</span>
                    @endif
                    <small class="form-text text-muted">Third paragraph of the article, the paragraph supports the header, and vice versa.</small>
                    </div>


                <div id='theSecondSegment'>
                    <small id="heading2Help" class="form-text text-muted">
                        Second segment of the article.
                    </small>
                    <div class="form-group">
                    <label for="heading2">Second Header</label>
                    <input type="textarea"
                            name="heading2"
                            class="form-control form-control-lg mt-3"
                            value="{{ old('heading2') }}"
                    >
                    @if ($errors->has('heading2'))
                            <span class="text-danger">{{ $errors->first('heading2') }}</span>
                    @endif
                    </div>

                    <div class="form-group">
                    <label for="image2_name">Second Image</label>
                    <input type="text"
                            name="image2_name"
                            class="form-control form-control-lg"
                            value="{{ old('image2_name') }}"
                    >
                    @if ($errors->has('image2_name'))
                            <span class="text-danger">{{ $errors->first('image2_name') }}</span>
                    @endif
                    <small id="image2Help" class="form-text text-muted">
                        What should we share regarding this field?
                    </small>
                    </div>

                    <div class="form-group">
                    <label for="imageCredit2">Credit The Image</label>
                    <input type="text"
                            name="imageCredit2"
                            class="form-control form-control-lg"
                            value="{{ old('imageCredit2') }}"
                    >
                    @if ($errors->has('imageCredit2'))
                            <span class="text-danger">{{ $errors->first('imageCredit2') }}</span>
                    @endif
                    <small id="imageCredit2Help" class="form-text text-muted">What should we share regarding this field?</small>
                    </div>

                    <div class="form-group">
                    <label for="paragraph1Heading2">First Paragraph Heading 2</label>
                    <input type="textarea"
                            name="paragraph1Heading2"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph1Heading2') }}"
                    >
                    @if ($errors->has('paragraph1Heading2'))
                            <span class="text-danger">{{ $errors->first('paragraph1Heading2') }}</span>
                    @endif
                    <small id="paragraph1Heading2Help" class="form-text text-muted">Your article is getting long, nice.</small>
                    </div>

                    <div class="form-group">
                    <label for="paragraph2Heading2">Second Paragraph Heading 2</label>
                    <input type="textarea"
                            name="paragraph2Heading2"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph2Heading2') }}"
                    >
                    @if ($errors->has('paragraph2Heading2'))
                            <span class="text-danger">{{ $errors->first('paragraph2Heading2') }}</span>
                    @endif
                    <small id="paragraph2Heading2Help" class="form-text text-muted">Your article is getting long, nice.</small>
                    </div>

                    <div class="form-group">
                    <label for="paragraph3Heading2">Third Paragraph Heading 2</label>
                    <input type="textarea"
                            name="paragraph3Heading2"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph3Heading2') }}"
                    >
                    @if ($errors->has('paragraph3Heading2'))
                            <span class="text-danger">{{ $errors->first('paragraph3Heading2') }}</span>
                    @endif
                    <small id="paragraph3Heading2Help" class="form-text text-muted">Your article is getting long, nice.</small>
                    </div>
                </div>
<!--
                <button type="button"
                        id="thirdHeaderButton"
                        class="btn btn-secondary remove-on-page-load"
                        onclick="addFieldOnButtonClick(this.id)">
                    Add Third Header?
                </button>
                <small id="thirdHeaderHelp" class="form-text text-muted"></small> -->

                <div id="theThirdSegment">
                    <div class="form-group">
                    <label for="heading3">Third Header</label>
                    <input type="textarea"
                            name="heading3"
                            class="form-control form-control-lg"
                            value="{{ old('heading3') }}"
                    >
                    @if ($errors->has('heading3'))
                            <span class="text-danger">{{ $errors->first('heading3') }}</span>
                    @endif
                    <small id="thirdSegmentHelp"
                            class="form-text text-muted"
                    >
                            What should we share regarding this field?
                    </small>
                    </div>

                    <div class="form-group">
                    <label for="image3_name">Third Image</label>
                    <input type="text"
                            name="image3_name"
                            class="form-control form-control-lg"
                            value="{{ old('image3_name') }}"
                    >
                    @if ($errors->has('image3_name'))
                            <span class="text-danger">{{ $errors->first('image3_name') }}</span>
                    @endif
                    <small id="imageHelp" class="form-text text-muted">
                        What should we share regarding this field?
                    </small>
                    </div>

                    <div class="form-group">
                    <label for="imageCredit3">Credit The Image</label>
                    <input type="text"
                            name="imageCredit3"
                            class="form-control form-control-lg"
                            value="{{ old('imageCredit3') }}"
                    >
                    @if ($errors->has('imageCredit3'))
                            <span class="text-danger">{{ $errors->first('imageCredit3') }}</span>
                    @endif
                    <small id="imageHelp" class="form-text text-muted">What should we share regarding this field?</small>
                    </div>

                    <div class="form-group">
                    <label for="paragraph1Heading3">First Paragraph For Heading 3</label>
                    <input type="textarea"
                            name="paragraph1Heading3"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph1Heading3') }}"
                    >
                    @if ($errors->has('paragraph1Heading3'))
                            <span class="text-danger">{{ $errors->first('paragraph1Heading3') }}</span>
                    @endif
                    <small id="paragraph1Heading3Help" class="form-text text-muted">This should have wrapped up the article</small>
                    </div>
                    <div class="form-group">
                    <label for="paragraph2Heading3">Second Paragraph For Heading 3</label>
                    <input type="textarea"
                            name="paragraph2Heading3"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph2Heading3') }}"
                    >
                    @if ($errors->has('paragraph2Heading3'))
                            <span class="text-danger">{{ $errors->first('paragraph2Heading3') }}</span>
                    @endif
                    </div>

                    <div class="form-group">
                    <label for="paragraph3Heading3">Third Paragraph For Heading 3</label>
                    <input type="textarea"
                            name="paragraph3Heading3"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph3Heading3') }}"
                    >
                    @if ($errors->has('paragraph3Heading3'))
                            <span class="text-danger">{{ $errors->first('paragraph3Heading3') }}</span>
                    @endif
                    <small id="paragraph1Heading3Help" class="form-text text-muted">This should have wrapped up the article</small>
                    </div>
                </div>

            <!-- <button type="button"
                    id="fourthHeaderButton"
                    class="btn btn-secondary remove-on-page-load"
                    onclick="addFieldOnButtonClick(this.id)">
                Add Fourth Header?
            </button> -->

            <div id="theFourthSegment">
                <div class="form-group">
                    <label for="heading4">Fourth Header</label>
                    <input type="textarea"
                            name="heading4"
                            class="form-control form-control-lg"
                            value="{{ old('heading4') }}"
                    >
                    @if ($errors->has('heading4'))
                        <span class="text-danger">{{ $errors->first('heading4') }}</span>
                    @endif
                    <small id="fourthSegmentHelp"
                            class="form-text text-muted"
                    >
                            What should we share regarding this field?
                    </small>
                </div>

                <div class="form-group">
                    <label for="image4_name">Fourth Image</label>
                    <input type="text"
                            name="image4_name"
                            class="form-control form-control-lg"
                            value="{{ old('image4_name') }}"
                    >
                    @if ($errors->has('image4_name'))
                        <span class="text-danger">{{ $errors->first('image4_name') }}</span>
                    @endif
                    <small id="imageHelp" class="form-text text-muted">
                    What should we share regarding this field?
                    </small>
                </div>

                <div class="form-group">
                    <label for="imageCredit4">Credit The Image</label>
                    <input type="text"
                            name="imageCredit4"
                            class="form-control form-control-lg"
                            value="{{ old('imageCredit4') }}"
                    >
                    @if ($errors->has('imageCredit4'))
                        <span class="text-danger">{{ $errors->first('imageCredit4') }}</span>
                    @endif
                    <small id="image4Help" class="form-text text-muted">What should we share regarding this field?</small>
                </div>

                <div class="form-group">
                    <label for="paragraph1Heading4">First Paragraph Header 4</label>
                    <input type="textarea"
                            name="paragraph1Heading4"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph1Heading4') }}"
                    >
                    @if ($errors->has('paragraph1Heading4'))
                        <span class="text-danger">{{ $errors->first('paragraph1Heading4') }}</span>
                    @endif
                    <small id="paragraph1Heading4Help" class="form-text text-muted">This is the fourth heading, paragraph 1.</small>
                </div>

                <div class="form-group">
                    <label for="paragraph2Heading4">Second Paragraph Heading 4</label>
                    <input type="textarea"
                            name="paragraph2Heading4"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph2Heading4') }}"
                    >
                    @if ($errors->has('paragraph2Heading4'))
                        <span class="text-danger">{{ $errors->first('paragraph2Heading4') }}</span>
                    @endif
                    <small id="paragraph2Heading4Help" class="form-text text-muted">This is the fourth</small>
                </div>

                <div class="form-group">
                    <label for="paragraph3Heading4">Third Paragraph Heading 4</label>
                    <input type="textarea"
                            name="paragraph3Heading4"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph3Heading4') }}"
                    >
                    @if ($errors->has('paragraph3Heading4'))
                        <span class="text-danger">{{ $errors->first('paragraph3Heading4') }}</span>
                    @endif
                    <small id="paragraph3Heading4Help" class="form-text text-muted">This is the fourth</small>
                </div>
            </div>
            <!-- <button type="button"
                id="fifthHeaderButton"
                class="btn btn-secondary remove-on-page-load"
                onclick="addFieldOnButtonClick(this.id)">
                    Add Fifth Header?
            </button>
            <small id="fifthHeaderHelp" class="form-text text-muted"></small> -->

            <div id="theFifthSegment">
                <div class="form-group">
                    <label for="heading5">Fifth Header</label>
                    <input type="textarea"
                            name="heading5"
                            class="form-control form-control-lg"
                            value="{{ old('heading5') }}"
                    >
                    @if ($errors->has('heading5'))
                        <span class="text-danger">{{ $errors->first('heading5') }}</span>
                    @endif
                    <small id="fifthSegmentHelp"
                            class="form-text text-muted"
                    >
                            What should we share regarding this field?
                    </small>
                </div>

                <div class="form-group">
                    <label for="image5_name">Fifth Article Image</label>
                    <input type="text"
                            name="image5_name"
                            class="form-control form-control-lg"
                            value="{{ old('image5_name') }}"
                    >
                    @if ($errors->has('image5_name'))
                        <span class="text-danger">{{ $errors->first('image5_name') }}</span>
                    @endif
                    <small id="image5Help" class="form-text text-muted">
                    What should we share regarding this field?
                    </small>
                </div>

                <div class="form-group">
                    <label for="imageCredit5">Credit The Image</label>
                    <input type="text"
                            name="imageCredit5"
                            class="form-control form-control-lg"
                            value="{{ old('imageCredit5') }}"
                    >
                    @if ($errors->has('imageCredit5'))
                        <span class="text-danger">{{ $errors->first('imageCredit5') }}</span>
                    @endif
                    <small id="image5Help" class="form-text text-muted">What should we share regarding this field?</small>
                </div>

                <div class="form-group">
                    <label for="paragraph1Heading5">First Paragraph Heading 5</label>
                    <input type="textarea"
                            name="paragraph1Heading5"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph1Heading5') }}"
                    >
                    @if ($errors->has('paragraph1Heading5'))
                        <span class="text-danger">{{ $errors->first('paragraph1Heading5') }}</span>
                    @endif
                    <small id="paragraph1Heading5Help" class="form-text text-muted">This should have wrapped up the article</small>
                </div>

                <div class="form-group">
                    <label for="paragraph2Heading5">Second Paragraph Heading 5</label>
                    <input type="textarea"
                            name="paragraph2Heading5"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph2Heading5') }}"
                    >
                    @if ($errors->has('paragraph2Heading5'))
                        <span class="text-danger">{{ $errors->first('paragraph2Heading5') }}</span>
                    @endif
                    <small id="paragraph2Heading5Help" class="form-text text-muted">This should have wrapped up the article</small>
                </div>

                <div class="form-group">
                    <label for="paragraph3Heading5">Third Paragraph Heading 5</label>
                    <input type="textarea"
                            name="paragraph3Heading5"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph3Heading5') }}"
                    >
                    @if ($errors->has('paragraph3Heading5'))
                        <span class="text-danger">{{ $errors->first('paragraph3Heading5') }}</span>
                    @endif
                    <small id="paragraph3Heading5Help" class="form-text text-muted">This should have wrapped up the article</small>
                </div>
            </div>

        <!-- Start of The Sixth Segment -->
            <!-- <button type="button"
                    id="sixthHeaderButton"
                    class="btn btn-secondary remove-on-page-load"
                    onclick="addFieldOnButtonClick(this.id)">
                    Add Sixth Header?
            </button>
            <small id="sixthHeaderHelp" class="form-text text-muted"></small> -->

            <div id="theSixthSegment">
                <div class="form-group">
                    <label for="heading6">Sixth Header</label>
                    <input type="textarea"
                            name="heading6"
                            class="form-control form-control-lg"
                            value="{{ old('heading6') }}"
                    >
                    @if ($errors->has('heading6'))
                        <span class="text-danger">{{ $errors->first('heading6') }}</span>
                    @endif
                    <small id="sixthSegmentHelp"
                            class="form-text text-muted"
                    >
                            What should we share regarding this field?
                    </small>
                </div>

                <div class="form-group">
                    <label for="image6_name">Main Article Image</label>
                    <input type="text"
                            name="image6_name"
                            class="form-control form-control-lg"
                            value="{{ old('image6_name') }}"
                    >
                    @if ($errors->has('image6_name'))
                        <span class="text-danger">{{ $errors->first('image6_name') }}</span>
                    @endif
                    <small id="image6Help" class="form-text text-muted">
                    What should we share regarding this field?
                    </small>
                </div>

                <div class="form-group">
                    <label for="imageCredit6">Credit The Image</label>
                    <input type="text"
                            name="imageCredit6"
                            class="form-control form-control-lg"
                            value="{{ old('imageCredit6') }}"
                    >
                    @if ($errors->has('imageCredit6'))
                        <span class="text-danger">{{ $errors->first('imageCredit6') }}</span>
                    @endif
                    <small id="image6Help" class="form-text text-muted">What should we share regarding this field?</small>
                </div>

                <div class="form-group">
                    <label for="paragraph1Heading6">First Paragraph Heading 6</label>
                    <input type="textarea"
                            name="paragraph1Heading6"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph1Heading6') }}"
                    >
                    @if ($errors->has('paragraph1Heading6'))
                        <span class="text-danger">{{ $errors->first('paragraph1Heading6') }}</span>
                    @endif
                    <small id="paragraph1Heading6Help" class="form-text text-muted">This should have wrapped up the article</small>
                </div>

                <div class="form-group">
                    <label for="paragraph2Heading6">First Paragraph Heading 6</label>
                    <input type="textarea"
                            name="paragraph2Heading6"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph2Heading6') }}"
                    >
                    @if ($errors->has('paragraph2Heading6'))
                        <span class="text-danger">{{ $errors->first('paragraph2Heading6') }}</span>
                    @endif
                    <small id="paragraph2Heading6Help" class="form-text text-muted">This should have wrapped up the article</small>
                </div>

                <div class="form-group">
                    <label for="paragraph3Heading6">First Paragraph Heading 6</label>
                    <input type="textarea"
                            name="paragraph3Heading6"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph3Heading6') }}"
                    >
                    @if ($errors->has('paragraph3Heading6'))
                        <span class="text-danger">{{ $errors->first('paragraph3Heading6') }}</span>
                    @endif
                    <small id="paragraph3Heading6Help" class="form-text text-muted">This should have wrapped up the article</small>
                </div>
            </div>

            <!-- <button type="button"
                    id="seventhHeaderButton"
                    class="btn btn-secondary remove-on-page-load"
                    onclick="addFieldOnButtonClick(this.id)">
                    Add Seventh Header?
            </button>
            <small id="seventhHeaderHelp" class="form-text text-muted"></small> -->

            <div id="theSeventhSegment">
                <div class="form-group">
                    <label for="heading7">Seventh Header</label>
                    <input type="textarea"
                            name="heading7"
                            class="form-control form-control-lg"
                            value="{{ old('heading7') }}"
                    >
                    @if ($errors->has('heading7'))
                        <span class="text-danger">{{ $errors->first('heading7') }}</span>
                    @endif
                    <small id="seventhSegmentHelp"
                            class="form-text text-muted"
                    >
                            What should we share regarding this field?
                    </small>
                </div>


                <div class="form-group">
                    <label for="image7_name">Main Article Image</label>
                    <input type="text"
                            name="image7_name"
                            class="form-control form-control-lg"
                            value="{{ old('image7_name') }}"
                    >
                    @if ($errors->has('image7_name'))
                        <span class="text-danger">{{ $errors->first('image7_name') }}</span>
                    @endif
                    <small id="image7Help" class="form-text text-muted">
                    What should we share regarding this field?
                    </small>
                </div>

                <div class="form-group">
                    <label for="imageCredit7">Credit The Image</label>
                    <input type="text"
                            name="imageCredit7"
                            class="form-control form-control-lg"
                            value="{{ old('imageCredit7') }}"
                    >
                    @if ($errors->has('imageCredit7'))
                        <span class="text-danger">{{ $errors->first('imageCredit7') }}</span>
                    @endif
                    <small id="image7Help" class="form-text text-muted">What should we share regarding this field?</small>
                </div>



                <div class="form-group">
                    <label for="paragraph1Heading7">First Paragraph Heading 7</label>
                    <input type="textarea"
                            name="paragraph1Heading7"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph1Heading7') }}"
                    >
                    @if ($errors->has('paragraph1Heading7'))
                        <span class="text-danger">{{ $errors->first('paragraph1Heading7') }}</span>
                    @endif
                    <small id="paragraph1Heading7Help" class="form-text text-muted">This should have wrapped up the article</small>
                </div>

                <div class="form-group">
                    <label for="paragraph2Heading7">Second Paragraph Heading 7</label>
                    <input type="textarea"
                            name="paragraph2Heading7"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph2Heading7') }}"
                    >
                    @if ($errors->has('paragraph2Heading7'))
                        <span class="text-danger">{{ $errors->first('paragraph2Heading7') }}</span>
                    @endif
                    <small id="paragraph2Heading7Help" class="form-text text-muted">This should have wrapped up the article</small>
                </div>

                <div class="form-group">
                    <label for="paragraph3Heading7">Third Paragraph Heading 7</label>
                    <input type="textarea"
                            name="paragraph3Heading7"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph3Heading7') }}"
                    >
                    @if ($errors->has('paragraph3Heading7'))
                        <span class="text-danger">{{ $errors->first('paragraph3Heading7') }}</span>
                    @endif
                    <small id="paragraph3Heading7Help" class="form-text text-muted">This should have wrapped up the article</small>
                </div>
            </div>

            <!-- <button type="button"
                    id="eighthHeaderButton"
                    class="btn btn-secondary remove-on-page-load"
                    onclick="addFieldOnButtonClick(this.id)">
                    Add Eighth Header?
            </button>
            <small id="eighthHeaderHelp" class="form-text text-muted"></small> -->

            <div id="theEighthSegment">
                <div class="form-group">
                    <label for="heading8">Eighth Header</label>
                    <input type="textarea"
                            name="heading8"
                            class="form-control form-control-lg"
                            value="{{ old('heading8') }}"
                    >
                    @if ($errors->has('heading8'))
                        <span class="text-danger">{{ $errors->first('heading8') }}</span>
                    @endif
                    <small id="eighthSegmentHelp"
                            class="form-text text-muted"
                    >
                            What should we share regarding this field?
                    </small>
                </div>

                <div class="form-group">
                    <label for="image8_name">Main Article Image</label>
                    <input type="text"
                            name="image8_name"
                            class="form-control form-control-lg"
                            value="{{ old('image8_name') }}"
                    >
                    @if ($errors->has('image8_name'))
                        <span class="text-danger">{{ $errors->first('image8_name') }}</span>
                    @endif
                    <small id="image8Help" class="form-text text-muted">
                    What should we share regarding this field?
                    </small>
                </div>

                <div class="form-group">
                    <label for="imageCredit8">Credit The Image</label>
                    <input type="text"
                            name="imageCredit8"
                            class="form-control form-control-lg"
                            value="{{ old('imageCredit8') }}"
                    >
                    @if ($errors->has('imageCredit8'))
                        <span class="text-danger">{{ $errors->first('imageCredit8') }}</span>
                    @endif
                    <small id="image8Help" class="form-text text-muted">What should we share regarding this field?</small>
                </div>

                <div class="form-group">
                    <label for="paragraph1Heading8">First Paragraph Heading 8</label>
                    <input type="textarea"
                            name="paragraph1Heading8"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph1Heading8') }}"
                    >
                    @if ($errors->has('paragraph1Heading8'))
                        <span class="text-danger">{{ $errors->first('paragraph1Heading8') }}</span>
                    @endif
                    <small id="pparagraph1Heading8Help" class="form-text text-muted">This should have wrapped up the article</small>
                </div>

                <div class="form-group">
                    <label for="paragraph2Heading8">Second Paragraph Heading 8</label>
                    <input type="textarea"
                            name="paragraph2Heading8"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph2Heading8') }}"
                    >
                    @if ($errors->has('paragraph2Heading8'))
                        <span class="text-danger">{{ $errors->first('paragraph2Heading8') }}</span>
                    @endif
                    <small id="paragraph2Heading8Help" class="form-text text-muted">This should have wrapped up the article</small>
                </div>

                <div class="form-group">
                    <label for="paragraph3Heading8">Third Paragraph Heading 8</label>
                    <input type="textarea"
                            name="paragraph3Heading8"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph3Heading8') }}"
                    >
                    @if ($errors->has('paragraph3Heading8'))
                        <span class="text-danger">{{ $errors->first('paragraph3Heading8') }}</span>
                    @endif
                    <small id="paragraph3Heading8Help" class="form-text text-muted">This should have wrapped up the article</small>
                </div>
            </div>

            <!-- <button type="button"
                    id="ninthHeaderButton"
                    class="btn btn-secondary remove-on-page-load"
                    onclick="addFieldOnButtonClick(this.id)">
                    Add Ninth Header?
            </button>
            <small id="ninthHeaderHelp" class="form-text text-muted"></small> -->

            <div id="theNinthSegment">
                <div class="form-group">
                    <label for="heading9">Ninth Header</label>
                    <input type="textarea"
                            name="heading9"
                            class="form-control form-control-lg"
                            value="{{ old('heading9') }}"
                    >
                    @if ($errors->has('heading9'))
                        <span class="text-danger">{{ $errors->first('heading9') }}</span>
                    @endif
                    <small id="ninthSegmentHelp"
                            class="form-text text-muted"
                    >
                            What should we share regarding this field?
                    </small>
                </div>

                <div class="form-group">
                    <label for="image9_name">Main Article Image</label>
                    <input type="text"
                            name="image9_name"
                            class="form-control form-control-lg"
                            value="{{ old('image9_name') }}"
                    >
                    @if ($errors->has('image9_name'))
                        <span class="text-danger">{{ $errors->first('image9_name') }}</span>
                    @endif
                    <small id="image9Help" class="form-text text-muted">
                    What should we share regarding this field?
                    </small>
                </div>

                <div class="form-group">
                    <label for="imageCredit9">Credit The Image</label>
                    <input type="text"
                            name="imageCredit9"
                            class="form-control form-control-lg"
                            value="{{ old('imageCredit9') }}"
                    >
                    @if ($errors->has('imageCredit9'))
                        <span class="text-danger">{{ $errors->first('imageCredit9') }}</span>
                    @endif
                    <small id="image9Help" class="form-text text-muted">What should we share regarding this field?</small>
                </div>

                <div class="form-group">
                    <label for="paragraph1Heading9">First Paragraph Heading 9</label>
                    <input type="textarea"
                            name="paragraph1Heading9"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph1Heading9') }}"
                    >
                    @if ($errors->has('paragraph1Heading9'))
                        <span class="text-danger">{{ $errors->first('paragraph1Heading9') }}</span>
                    @endif
                    <small id="paragraph1Heading9Help" class="form-text text-muted">This should have wrapped up the article</small>
                </div>

                <div class="form-group">
                    <label for="paragraph2Heading9">Second Paragraph Heading 9</label>
                    <input type="textarea"
                            name="paragraph2Heading9"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph2Heading9') }}"
                    >
                    @if ($errors->has('paragraph2Heading9'))
                        <span class="text-danger">{{ $errors->first('paragraph2Heading9') }}</span>
                    @endif
                    <small id="paragraph2Heading9Help" class="form-text text-muted">This should have wrapped up the article</small>
                </div>

                <div class="form-group">
                    <label for="paragraph3Heading9">Third Paragraph Heading 9</label>
                    <input type="textarea"
                            name="paragraph3Heading9"
                            class="form-control form-control-lg"
                            value="{{ old('paragraph3Heading9') }}"
                    >
                    @if ($errors->has('paragraph3Heading9'))
                        <span class="text-danger">{{ $errors->first('paragraph3Heading9') }}</span>
                    @endif
                    <small id="paragraph3Heading9Help" class="form-text text-muted">This should have wrapped up the article</small>
                </div>
            </div>
<!--
        <button type="button"
                id="tenthHeaderButton"
                class="btn btn-secondary remove-on-page-load"
                onclick="addFieldOnButtonClick(this.id)">
                Add Tenth Header?
        </button>
        <small id="tenthHeaderHelp"
            class="form-text text-muted">
                final section
        </small> -->

        <div id="theTenthSegment">
            <div class="form-group">
                <label for="heading10">Tenth Header</label>
                <input type="textarea"
                        name="heading10"
                        class="form-control form-control-lg"
                        value="{{ old('heading10') }}"
                >
                @if ($errors->has('heading10'))
                    <span class="text-danger">{{ $errors->first('heading9') }}</span>
                @endif
                <small id="tenthSegmentHelp"
                        class="form-text text-muted"
                >
                        What should we share regarding this field?
                </small>
            </div>

            <div class="form-group">
                <label for="image10_name">Main Article Image</label>
                <input type="text"
                        name="image10_name"
                        class="form-control form-control-lg"
                        value="{{ old('image10_name') }}"
                >
                @if ($errors->has('image10_name'))
                    <span class="text-danger">{{ $errors->first('image10_name') }}</span>
                @endif
                <small id="image10Help" class="form-text text-muted">
                What should we share regarding this field?
                </small>
            </div>

            <div class="form-group">
                <label for="imageCredit10">Credit The Image</label>
                <input type="text"
                        name="imageCredit10"
                        class="form-control form-control-lg"
                        value="{{ old('imageCredit10') }}"
                >
                @if ($errors->has('imageCredit10'))
                    <span class="text-danger">{{ $errors->first('imageCredit10') }}</span>
                @endif
                <small id="image10Help" class="form-text text-muted">What should we share regarding this field?</small>
            </div>



            <div class="form-group">
                <label for="paragraph1Heading10">First Paragraph Heading 10</label>
                <input type="textarea"
                        name="paragraph1Heading10"
                        class="form-control form-control-lg"
                        value="{{ old('paragraph1Heading10') }}"
                >
                @if ($errors->has('paragraph1Heading10'))
                    <span class="text-danger">{{ $errors->first('paragraph1Heading10') }}</span>
                @endif
                <small id="paragraph1Heading10Help" class="form-text text-muted">This should have wrapped up the article</small>
            </div>
            <div class="form-group">
                <label for="paragraph2Heading10">Second Paragraph Heading 10</label>
                <input type="textarea"
                        name="paragraph2Heading10"
                        class="form-control form-control-lg"
                        value="{{ old('paragraph2Heading10') }}"
                >
                @if ($errors->has('paragraph2Heading10'))
                    <span class="text-danger">{{ $errors->first('paragraph2Heading10') }}</span>
                @endif
                <small id="paragraph2Heading10Help" class="form-text text-muted">This should have wrapped up the article</small>
            </div>

            <div class="form-group">
                <label for="paragraph3Heading10">Third Paragraph Heading 10</label>
                <input type="textarea"
                        name="paragraph3Heading10"
                        class="form-control form-control-lg"
                        value="{{ old('paragraph3Heading10') }}"
                >
                @if ($errors->has('paragraph3Heading10'))
                    <span class="text-danger">{{ $errors->first('paragraph3Heading10') }}</span>
                @endif
                <small id="paragraph3Heading10Help" class="form-text text-muted">This should have wrapped up the article</small>
            </div>
        </div>

        <div id='createOrReturn' class="row mt-5 text-center">
            <div class="col-4">
                <button id="createArticleButton"
                        class="btn btn-lg btn-success mt-3"
                        type="submit"
                        onclick="addFieldOnButtonClick(this.id)"
                        >
                    Make edit
                </button>
            </div>

            <div class="col-4">
                <button id="backButton"
                        class="btn btn-lg btn-dark mt-3"
                        type="submit"
                        onclick="addFieldOnButtonClick(this.id)"
                        >
                    <a style="color:white;" href="{{ url('editArticleSelection') }} ">
                    Edit Home Page
                    </a>
                </button>
            </div>

        </div>
        </form>
        <div class="">
            <form action="{{ url('/blog/delete/.', $blogPost->id) }}" method="POST" style="display: inline-block;">
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
