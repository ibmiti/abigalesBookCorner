<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
</div><style>
#socials {
  margin-top: -80px;
}
#footer {
  height: 100px;
}
a {
  color: black;
}
</style>
@php
    $uri = Request::getRequestUri();

@endphp
    <!-- Comment out before production <link href="{{ asset('css/main.css') }}" rel="stylesheet"> -->
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- we will allow all of the indexBaby, indexChil... etc files to have their own defined footer for now. -->

    <div id = 'footer' class="text-center" >
        <footer class="page-footer font-small cyan darken-3 mt-5">
                <div class="row">
                    <div class="col-md-12 py-5 text-center">
                        <!-- do not show this to /contact view -->
                        <p style="color:grey" class="text-center">Hello You, Follow Us Socially.</p>
                        <button  type="button" class="btn btn-dark"><a href="https://twitter.com/BeinghmnH" class="icon brands fa-twitter"><span class="label">Twitter</span></a></button>
                        <!-- <li><a href="" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li> -->
                        <!-- <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li> -->
                        <button type="button" class="btn btn-dark"><a href="https://www.instagram.com/wearebeinghmn/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></button>
                        <!-- <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li> -->
                    </div>
                </div>
            <div id="socials" translate="no" class="footer-copyright text-center py-3 mt-1">
                BeingHMN an Ofroot company
                <!-- <a href="">ofRoot.com</a> -->
            </div>
        </footer>
    </div>

<script type="text/javascript">
// fade out footer element onload, activate func in 3 seconds
  let footerElement = document.getElementById('footer');    // select the footer element by id=footer
  setTimeout(function(){                                    // function which runs after x amount of time passes.
    let fadeOutEffect = setInterval(function () {
        if (!footerElement.style.opacity) {
          footerElement.style.opacity = 1;
        }
        if (footerElement.style.opacity > 0) {
          footerElement.style.opacity -= 0.1;
        } else {
            clearInterval(fadeOutEffect);
        }
    }, 200);
  }, 3000);
  let fadeInEffect = setTimeout(function(){
    var opacity = 0;
    var intervalID = 0;
    if (opacity < 1) {
      opacity = opacity + 1;
      footerElement.style.opacity = opacity
    } else {
        clearInterval(intervalID);
    }
  }, 30000 );
</script>
