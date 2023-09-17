@if(session()->has('success'))
    <div class="btn btn-primary fixed-top"
         id="flash-message">
        <p>{{ session('success') }}</p>
    </div>
@endif
<!-- Hide the flash message after 3 seconds -->
<script>
    let flashMessage = document.getElementById('flash-message');
    setTimeout(function(){
        flashMessage.style.display = 'none';
    }, 4000);
</script>
