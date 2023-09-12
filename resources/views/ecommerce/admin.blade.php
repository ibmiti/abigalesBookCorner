@extends('layouts.app')
@section('title', 'Product Admin')
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
            <p class="mb-3 p-3 text-muted">BUILD A NEW ARTICLE OR EDIT AN EXISTING PRODUCT.</p>
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
                Create Product
            </button>
            <button type="button"
                    class="btn btn-outline-secondary">
                <a href="{{ route('editProducts') }}">
                    Edit Product
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
        <form method="POST" action="{{ route('createProduct') }}">
            @csrf

            <div class="form-group">
                <label for="type">Product Name</label>
                <input type="text"
                        name="name"
                        class="form-control form-control-lg"
                        value="{{ old('name') ?? 'see ex: below' }}"
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
                @if ($errors->has('type'))
                    <span class="text-danger">{{ $errors->first('type') }}</span>
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
