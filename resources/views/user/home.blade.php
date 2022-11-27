@extends("layouts.user")

@section("content")
<section class=" container-fluid rounded">
    <div id="carouselBasicExample" class="carousel slide carousel-fade rounded" data-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-target="#carouselBasicExample" data-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-target="#carouselBasicExample" data-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-target="#carouselBasicExample" data-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner">
            <!-- Single item -->
            <div class="carousel-item active">
                <img src="{{asset('images/bg.png')}}" height="600px" class="d-block w-100" alt="Sunset Over the City" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Painmain</h5>
                    <p>
                        Nulla vitae elit libero, a pharetra augue mollis interdum.
                    </p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img src="{{asset('images/bg.png')}}" height="600px" class="d-block w-100" alt="Canyon at Nigh" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>les Pains</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img src="{{asset('images/bg2.png')}}" height="600px" class="d-block w-100"
                    alt="Cliff Above a Stormy Sea" />
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-target="#carouselBasicExample" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselBasicExample" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>


<section class="container-fluid mt-2 vh-100">

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Quote</p>
                        <footer class="blockquote-footer">Footer <cite title="Source title">Source title</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="background-color:orangered; border-color:darkblue;">
                <img class="card-img-top" src="holder.js/100x180/" alt="Title">
                <div class="card-body">

                    <p class="card-text">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora labore optio sapiente odio
                        harum? Aliquam amet, repudiandae est molestiae magni numquam ducimus quia incidunt similique
                        assumenda, debitis vel provident aut!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid vh-100">

    <h3 class="text-center">Last Publication</h3>
    <div class="row">

        @for ($i = 0; $i < 10; $i++) <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <p class="card-text">Content</p>
                </div>

            </div>
    </div>
    @endfor

    </div>
</section>

@endsection