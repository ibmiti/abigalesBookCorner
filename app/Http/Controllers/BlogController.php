<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function showAuthoringView()
    {

        $authorizedUser=\Auth::user() ?? null;

        if (empty($authorizedUser)){
            return view('welcome');
        }
        if($authorizedUser->role == 'author' || 'admin') {
            return view('blog.create');
        }
    }
    /*
    | ---------------
    | We're wanting to return a limited amount of articles from each category so far,
    | this list may change over time.
    | ---------------
    */
    public function index(){
        $blogPosts = Blog::latest()->paginate(10);
        return view('blog.index', [
            'blogPosts' => $blogPosts,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function confirmAndCreateArticle(Request $request)
    {
        // Validating Request
        $this->validate($request, [
            'author'       => 'required|string|max:100|min:4',
            'type'         => 'required|string|max:50|min:4',
            'subtype'      => 'required|string|max:50|min:4',
            'title'        => 'required|string|max:200|min:5',
            'excerpt'      => 'required|string|max:600|min:10',
            'quip'         => 'nullable|string|max:200',
            'intro'        => 'nullable|string|max:600',
            'heading1'     => 'required|string|max:100|min:6',
            'heading2'     => 'nullable|string|max:100|min:6',
            'heading3'     => 'nullable|string|max:100|min:6',
            'heading4'     => 'nullable|string|max:100|min:4',
            'heading5'     => 'nullable|string|max:100|min:4',
            'heading6'     => 'nullable|string|max:100|min:4',
            'heading7'     => 'nullable|string|max:100|min:4',
            'heading8'     => 'nullable|string|max:100|min:4',
            'heading9'     => 'nullable|string|max:100|min:4',
            'heading10'    => 'nullable|string|max:100|min:4',
            'imageCredit1' => 'required|string|max:400|min:10',
            'image_name'   => 'required' ,
            'image1_name'  => 'nullable' ,
            'image2_name'  => 'nullable' ,
            'image3_name'  => 'nullable' ,
            'image4_name'  => 'nullable' ,
            'image5_name'  => 'nullable' ,
            'image6_name'  => 'nullable' ,
            'image7_name'  => 'nullable' ,
            'image8_name'  => 'nullable' ,
            'image9_name'  => 'nullable' ,
            'image10_name' => 'nullable' ,
            'paragraph1Heading1' => 'nullable|string|max:600|min:80',
            'paragraph2Heading1' => 'nullable|string|max:600|min:80',
            'paragraph3Heading1' => 'nullable|string|max:600|min:80',
            'paragraph1Heading2' => 'nullable|string|max:600|min:80',
            'paragraph2Heading2' => 'nullable|string|max:600|min:80',
            'paragraph3Heading2' => 'nullable|string|max:600|min:80',
            'paragraph1Heading3' => 'nullable|string|max:600|min:80',
            'paragraph2Heading3' => 'nullable|string|max:600|min:80',
            'paragraph3Heading3' => 'nullable|string|max:600|min:80',
            'paragraph1Heading4' => 'nullable|string|max:600|min:80',
            'paragraph2Heading4' => 'nullable|string|max:600|min:80',
            'paragraph3Heading4' => 'nullable|string|max:600|min:80',
            'paragraph1Heading5' => 'nullable|string|max:600|min:80',
            'paragraph2Heading5' => 'nullable|string|max:600|min:80',
            'paragraph3Heading5' => 'nullable|string|max:600|min:80',
            'paragraph1Heading6' => 'nullable|string|max:600|min:80',
            'paragraph2Heading6' => 'nullable|string|max:600|min:80',
            'paragraph3Heading6' => 'nullable|string|max:600|min:80',
            'paragraph1Heading7' => 'nullable|string|max:600|min:80',
            'paragraph2Heading7' => 'nullable|string|max:600|min:80',
            'paragraph3Heading7' => 'nullable|string|max:600|min:80',
            'paragraph1Heading8' => 'nullable|string|max:600|min:80',
            'paragraph2Heading8' => 'nullable|string|max:600|min:80',
            'paragraph3Heading8' => 'nullable|string|max:600|min:80',
            'paragraph1Heading9' => 'nullable|string|max:600|min:80',
            'paragraph2Heading9' => 'nullable|string|max:600|min:80',
            'paragraph3Heading9' => 'nullable|string|max:600|min:80',
            'paragraph1Heading10' => 'nullable|string|max:600|min:80',
            'paragraph2Heading10' => 'nullable|string|max:600|min:80',
            'paragraph3Heading10' => 'nullable|string|max:600|min:80',
        ]);

            // | TODO : add event listener
            // | - this event listener will notify by email those signed up that a new article has been created

            $article                 = new Blog;
            $article->author         = $request->author;
            $article->type           = $request->type;
            $article->subtype        = $request->subtype;
            $article->title          = $request->title;
            $article->quip           = $request->quip;
            // truncating || limiting the excerpt
            $article->excerpt        = $excerpt = \Illuminate\Support\Str::limit($request->excerpt, 40);
            $article->intro          = $request->intro;



            $article->heading1       = $request->heading1;
            $article->heading2       = $request->heading2;
            $article->heading3       = $request->heading3;
            $article->heading4       = $request->heading4;
            $article->heading5       = $request->heading5;
            $article->heading6       = $request->heading6;
            $article->heading7       = $request->heading7;
            $article->heading8       = $request->heading8;
            $article->heading9       = $request->heading9;
            $article->heading10      = $request->heading10;

            // image urls, total of 11 image's
            $article->image_name     = $request->image_name;
            $article->image1_name    = $request->image1_name;
            $article->image2_name    = $request->image2_name;
            $article->image3_name    = $request->image3_name;
            $article->image4_name    = $request->image4_name;
            $article->image5_name    = $request->image5_name;
            $article->image6_name    = $request->image6_name;
            $article->image7_name    = $request->image7_name;
            $article->image8_name    = $request->image8_name;
            $article->image9_name    = $request->image9_name;
            $article->image10_name   = $request->image10_name;

            // image credits, total of 11 credit's
            $article->imageCredit   = $request->imageCredit;
            $article->imageCredit1  = $request->imageCredit1;
            $article->imageCredit2  = $request->imageCredit2;
            $article->imageCredit3  = $request->imageCredit3;
            $article->imageCredit4  = $request->imageCredit4;
            $article->imageCredit5  = $request->imageCredit5;
            $article->imageCredit6  = $request->imageCredit6;
            $article->imageCredit7  = $request->imageCredit7;
            $article->imageCredit8  = $request->imageCredit8;
            $article->imageCredit9  = $request->imageCredit9;
            $article->imageCredit10 = $request->imageCredit10;

            // all paragraphs
            $article->paragraph1Heading1 =  $request->paragraph1Heading1;
            $article->paragraph2Heading1 =  $request->paragraph2Heading1;
            $article->paragraph3Heading1 =  $request->paragraph3Heading1;
            $article->paragraph1Heading2 =  $request->paragraph1Heading2;
            $article->paragraph2Heading2 =  $request->paragraph2Heading2;
            $article->paragraph3Heading2 =  $request->paragraph3Heading2;
            $article->paragraph1Heading3 =  $request->paragraph1Heading3;
            $article->paragraph2Heading3 =  $request->paragraph2Heading3;
            $article->paragraph3Heading3 =  $request->paragraph3Heading3;
            $article->paragraph1Heading4 =  $request->paragraph1Heading4;
            $article->paragraph2Heading4 =  $request->paragraph2Heading4;
            $article->paragraph3Heading4 =  $request->paragraph3Heading4;
            $article->paragraph1Heading5 =  $request->paragraph1Heading5;
            $article->paragraph2Heading5 =  $request->paragraph2Heading5;
            $article->paragraph3Heading5 =  $request->paragraph3Heading5;
            $article->paragraph1Heading6 =  $request->paragraph1Heading6;
            $article->paragraph2Heading6 =  $request->paragraph2Heading6;
            $article->paragraph3Heading6 =  $request->paragraph3Heading6;
            $article->paragraph1Heading7 =  $request->paragraph1Heading7;
            $article->paragraph2Heading7 =  $request->paragraph2Heading7;
            $article->paragraph3Heading7 =  $request->paragraph3Heading7;
            $article->paragraph1Heading8 =  $request->paragraph1Heading8;
            $article->paragraph2Heading8 =  $request->paragraph2Heading8;
            $article->paragraph3Heading8 =  $request->paragraph3Heading8;
            $article->paragraph1Heading9 =  $request->paragraph1Heading9;
            $article->paragraph2Heading9 =  $request->paragraph2Heading9;
            $article->paragraph3Heading9 =  $request->paragraph3Heading9;
            $article->paragraph1Heading10 = $request->paragraph1Heading10;
            $article->paragraph2Heading10 = $request->paragraph2Heading10;
            $article->paragraph3Heading10 = $request->paragraph3Heading10;


            //  protect db from incorrect typed articles
            $givenType = ucwords($article->type);
            // make this dynamic
            $expectedTypes = array(
                'Featured','Health','Joyful',
                'Human','Literature-And-Arts', 'Stem',
                'Children-Books', 'Fiction', 'Non-Fiction',
            );

            if (!in_array($givenType, $expectedTypes, true)) {
                dd('type not expected', $givenType);
// TODO GET THIS WORKING
                // return view('articles.actions.create', [
                //     $request->session()->flash('error', $givenType . ' Incorrect type given')
                // ]);
            }

            // check if correctly subtyped'
            $givenSubtypes = ucwords($article->subtype);
            $expectedSubtypes = array('Health','Development','Reviews','Howtos','Activities', 'Other');
                if (!in_array($givenSubtypes, $expectedSubtypes, true)){
                    dd('sub type not expected', $givenSubtypes, 'given', $expectedSubtypes
                );
// TODO GET THIS WORKING
                    // return view('articles.actions.create', [
                    //     $request->session()->flash('failure', $givenSubtypes . ' :incorrect subtype given')
                    // ]);
            }

            // Protect against duplicate articles
            $articlesOnRecordMatches = Blog::where('title', $article->title)->get();
            $numberOfMatchesReturned = count($articlesOnRecordMatches);
            if($numberOfMatchesReturned < 1)
            {
                $article->save();
                return view('articles.actions.edit', [
                    'article'=> $article,
                    $request->session()->flash('success', 'Successfully created '.$article->type."'s".' Article', 1)
                ]);

            } else {
                // TODO maybe log some error here
                // article with same title already exists
                return view('articles.actions.create', [
                    'article'=> $article,
                    $request->session()->flash('danger', 'Article with that title exists already', 1)
                ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BabyArticles  $babyArticles
     */
    public function show(string $givenId)
    {
        // Using the given id, find the blog post
        $blogPost = Blog::find($givenId);

        // goal: calc. avg read time:
        // function getReadingTimeEstimate($article){
        //     $paras = [];
            // if there is a paragraph to be counted, then count, else donot count.
        //     $paras[] = str_word_count($article->paragraph1Heading1);
        //     $paras[] = str_word_count($article->paragraph2Heading1);
        //     $paras[] = str_word_count($article->paragraph3Heading1);
        //     $paras[] = str_word_count($article->paragraph1Heading2);
        //     $paras[] = str_word_count($article->paragraph2Heading2);
        //     $paras[] = str_word_count($article->paragraph3Heading2);
        //     $paras[] = str_word_count($article->paragraph1Heading3);
        //     $paras[] = str_word_count($article->paragraph2Heading3);
        //     $paras[] = str_word_count($article->paragraph3Heading3);
        //     $paras[] = str_word_count($article->paragraph1Heading5);
        //     $paras[] = str_word_count($article->paragraph2Heading5);
        //     $paras[] = str_word_count($article->paragraph3Heading5);
        //     $paras[] = str_word_count($article->paragraph1Heading6);
        //     $paras[] = str_word_count($article->paragraph2Heading6);
        //     $paras[] = str_word_count($article->paragraph3Heading6);
        //     $paras[] = str_word_count($article->paragraph1Heading7);
        //     $paras[] = str_word_count($article->paragraph2Heading7);
        //     $paras[] = str_word_count($article->paragraph3Heading7);
        //     $paras[] = str_word_count($article->paragraph1Heading8);
        //     $paras[] = str_word_count($article->paragraph2Heading8);
        //     $paras[] = str_word_count($article->paragraph3Heading8);
        //     $paras[] = str_word_count($article->paragraph1Heading9);
        //     $paras[] = str_word_count($article->paragraph2Heading9);
        //     $paras[] = str_word_count($article->paragraph3Heading9);
        //     $paras[] = str_word_count($article->paragraph1Heading10);
        //     $paras[] = str_word_count($article->paragraph2Heading10);
        //     $paras[] = str_word_count($article->paragraph3Heading10);

        //     $totalNumberOfWords = array_sum($paras);

        //     switch($totalNumberOfWords){
        //         case $totalNumberOfWords <= 300:
        //              return $readingTimeEstimate = '1 minute read.';
        //         break;
        //         case $totalNumberOfWords <= 600:
        //             return $readingTimeEstimate = '2 minute read.';
        //         break;
        //         case $totalNumberOfWords <= 900:
        //             return $readingTimeEstimate = '3 minute read.';
        //         break;
        //         case $totalNumberOfWords <= 1200:
        //             return $readingTimeEstimate = '4 minute read.';
        //         break;
        //         case $totalNumberOfWords <= 1500:
        //             return $readingTimeEstimate = '5 minute read.';
        //         break;
        //         case $totalNumberOfWords > 1500:
        //             return $readingTimeEstimate = 'more than 5 minutes';
        //         break;
        //     }
        //     return $readingTimeEstimate;
        // }

        // $readingTimeEstimate = getReadingTimeEstimate($article);
        // switch($article->type) {
        //     case 'Babies':
        //       $articleType = 'babies';
        //     break;
        //     case 'Children':
        //       $articleType = 'child';
        //     break;
        //     case 'Parents':
        //       $articleType = 'parent';
        //     break;
        //   }

            return view('blog.show', ['blogPost' => $blogPost]);
        // return view('blog/show', [
        //     'article' => $article,
        //     'readingTimeEstimate' => $readingTimeEstimate,
        //     'articleType'=> $articleType = lcfirst($article->type)
        // ]);
    }

    public function editIndex()
    {


// RETURN ALL ARTICLES TO THE VIEW
        $blogPosts = Blog::latest()->get();

        return view('blog.editIndex', [
            'blogPosts' => $blogPosts,

// TODO MAY RETURN AND IMPROVE THIS LIST LATER.
            // 'mostRecentArticles' => Blog::latest()->paginate(10),
            // 'babyArticles'       => Blog::where('type','Babies')->latest()->paginate(10),
            // 'healthArticles'      => Blog::where('type', 'health')->latest()->paginate(10),
            // 'joyfulArticles'     => Blog::where('type', 'joyful')->latest()->paginate(10)
        ]);
    }


        // | This method will return the specified article with the new view
        public function edit($blogPost)
        {
            // | use the id to return the individual article
            $article = Blog::find($blogPost);
            return view('blog.edit', ['blogPost'=> $article]);
        }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $articleId)
    {
// TODO FIGURE OUT WHY THIS VALIDATION IS FAILING,
// TODO VALIDATION ALSO DOES NOT RETURN THE ERROR TO THE VIEW, THIS IS A MUST FIX
        // $this->validate($request, [
        //     'type'                => 'nullable|string|max:50|min:4',
        //     'subtype'             => 'nullable|string|max:50|min:4',
        //     'title'               => 'nullable|string|max:200|min:5',
        //     'excerpt'             => 'nullable|string|max:600|min:10',
        //     'quip'                => 'nullable|string|max:200',
        //     'intro'               => 'nullable|string|max:600',
        //     'heading1'            => 'required|string|max:100|min:6',
        //     'heading2'            => 'nullable|string|max:100|min:6',
        //     'heading3'            => 'nullable|string|max:100|min:6',
        //     'heading4'            => 'nullable|string|max:100|min:4',
        //     'heading5'            => 'nullable|string|max:100|min:4',
        //     'heading6'            => 'nullable|string|max:100|min:4',
        //     'heading7'            => 'nullable|string|max:100|min:4',
        //     'heading8'            => 'nullable|string|max:100|min:4',
        //     'heading9'            => 'nullable|string|max:100|min:4',
        //     'heading10'           => 'nullable|string|max:100|min:4',
        //     'imageCredit1'        => 'nullable|string|max:400|min:10',
        //     'image_name'          => 'nullable' ,
        //     'image1_name'         => 'nullable' ,
        //     'image2_name'         => 'nullable' ,
        //     'image3_name'         => 'nullable' ,
        //     'image4_name'         => 'nullable' ,
        //     'image5_name'         => 'nullable' ,
        //     'image6_name'         => 'nullable' ,
        //     'image7_name'         => 'nullable' ,
        //     'image8_name'         => 'nullable' ,
        //     'image9_name'         => 'nullable' ,
        //     'image10_name'        => 'nullable' ,
        //     'paragraph1Heading1'  => 'nullable|string|max:600|min:80',
        //     'paragraph2Heading1'  => 'nullable|string|max:600|min:80',
        //     'paragraph3Heading1'  => 'nullable|string|max:600|min:80',
        //     'paragraph1Heading2'  => 'nullable|string|max:600|min:80',
        //     'paragraph2Heading2'  => 'nullable|string|max:600|min:80',
        //     'paragraph3Heading2'  => 'nullable|string|max:600|min:80',
        //     'paragraph1Heading3'  => 'nullable|string|max:600|min:80',
        //     'paragraph2Heading3'  => 'nullable|string|max:600|min:80',
        //     'paragraph3Heading3'  => 'nullable|string|max:600|min:80',
        //     'paragraph1Heading4'  => 'nullable|string|max:600|min:80',
        //     'paragraph2Heading4'  => 'nullable|string|max:600|min:80',
        //     'paragraph3Heading4'  => 'nullable|string|max:600|min:80',
        //     'paragraph1Heading5'  => 'nullable|string|max:600|min:80',
        //     'paragraph2Heading5'  => 'nullable|string|max:600|min:80',
        //     'paragraph3Heading5'  => 'nullable|string|max:600|min:80',
        //     'paragraph1Heading6'  => 'nullable|string|max:600|min:80',
        //     'paragraph2Heading6'  => 'nullable|string|max:600|min:80',
        //     'paragraph3Heading6'  => 'nullable|string|max:600|min:80',
        //     'paragraph1Heading7'  => 'nullable|string|max:600|min:80',
        //     'paragraph2Heading7'  => 'nullable|string|max:600|min:80',
        //     'paragraph3Heading7'  => 'nullable|string|max:600|min:80',
        //     'paragraph1Heading8'  => 'nullable|string|max:600|min:80',
        //     'paragraph2Heading8'  => 'nullable|string|max:600|min:80',
        //     'paragraph3Heading8'  => 'nullable|string|max:600|min:80',
        //     'paragraph1Heading9'  => 'nullable|string|max:600|min:80',
        //     'paragraph2Heading9'  => 'nullable|string|max:600|min:80',
        //     'paragraph3Heading9'  => 'nullable|string|max:600|min:80',
        //     'paragraph1Heading10' => 'nullable|string|max:600|min:80',
        //     'paragraph2Heading10' => 'nullable|string|max:600|min:80',
        //     'paragraph3Heading10' => 'nullable|string|max:600|min:80',
        // ]);

        // UPDATE STORED ARTICLE WITH NEW FIELDS
        $storedArticleToBeEdited = Blog::find($articleId);


        // dd($storedArticleToBeEdited);
// | add event listener
// | - this event listener will notify by email those signed up that a new article has been created

// $article                 = new Articles;
        $storedArticleToBeEdited->type           = $request->type ?? $storedArticleToBeEdited->type;
        $storedArticleToBeEdited->subtype        = $request->subtype ?? $storedArticleToBeEdited->subtype;
        $storedArticleToBeEdited->title          = $request->title ?? $storedArticleToBeEdited->title;
        $storedArticleToBeEdited->quip           = $request->quip ?? $storedArticleToBeEdited->quip;
        $storedArticleToBeEdited->intro          = $request->intro ?? $storedArticleToBeEdited->intro;

        // truncating || limiting the excerpt

        $storedArticleToBeEdited->excerpt        =  \Illuminate\Support\Str::limit($request->excerpt, 40) ?? $storedArticleToBeEdited->excerpt;

        $storedArticleToBeEdited->heading1       = $request->heading1  ?? $storedArticleToBeEdited->heading1;

        $storedArticleToBeEdited->heading2       = $request->heading2  ?? $storedArticleToBeEdited->heading2;
        $storedArticleToBeEdited->heading3       = $request->heading3  ?? $storedArticleToBeEdited->heading3;
        $storedArticleToBeEdited->heading4       = $request->heading4  ?? $storedArticleToBeEdited->heading4;
        $storedArticleToBeEdited->heading5       = $request->heading5  ?? $storedArticleToBeEdited->heading5;
        $storedArticleToBeEdited->heading6       = $request->heading6  ?? $storedArticleToBeEdited->heading6;
        $storedArticleToBeEdited->heading7       = $request->heading7  ?? $storedArticleToBeEdited->heading7;
        $storedArticleToBeEdited->heading8       = $request->heading8  ?? $storedArticleToBeEdited->heading8;
        $storedArticleToBeEdited->heading9       = $request->heading9  ?? $storedArticleToBeEdited->heading9;
        $storedArticleToBeEdited->heading10      = $request->heading10 ?? $storedArticleToBeEdited->heading10;

        $storedArticleToBeEdited->paragraph1Heading1 =  $request->paragraph1Heading1 ?? $storedArticleToBeEdited->paragraph1Heading1;
        $storedArticleToBeEdited->paragraph2Heading1 =  $request->paragraph2Heading1 ?? $storedArticleToBeEdited->paragraph2Heading1;
        $storedArticleToBeEdited->paragraph3Heading1 =  $request->paragraph3Heading1 ?? $storedArticleToBeEdited->paragraph3Heading1;
        $storedArticleToBeEdited->paragraph1Heading2 =  $request->paragraph1Heading2 ?? $storedArticleToBeEdited->paragraph1Heading2;
        $storedArticleToBeEdited->paragraph2Heading2 =  $request->paragraph2Heading2 ?? $storedArticleToBeEdited->paragraph2Heading2;
        $storedArticleToBeEdited->paragraph3Heading2 =  $request->paragraph3Heading2 ?? $storedArticleToBeEdited->paragraph3Heading2;
        $storedArticleToBeEdited->paragraph1Heading3 =  $request->paragraph1Heading3 ?? $storedArticleToBeEdited->paragraph1Heading3;
        $storedArticleToBeEdited->paragraph2Heading3 =  $request->paragraph2Heading3 ?? $storedArticleToBeEdited->paragraph2Heading3;
        $storedArticleToBeEdited->paragraph3Heading3 =  $request->paragraph3Heading3 ?? $storedArticleToBeEdited->paragraph3Heading3;
        $storedArticleToBeEdited->paragraph1Heading4 =  $request->paragraph1Heading4 ?? $storedArticleToBeEdited->paragraph1Heading4;
        $storedArticleToBeEdited->paragraph2Heading4 =  $request->paragraph2Heading4 ?? $storedArticleToBeEdited->paragraph2Heading4;
        $storedArticleToBeEdited->paragraph3Heading4 =  $request->paragraph3Heading4 ?? $storedArticleToBeEdited->paragraph3Heading4;
        $storedArticleToBeEdited->paragraph1Heading5 =  $request->paragraph1Heading5 ?? $storedArticleToBeEdited->paragraph1Heading5;
        $storedArticleToBeEdited->paragraph2Heading5 =  $request->paragraph2Heading5 ?? $storedArticleToBeEdited->paragraph2Heading5;
        $storedArticleToBeEdited->paragraph3Heading5 =  $request->paragraph3Heading5 ?? $storedArticleToBeEdited->paragraph3Heading5;
        $storedArticleToBeEdited->paragraph1Heading6 =  $request->paragraph1Heading6 ?? $storedArticleToBeEdited->paragraph1Heading6;
        $storedArticleToBeEdited->paragraph2Heading6 =  $request->paragraph2Heading6 ?? $storedArticleToBeEdited->paragraph2Heading6;
        $storedArticleToBeEdited->paragraph3Heading6 =  $request->paragraph3Heading6 ?? $storedArticleToBeEdited->paragraph3Heading6;
        $storedArticleToBeEdited->paragraph1Heading7 =  $request->paragraph1Heading7 ?? $storedArticleToBeEdited->paragraph1Heading7;
        $storedArticleToBeEdited->paragraph2Heading7 =  $request->paragraph2Heading7 ?? $storedArticleToBeEdited->paragraph2Heading7;
        $storedArticleToBeEdited->paragraph3Heading7 =  $request->paragraph3Heading7 ?? $storedArticleToBeEdited->paragraph3Heading7;
        $storedArticleToBeEdited->paragraph1Heading8 =  $request->paragraph1Heading8 ?? $storedArticleToBeEdited->paragraph1Heading8;
        $storedArticleToBeEdited->paragraph2Heading8 =  $request->paragraph2Heading8 ?? $storedArticleToBeEdited->paragraph2Heading8;
        $storedArticleToBeEdited->paragraph3Heading8 =  $request->paragraph3Heading8 ?? $storedArticleToBeEdited->paragraph3Heading8;
        $storedArticleToBeEdited->paragraph1Heading9 =  $request->paragraph1Heading9 ?? $storedArticleToBeEdited->paragraph1Heading9;
        $storedArticleToBeEdited->paragraph2Heading9 =  $request->paragraph2Heading9 ?? $storedArticleToBeEdited->paragraph2Heading9;
        $storedArticleToBeEdited->paragraph3Heading9 =  $request->paragraph3Heading9 ?? $storedArticleToBeEdited->paragraph3Heading9;
        $storedArticleToBeEdited->paragraph1Heading10 = $request->paragraph1Heading10 ?? $storedArticleToBeEdited->paragraph1Heading10;
        $storedArticleToBeEdited->paragraph2Heading10 = $request->paragraph2Heading10 ?? $storedArticleToBeEdited->paragraph2Heading10;
        $storedArticleToBeEdited->paragraph3Heading10 = $request->paragraph3Heading10 ?? $storedArticleToBeEdited->paragraph3Heading10;

// image urls
        $storedArticleToBeEdited->image_name     = $request->image_name   ?? $storedArticleToBeEdited->image_name;
        $storedArticleToBeEdited->image1_name    = $request->image1_name   ?? $storedArticleToBeEdited->image1_name;
        $storedArticleToBeEdited->image2_name    = $request->image2_name  ?? $storedArticleToBeEdited->image2_name;
        $storedArticleToBeEdited->image3_name    = $request->image3_name  ?? $storedArticleToBeEdited->image3_name;
        $storedArticleToBeEdited->image4_name    = $request->image4_name  ?? $storedArticleToBeEdited->image4_name;
        $storedArticleToBeEdited->image5_name    = $request->image5_name  ?? $storedArticleToBeEdited->image5_name;
        $storedArticleToBeEdited->image6_name    = $request->image6_name  ?? $storedArticleToBeEdited->image6_name;
        $storedArticleToBeEdited->image7_name    = $request->image7_name  ?? $storedArticleToBeEdited->image7_name;
        $storedArticleToBeEdited->image8_name    = $request->image8_name  ?? $storedArticleToBeEdited->image8_name;
        $storedArticleToBeEdited->image9_name    = $request->image9_name  ?? $storedArticleToBeEdited->image9_name;
        $storedArticleToBeEdited->image10_name   = $request->image10_name ?? $storedArticleToBeEdited->image10_name;
// image credits
        $storedArticleToBeEdited->imageCredit   = $request->imageCredit  ??  $storedArticleToBeEdited->imageCredit;
        $storedArticleToBeEdited->imageCredit1  = $request->imageCredit1 ?? $storedArticleToBeEdited->imageCredit1;
        $storedArticleToBeEdited->imageCredit2  = $request->imageCredit2 ?? $storedArticleToBeEdited->imageCredit2;
        $storedArticleToBeEdited->imageCredit3  = $request->imageCredit3 ?? $storedArticleToBeEdited->imageCredit3;
        $storedArticleToBeEdited->imageCredit4  = $request->imageCredit4 ?? $storedArticleToBeEdited->imageCredit4;
        $storedArticleToBeEdited->imageCredit5  = $request->imageCredit5 ?? $storedArticleToBeEdited->imageCredit5;
        $storedArticleToBeEdited->imageCredit6  = $request->imageCredit6 ?? $storedArticleToBeEdited->imageCredit6;
        $storedArticleToBeEdited->imageCredit7  = $request->imageCredit7 ?? $storedArticleToBeEdited->imageCredit7;
        $storedArticleToBeEdited->imageCredit8  = $request->imageCredit8 ?? $storedArticleToBeEdited->imageCredit8;
        $storedArticleToBeEdited->imageCredit9  = $request->imageCredit9 ?? $storedArticleToBeEdited->imageCredit9;
        $storedArticleToBeEdited->imageCredit10 = $request->imageCredit10?? $storedArticleToBeEdited->imageCredit10;




//  protect db from incorrect typed articles
        $givenType = ucwords($storedArticleToBeEdited->type);
        $expectedTypes = array('Featured','General','Shop');
        // If the given type matches with the expected types
        if (!in_array($givenType, $expectedTypes, true)) {
            // if not in array, return back with error
            return back()->with('error', 'unexpteced type entered');
            // dd('type not expected', $givenType);
        };



// check if correctly subtyped
        $givenSubtype = ucwords($storedArticleToBeEdited->subtype);
        // dd($givenSubtype);
        // TODO: Make this dynamic and changeable by the user later
        $expectedSubtypes = array('Health', 'Science', 'Philosophy', 'other');
            if (!in_array($givenSubtype, $expectedSubtypes, true))
            {
                dd('sub type not expected', $givenSubtype,
                    'given', $expectedSubtypes
            );
        }
        try {
            $storedArticleToBeEdited->save();
            return view('/welcome')->with('message', 'Successfully updated article');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy($blogId)
    {
        $blogToBeDeleted = Blog::find($blogId);
        try {
            $blogToBeDeleted->delete();
            return redirect()->route('articles/edit/index')->with('message', 'article deleted.');
        } catch (\Exception $e){
            $log_error = $e->getmessage();
            return redirect()->route('articles')->with('message', 'Failed to delete article - contact ofRoot customer service, or try again.');
        }
    }

}
