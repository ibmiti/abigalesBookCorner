<style>

@import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Anton&family=Rampart+One&family=Roboto:wght@700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Anton&family=Rampart+One&family=Roboto:wght@700&display=swap');
#h1-header-text {
  font-family: 'Rampart One', sans-serif;
  font-weight: 700;
}
#header-text {
  font-family: 'Anton', sans-serif;
  font-family: 700;
}

body {
    /* font-family: 'Raleway', 'Roboto'; */
    font-family: 'Roboto Condensed', sans-serif;
}
.col-lg  {
    /* font-family: 'Raleway', 'Roboto'; */
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 26px;
}

.slab {
        /* margin: 10px 10px 10px 10px;   */
        border: 1px solid;
        position: relative;
        display: inline-block;
        width: 100%;
        height: 100%;
        background-color: #fff;
        border-radius: 5px;
        border-color: #fff;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .slab::after {
        content: "";
        border-radius: 5px;
        position: absolute;
        z-index: -1;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        opacity: 0;
        -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }
    .slab:hover {
        -webkit-transform: scale(0.99, 0.99);
        transform: scale(0.99, 0.99);
    }
    .slab:hover::after {
        opacity: 1;
    }
    #title {
        line-height: 1.5;
        letter-spacing: .45px;
        font-family: 'Roboto Condensed', sans-serif;
    }
    a {
        text-decoration: none;
    }

    .white-space {
        margin: 8%;
        padding: 5%;
    }

    .colorstrip{
        width: 100%; height: 2px;
        border-style: solid;
        border-color: black;
        background-color: black;
}


</style>

<section id="popup" class="white-space wow fadeIn mt-5">
    <div class="m-3 row" style="color:white; background-image: url('https://images.unsplash.com/photo-1622227920933-7fcd7377703f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8Mnw4OTYxMTk4fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=800&q=60'); ">
      <div class="col-12 text-center mt-4 mb-5">
        <h1 id="header-text">Get ready for our upcoming childrens book!</h1>
            <button class="btn btn-danger mt-3">
               <a style="color:white;"  href="https://www.amazon.com/dp/B09TDS26D8/ref=cm_sw_r_sms_api_glt_i_Q9MBWS63YX0B7S6HX17Q">Find it here.</a>
            </button>
      </div>
      <div class="colorstrip"></div>
    </div>
</section>

<script type='text/javascript'>

// - logic :
// - on document.ready set timer of 3 seconds, then show.
//      - after 6 seconds remove the component
//  - place component at bottom of screen after 9 seconds

// on page load hide
let popup = document.getElementById('popup');

// immediately onload hide this component.
// alternative solution : hide with css, then show after x amount of secs.
setTimeout(function(){
    popup.style.display = 'none';
},0);

setTimeout(function(){
    // after 3 seconds
    popup.style.display = 'inline';
},15000);

// remove popup, aprox 2.5 mins after?
setTimeout(function(){
    popup.style.display = 'none';
}, 120000);


</script>
