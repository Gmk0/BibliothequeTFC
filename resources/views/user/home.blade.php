@extends("layouts.user")

@section("content")
<section class=" container-fluid  mb-3">
    <div id="carouselBasicExample" class="carousel slide carousel-fade" data-ride="carousel">
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


<div class="container-fluid  rounded bg-white  p-3">


    <div class="row mt-5 justify-content-between">
        <div class="col-md-4 ">
            <img src="{{asset('images/read2.png')}}" width="600px" alt="" class="rounded">
        </div>
        <div class="col-md-6 shadow m-5 p-3  bg-white rounded">
            <h4 class="text-center">Decouvertes</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, sit. Porro dolor dolores, minus enim
                pariatur, optio iure reprehenderit assumenda neque harum velit corporis beatae quaerat asperiores
                libero. Aliquam, sit?</p>


        </div>
    </div>

</div>

<section class="container-fluid   p-2 rounded">

    <div class="m-2">
        <h3 class="text-start">Last Publication</h3>
    </div>

    <div class="row m-2">

        @foreach ($lastTravails as $travail)
        <div class="col-md-3">
            <div class="card rounded">
                <img class="card-img-top" src="{{asset('images/read2.png')}}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title"><b>{{$travail->sujet}}</b></h4>
                    <p class="card-text">{{$travail->categorie}}</p>
                    <p class="card-text"><span class="text-muted">{{$travail->created_at}}</span></p>
                </div>

            </div>

        </div>
        @endforeach


    </div>
</section>

<section class="container  px-3">
    <div class="mb-5">
        <h3 class="text-start">Domaine D'Expertise</h3>
    </div>
    <div class="row mx-auto px-3">
        @for ($i = 0; $i < 6; $i++) <div class="col-md-4 p-3 rounded-right">
            <div class="card ">
                <div class="card-body">
                    <h4 class="card-title">Reseaux informatique</h4><span class="float-right"><i
                            class="fa fa-arrow-right" aria-hidden="true"></i></span>
                    <p class="card-text"><span class="text-muted">320</span></p>
                </div>
            </div>
    </div>
    @endfor

    </div>
</section>

@endsection