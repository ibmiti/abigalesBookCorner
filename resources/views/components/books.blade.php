@foreach($bookProducts as $book)
    <div class="col mb-5">
        <div class="card h-100">
            <!-- Sale badge-->
            <!-- TODO Get this to work -->
            @if(isset($bookProducts))
                @if($bookProductsOnSale == true)
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                    <!-- If item is on sale, then display -->
                            sale
                    </div>
                @endif
            @endif
            <!-- Product image-->
            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">Special Item</h5>
                    <!-- Product reviews-->
                    <div class="d-flex justify-content-center small text-warning mb-2">
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                        <div class="bi-star-fill"></div>
                    </div>
                    <!-- Product price-->
                    <!-- TODO if on sale place previous price here -->
                    <!-- <span class="text-muted text-decoration-line-through">$20.00</span> -->
                    $book->price
                </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
            </div>
        </div>
    </div>
@endforeach
