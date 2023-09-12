@extends('layouts.app')
@section('title', 'Create Article')
@section('content')
<link href="{{ asset('css/blog/blog.css') }}" rel="stylesheet">
<div class="container container-fluid text-center mt-5" id="firstDiv">
    <div class="container container-fluid mt-5">
        <div id="secondDiv">
            <div class="spinner-grow"
                 style="width: 3rem; height: 3rem; margin-top: 70px;"
                 role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div id="thirdDiv">
            <h1 class="mt-5 p-5"
                style="font-size:25px; font-weight:700;">
                   THE AUTHORING PAGE
            </h1>
            <p class="mb-3 p-3 text-muted">BUILD A NEW ARTICLE OR EDIT AN EXISTING ARTICLE.</p>
        </div>
        <div id="fourthDiv" class="m-2">
            <!-- TODO Add user's name here -->
            <h2 class="text-muted mt-5 mb-5" id="welcome">WELCOME {{ strtoupper(null) }}</h2>
        </div>
    </div>
</div>

<div id="div05" class="mb-5">
    <div class="row mt-3">
        <div class="col-12 text-center">
            <button type="button"
                    id="button01"
                    class="btn btn-outline-primary"
                    onClick="buttonClicked(this.id)">
                Create Article
            </button>
            <button type="button"
                    class="btn btn-outline-secondary">
                <a href="{{ route('blogPostsEditIndex') }}">
                    Edit Article
                </a>
            </button>
            <button id="" type="button" class="btn btn-dark" >
                <a style="color:white;" href="{{ url('/secret/admin') }} ">Go Back</a>
            </button>
            <button id="" type="button" class="btn btn-dark" >
                <a style="color:white;" href="{{ url('/') }} ">Go Home</a>
            </button>
        </div>
    </div>
</div>

<div class="row text-center" >
        <div class="col-12">
            <div class="slab" id="fifthDiv">
                <div class="card-body">

                    <h2 style="font-size:25px;"
                        class="title card-title mt-3 mb-3">
                        FOUNDATIONS OF AN EXCELLENT ARTICLE
                    </h2>

                    <!-- place spinner in place of this p, after 2 seconds reveal and replace -->
                    <p id="mission-statement"
                        class="m-3 p-3 text-muted"
                        style="font-size:12px; font-weight:700;"
                    ><cite>We build high-quality products, every-time; this includes our articles.
                    </cite>
                    </p>



                    <!-- BOOTSTRAP SPINNERS  -->
                    <div class="spinners row mt-5 mb-5" id="sixthDiv">
                        <div class="col-12 text-center">
                            <div id="sixthDiv" class="spinner-grow text-info" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div id="seventhDiv" class="spinner-grow text-danger" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div id="ninthDiv" class="spinner-grow text-warning" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>




                    <ul class="list-group tutorial-list-items m-3 p-3">
                        <li class="list-group-item">Choose a topic and write a headline</li>
                        <li class="list-group-item">Write the lead <a href="https://owl.purdue.edu/owl/subject_specific_writing/journalism_and_journalistic_writing/writing_leads.html">paragraph</a></li>
                        <li class="list-group-item">List a few main points in the <a href="https://scienceissues.net/how-to-create-a-great-article-body-part">body</a></li>
                        <li class="list-group-item">Write your <a href="https://www.grammarly.com/blog/call-to-action/?gclid=Cj0KCQjwmIuDBhDXARIsAFITC_7I1gSDQ79T9HYm5LyTNy_ILLchTbSavGBUa2I-wp1LB2Tz3ZDserEaArmPEALw_wcB&gclsrc=aw.ds">call-to-action</a></li>
                        <li class="list-group-item"><a href="https://www.grammarly.com/blog/advice-on-editing/?gclid=Cj0KCQjwmIuDBhDXARIsAFITC_6i8zIdvLAFmxDjJIRGxNrPYjIHOqRPzNppYZf_VniExuL87S8IcTkaAu_yEALw_wcB&gclsrc=aw.ds">Edit</a> and <a href="https://owl.purdue.edu/owl/general_writing/the_writing_process/proofreading/steps_for_revising.html">revise</a>
                        </li>
                        <li class="list-group-item">
                            <a href="https://ualr.edu/writingcenter/tips-for-effective-proofreading/">Proofread
                            </a>
                        </li>
                        <li class="list-group-item">Run Through <a href="https://www.grammarly.com/?q=brand&utm_source=google&utm_medium=cpc&utm_campaign=brand_f1&utm_content=486649398671&utm_term=grammarly&matchtype=e&placement=&network=g&gclid=Cj0KCQjw9YWDBhDyARIsADt6sGZlAtzPNs24RJ6OFjWutPJfsAs9XozOZNKHOp8CGmaNzTc9hSz11QoaAmmTEALw_wcB&gclsrc=aw.ds">Grammarly</a></li>
                        <li class="list-group-item">Publish</li>
                    </ul>

                    <button class="dismiss btn btn-secondary mt-3 mt-3"
                            id="button02"
                            onClick="buttonClicked(this.id)">Got it!
                    </button>
            </div>
        </div>
    </div>
</div>

<div class=" mt-3" id="div11">
    <div id="create-article-section">
        <div class="row m-5">
            <div class="col-12 text-center">
               <h3 id="workFlowDialog">Build the article</h3>
               <hr>
               <img src="https://images.unsplash.com/photo-1617575521317-d2974f3b56d2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fHdyaXRpbmd8ZW58MHx8MHx8&auto=format&fit=crop&w=800&q=60"
               width="100%" heigh="100%">
               <button
                       id="workFlowDialog"
                       class="btn btn-primary btn-lg mt-3"
                >
                       <a style="color: white;" href="{{ url('/start-authoring') }}">Back</a>
               </button>
               <button
                       id="workFlowDialog"
                       class="btn btn-secondary btn-lg mt-3"
                       data-toggle="modal" data-target="#exampleModal"
                >
                       Start Writing
               </button>
            </div>
        </div>

            <div class="row add-whitespace mb-5">
                <div class="text-center col-12 add-whitespace">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Build The Article</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- START OF THE FORM -->
        <form method="POST" action="{{ route('createArticle') }}">
            @csrf
    <!-- START OF ARTICLE BUILDING -->
            <div class="form-group">
                <label for="type">Author</label>
                <input type="text"
                        name="author"
                        class="form-control form-control-lg"
                        value="{{ old('author') }}"
                >
                @if ($errors->has('author'))
                    <span class="text-danger">{{ $errors->first('author') }}</span>
                @endif
                <small id="authorHelp" class="form-text text-muted">
                    ex : Whats your authoring name?
                </small>
            </div>



            <div class="form-group">
                <label for="type">Article Type</label>
                <input type="text"
                        name="type"
                        class="form-control form-control-lg"
                        value="{{ old('type') ?? 'see ex: below' }}"
                >
                @if ($errors->has('type'))
                    <span class="text-danger">{{ $errors->first('type') }}</span>
                @endif




<!-- TURN THESE INTO SMALL BUTTONS, WHEN CLICKED, IT ADDS THE TEXT TO THE FIELD -->
                <small id="typeHelp" class="form-text text-muted">
                    ex : Featured, Shop, General
                    This field is determines where the blog will be placed
                </small>
            </div>
            <div class="form-group">
                <label for="subtype">Sub Type</label>
<!-- TURN THESE INTO SMALL BUTTONS, WHEN CLICKED, IT ADDS THE TEXT TO THE FIELD -->
                <small class="form-text text-muted">
                ex : Health, Science, Philosophy, other
                this field is required.
                </small>
                <input type="text"
                        name="subtype"
                        class="form-control form-control-lg"
                        value="{{ old('subtype') ?? 'see ex: below' }}"
                >
                @if ($errors->has('subtype'))
                    <span class="text-danger">{{ $errors->first('subtype') }}</span>
                @endif
                <small id="subtypeHelp" class="form-text text-muted">Something short and interesting maybe even a quote for the quip field? Draw the potential reader in with a hook.</small>
            </div>








            <div class="form-group">
                <label for="image_name">Main Article Image</label>
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
                <label for="intro">Intro</label>
                <input type="textarea"
                        name="intro"
                        class="form-control form-control-lg"
                        value=" {{ old('intro') }} "
                >
                @if ($errors->has('intro'))
                    <span class="text-danger">{{ $errors->first('intro') }}</span>
                @endif
                <small id="introHelp"
                        class="form-text text-muted">
                    The Intro to the article.
                </small>
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
<!-- SECOND HEADER/OTHER -->
            <div class="form-group">
                <div id="addSecondHeader">
                    <button type="button"
                            id="secondHeaderButton"
                            class="btn btn-secondary"
                            onclick="buttonClicked(this.id)">
                            Add Second Header?
                    </button>
                    <small id="extension1ButtonHelp"
                            class="form-text text-muted">
                    </small>
                </div>
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
<!-- THIRD HEADER/OTHER -->
            <button type="button"
                    id="thirdHeaderButton"
                    class="btn btn-secondary"
                    onclick="buttonClicked(this.id)">
                Add Third Header?
            </button>
            <small id="thirdHeaderHelp" class="form-text text-muted"></small>

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
<!-- FOURTH HEADER/OTHER -->
        <button type="button"
                id="fourthHeaderButton"
                class="btn btn-secondary"
                onclick="buttonClicked(this.id)">
            Add Fourth Header?
        </button>

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
<!-- FIFTH HEADER/OTHER -->
        <button type="button"
            id="fifthHeaderButton"
            class="btn btn-secondary"
            onclick="buttonClicked(this.id)">
                Add Fifth Header?
        </button>
        <small id="fifthHeaderHelp" class="form-text text-muted"></small>

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

<!-- SIXTH HEADER/OTHER -->
        <button type="button"
                id="sixthHeaderButton"
                class="btn btn-secondary"
                onclick="buttonClicked(this.id)">
                Add Sixth Header?
        </button>
        <small id="sixthHeaderHelp" class="form-text text-muted"></small>

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
<!-- SEVENTH HEADER/OTHER -->
        <button type="button"
                id="seventhHeaderButton"
                class="btn btn-secondary"
                onclick="buttonClicked(this.id)">
                Add Seventh Header?
        </button>
        <small id="seventhHeaderHelp" class="form-text text-muted"></small>

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
<!-- EIGHTH HEADER -->
        <button type="button"
                id="eighthHeaderButton"
                class="btn btn-secondary"
                onclick="buttonClicked(this.id)">
                Add Eighth Header?
        </button>
        <small id="eighthHeaderHelp" class="form-text text-muted"></small>

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
<!-- NINTH HEADER -->
        <button type="button"
                id="ninthHeaderButton"
                class="btn btn-secondary"
                onclick="buttonClicked(this.id)">
                Add Ninth Header?
        </button>
        <small id="ninthHeaderHelp" class="form-text text-muted"></small>

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
<!-- TENTH HEADER/OTHER -->
        <button type="button"
                id="tenthHeaderButton"
                class="btn btn-secondary"
                onclick="buttonClicked(this.id)">
                Add Tenth Header?
        </button>
        <small id="tenthHeaderHelp"
            class="form-text text-muted">
                final section
        </small>
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
    <!-- END OF ARTICLE/BLOG BUILDING  -->
        <div id='createOrReturn' class="row mt-3">
            <div class="col-12">
                <button id="createArticleButton"
                        class="btn btn-lg btn-success mt-3"
                        type="submit"
                        onclick="buttonClicked(this.id)"
                        >
                    CREATE
                </button>
            </div>
            <div class="col-4">
                <button id="backButton"
                        class="btn btn-lg btn-dark mt-3"
                        type="submit"
                        onclick="buttonClicked(this.id)"
                        >
                    <a style="color:white;" href="{{ url('viewSelectArticlePage') }} ">
                    BACK
                    </a>
                </button>
            </div>
        </div>
    </form>
<!-- END OF FORM -->
</div>
    <div class="modal-footer">
        <button type="button"
                class="btn btn-secondary"
                data-dismiss="modal"
        >
            Close
        </button>
        <button type="button"
                id="showCreateOrReturn"
                class="btn btn-primary"
                onclick="buttonClicked(this.id)"
        >
            Keep changes
        </button>
    </div>
    </div>
  </div>
</div>


    </div>
    <!--  END OF FORM/SLAB -->

        </div>
    </div>


</div>
    <!-- this is the end of the div class=card slab -->

<script src="{{ asset('js/blog/blog.js') }}"></script>
<!--  bootstrap cdn css -->
<link rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"
>
<!-- bootstrap 4.4 scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

@endsection
