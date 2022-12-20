<div class="container-fluid">
    <div class="row  min-vh-100 mt-5">

        <div class="col-12 col-sm-3 col-xl-2 px-sm-2 p-2 m-2">
            <div class="">
                <label for="" class="form-label">Categorie</label>
                <select class="form-control form-control-sm" name="" id="" wire:model.debounce.500ms="categorie">
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
                <select class="form-control form-control-sm" name="" id="" wire:model.debounce.800ms="order">
                    <option selected>Select one</option>
                    <option value="asc">ASC</option>
                    <option value="desc">DESC</option>

                </select>

            </div>
            <div class="">
                <label for="" class="form-label">name</label>
                <select class="form-control form-control-sm" name="" id="" wire:model.debounce.800ms="name">
                    <option selected>Select one</option>
                    <option value="SUJET">SUJET</option>
                    <option value="created_at">ANNEE ETUDES</option>

                </select>
            </div>
            <div class="">
                <label for="" class="form-label">PAGINATE</label>
                <select class="form-control form-control-sm" name="" id="" wire:model.debounce.800ms="sort">
                    <option selected>Select one</option>
                    <option value="10">10</option>
                    <option value="50">50</option>
                    <option value="75">75</option>
                    <option value="100">100</option>
                </select>

            </div>
        </div>
        <div class="col d-flex flex-column h-sm-100 m-1">
            <form wire:submit.prevent='searchiTem'>
                <div class="form-group">
                    <div class="input-group input-group-lg">
                        <input type="search" class="form-control form-control-sm form-control form-control-sm-lg" placeholder="Type your keywords here"
                            wire:model.defer="searchs">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-lg btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
          

            <main class="">

                @forelse ($works as $travail)

                <div class="card">

                    <div class="card-body">
                        <div class="float-right">{{$travail->created_at}}</div>
                        <h3 class="card-title"><strong>{{$travail->sujet}}</strong></h3>
                        <p class="card-text"><a href="#"
                                wire:click="searchiTem('{{$travail->categorie}}')">{{$travail->categorie}}</a></p>
                        <p class="card-text"><a href="">{{$travail->faculte}}</a></p>
                        <p class="card-text"> Par {{$travail->etudiant}}</p>
                        <p class="card-text">{{$travail->viewCounter}}</p>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer bg-white text-muted">
                        <button wire:click="viewCount({{ $travail->id }})"
                            class="btn btn-outline-primary">Consulter</button>
                    </div>
                </div>

                @empty
                <div>
                    <h4 class="text-center">No work found</h4>
                </div>
                @endforelse
            </main>
            <footer class="row  py-4 mt-auto">
                {{$works->Links()}}
            </footer>
        </div>
    </div>
</div>