<div class="container-fluid">
    <!-- <h2 class="text-center display-4">TRAVAUX</h2>

    <div class="row">

        <div class="col-md-3">


            <div class="">
                <label for="" class="form-label">Categorie</label>
                <select class="form-control" name="" id="" wire:model.debounce.500ms="categorie">
                    <option value="">Categorie</option>
                    <option value="ECONOMIE">ECONOMIE</option>
                    <option value="SCIENCES POLITIQUE">SCIENCES POLITIQUE</option>
                    <option value="COMMUNICATION SOCIAL">COMMUNICATION SOCIAL</option>
                    <option value="THEOLOGIE">THEOLOGIE</option>
                    <option value="SCIENCES INFORMATIQUE">SCIENCES INFORMATIQUE</option>
                </select>
            </div>
            <div class="">
                <label for="" class="form-label">Sort</label>
                <select class="form-control" name="" id="" wire:model.debounce.800ms="order">
                    <option selected>Select one</option>
                    <option value="asc">ASC</option>
                    <option value="desc">DESC</option>

                </select>

            </div>
            <div class="">
                <label for="" class="form-label">name</label>
                <select class="form-control" name="" id="" wire:model.debounce.800ms="name">
                    <option selected>Select one</option>
                    <option value="SUJET">SUJET</option>
                    <option value="created_at">ANNEE ETUDES</option>

                </select>
            </div>
            <div class="">
                <label for="" class="form-label">PAGINATE</label>
                <select class="form-control" name="" id="" wire:model.debounce.800ms="sort">
                    <option selected>Select one</option>
                    <option value="10">10</option>
                    <option value="50">50</option>
                    <option value="75">75</option>
                    <option value="100">100</option>
                </select>

            </div>


        </div>

        <div class="col-md-9">

            <div class="form-group">
                <div class="input-group input-group-lg">
                    <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here"
                        wire:model.debounce.800ms="searchs">
                    <div class="input-group-append">
                        <button type="" class="btn btn-lg btn-default">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>




            @foreach ($works as $travail)

            <div class="card ">
                <div class="card-header">
                    <p class="card-text font-weigth-bold">{{$travail->categorie}}</p>
                </div>
                <div class="card-body">
                    <div class="float-right">{{$travail->created_at}}</div>
                    <h3 class="card-title"><strong>{{$travail->sujet}}</strong></h3>
                    <p class="card-text"><a href="">{{$travail->faculte}}</a></p>
                    <p class="card-text"> Par {{$travail->etudiant}}</p>
                    <p class="card-text"></p>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{route('viewWorks',[$travail->id])}}" class="btn btn-outline-primary">view</a>
                </div>
            </div>
            @endforeach


            {{$works->Links()}}
        </div>

    </div>
</div>


End Main Content-->



    <div class="container-fluid">
        <div class="row vh-100  mt-5">

            <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0">
                <div class="">
                    <label for="" class="form-label">Categorie</label>
                    <select class="form-control" name="" id="" wire:model.debounce.500ms="categorie">
                        <option value="">Categorie</option>
                        <option value="ECONOMIE">ECONOMIE</option>
                        <option value="SCIENCES POLITIQUE">SCIENCES POLITIQUE</option>
                        <option value="COMMUNICATION SOCIAL">COMMUNICATION SOCIAL</option>
                        <option value="THEOLOGIE">THEOLOGIE</option>
                        <option value="SCIENCES INFORMATIQUE">SCIENCES INFORMATIQUE</option>
                    </select>
                </div>
                <div class="">
                    <label for="" class="form-label">Sort</label>
                    <select class="form-control" name="" id="" wire:model.debounce.800ms="order">
                        <option selected>Select one</option>
                        <option value="asc">ASC</option>
                        <option value="desc">DESC</option>

                    </select>

                </div>
                <div class="">
                    <label for="" class="form-label">name</label>
                    <select class="form-control" name="" id="" wire:model.debounce.800ms="name">
                        <option selected>Select one</option>
                        <option value="SUJET">SUJET</option>
                        <option value="created_at">ANNEE ETUDES</option>

                    </select>
                </div>
                <div class="">
                    <label for="" class="form-label">PAGINATE</label>
                    <select class="form-control" name="" id="" wire:model.debounce.800ms="sort">
                        <option selected>Select one</option>
                        <option value="10">10</option>
                        <option value="50">50</option>
                        <option value="75">75</option>
                        <option value="100">100</option>
                    </select>

                </div>
            </div>
            <div class="col d-flex flex-column h-sm-100">
                <div class="form-group">
                    <div class="input-group input-group-lg">
                        <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here"
                            wire:model.debounce.800ms="searchs">
                        <div class="input-group-append">
                            <button type="" class="btn btn-lg btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <main class="">

                    @foreach ($works as $travail)

                    <div class="card">

                        <div class="card-body">
                            <div class="float-right">{{$travail->created_at}}</div>
                            <h3 class="card-title"><strong>{{$travail->sujet}}</strong></h3>
                            <p class="card-text"><a href="#"
                                    wire:click="searchiTem('{{$travail->categorie}}')">{{$travail->categorie}}</a></p>
                            <p class="card-text"><a href="">{{$travail->faculte}}</a></p>
                            <p class="card-text"> Par {{$travail->etudiant}}</p>
                            <p class="card-text"></p>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="{{route('viewWorks',[$travail->id])}}" class="btn btn-outline-primary">view</a>
                        </div>
                    </div>
                    @endforeach
                </main>
                <footer class="row bg-light py-4 mt-auto">
                    {{$works->Links()}}
                </footer>
            </div>
        </div>
    </div>

</div>