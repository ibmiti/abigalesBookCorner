@extends ('layouts.app')
<!-- make title unqique to article -->
<!--  TODO: this view needs to be styled for all view sizes -->
@section('title', 'Edit Products')
@section ('content')
<!-- CSS STYLINGS -->
<link rel="stylesheet" href="{{ asset('blog/css/editBlog.css') }}">
<div class="container">
    <div class="row">
        <h1 class="col-lg text-center mt-5">Edit Page</h1>
    </div>
    <div class="row">
        <div class="col-lg text-center mb-5"
             style="padding-bottom: 40px;"
        >
            <h2>Select the product you wish to edit</h2>
        </div>
    </div>
<!-- TODO: MAY RETURN BUTTONS INTO SERVICE AT A LATER DATE  -->
<!-- TODO: MAY STORE BUTTONS IN COMPONENT ASWELL -->
    <!-- <div class="row add-whitespace">
        <div class="text-center col-sm-12 add-whitespace"> -->
            <!-- <button id="popular" type="button" class="btn btn-outline-primary">Popular</button> -->
            <!-- <button id="recentButton"  type="button" class="btn btn-outline-secondary">Recent</button>
            <button id="babyArticleButton"  type="button" class="btn btn-outline-success">Baby</button>
            <button id="healthArticleButton"type="button" class="btn btn-outline-danger">Child</button>
            <button id="joyfulArticleButton" type="button" class="btn btn-outline-primary">Parent</button>
        </div>
    </div> -->

<!-- card which buttons interact with -->
    <div class="mt-4 row card card-articles add-whitespace">
        <div class="col-lg-12 mt-2 container add-whitespace">
            <div class="container">
                <!-- | This data to be swapped out based on button push -->
                <h2 id="article-type" class="col-lg mt-3">
                    <!-- this h2 filled with script on button click -->
                </h2>
                <p style="color: grey;" id="discription-type">
                    Edit the latest Products
                </p>
                <hr style="border: 2px solid black;">
                @if(isset($products))
                    @foreach($products as $p)
                        <div class="row add-whitespace mt-4 mb-4">
                            <div class="col-lg">
                                <h2 id="title"><a href=" {{ route('showProductToBeEdited', $p->id) }}">{{ $p->name ?? ''}}</a></h2>
                                <p style="color: grey; font-size: 15px;">
                                    {{ $p->type }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                @endif
<!-- MAY USE THESE OTHER SECTIONS LATER -->
                <!-- <div id="mostRecentArticles">
                    @if(isset($mostRecentArticles))
                    @foreach($mostRecentArticles as $a)
                    @php
                        switch($a->type) {
                            case 'Babies':
                                    $articleType = 'Babies';
                            break;
                            case 'health':
                                    $articleType = 'health';
                            break;
                            case 'Parents':
                                    $articleType = 'joyful';
                            break;
                        }
                    @endphp
                        <div class="row add-whitespace mt-4 mb-4">
                            <div class="col-lg">
                                <h2 id="title"><a href="/edit/{{ $a->id ?? '' }}">{{ $a->title ?? ''}}</a></h2>
                                <p style="color: grey; font-size: 15px;">
                                    {{ $a->excerpt }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                    @endif
                </div>
                <div id="babyArticles">
                    @if(isset($babyArticles))
                    @foreach($babyArticles as $a)
                    <div class="row add-whitespace mt-4 mb-4">
                        <div class="col-lg">
                            <h2 id="title"><a href="/edit/{{ $a->id ?? '' }}">{{ $a->title ?? ''}}</a></h2>
                            <p style="color: grey; font-size: 15px;">
                                {{ $a->excerpt }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div id="HealthArticles">
                    @foreach($healthArticles as $a)
                    <div class="row add-whitespace mt-4 mb-4">
                        <div class="col-lg">
                            <h2 id="title"><a href="/edit/{{ $a->id }}">{{ $a->title ?? ''}}</a></h2>
                            <p style="color: grey; font-size: 15px;">
                                {{ $a->excerpt }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                <div id="healthArticles">
                @if(isset($healthArticles))
                    @foreach($healthArticles as $a)
                    <div class="row add-whitespace mt-4 mb-4">
                        <div class="col-lg">
                            <h2 id="title"><a href="/edit/{{ $a->id ?? '' }}">{{ $a->title ?? ''}}</a></h2>
                            <p style="color: grey; font-size: 15px;">
                                {{ $a->excerpt }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                @endif
                </div>
            </div>
        </div> -->
    </div>
<!-- TODO RETURN THIS TO SERVICE, WHEN READY -->
<!-- <script src="{{ asset('blog/js/editBlog.js') }}"></script> -->
@endsection
