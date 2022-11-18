<div class="container">
    <h2 class="text-center display-4">Enhanced Search</h2>
    <div class="row">

        <div class="col-md-4">
            <label for="" class="form-label"></label>
            <select class="form-control" name="" id="" wire:model.debounce.500ms="categorie">
                <option value="">Categorie</option>
                <option value="ECONOMIE">ECONOMIE</option>
                <option value="SCIENCES POLITIQUE">SCIENCES POLITIQUE</option>
                <option value="COMMUNICATION SOCIAL">COMMUNICATION SOCIAL</option>
                <option value="THEOLOGIE">THEOLOGIE</option>
                <option value="SCIENCES INFORMATIQUE">SCIENCES INFORMATIQUE</option>
            </select>
        </div>
        <div class="col-md-3 mb-3">
            <label for="" class="form-label">Sort</label>
            <select class="form-control" name="" id="" wire:model.debounce.800ms="order">
                <option selected>Select one</option>
                <option value="asc">ASC</option>
                <option value="desc">DESC</option>

            </select>

        </div>
        <div class="col-md-3 mb-3">
            <label for="" class="form-label">name</label>
            <select class="form-control" name="" id="" wire:model.debounce.800ms="name">
                <option selected>Select one</option>
                <option value="SUJET">SUJET</option>
                <option value="created_at">ANNEE ETUDES</option>

            </select>
        </div>
        <div class="col-md-2 mb-2">
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
    <div class="form-group">
        <div class="input-group input-group-lg">
            <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here"
                wire:model.debounce.500ms="searchs">
            <div class="input-group-append">
                <button type="" class="btn btn-lg btn-default">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div>
    <div>content</div>
    @foreach ($works as $travail)
    <div>
        <div class="card">
            <div class="card-header">
                <p class="card-text font-weigth-bold">{{$travail->categorie}}</p>
            </div>
            <div class="card-body">
                <div class="float-right">{{$travail->created_at}}</div>
                <h3 class="card-title">{{$travail->sujet}}</h3>
                <p class="card-text"> by {{$travail->etudiant}}</p>
            </div>
            <div class="card-footer text-muted">
                <a href="" class="btn btn-outline-primary">view</a>
            </div>
        </div>
    </div>
    @endforeach

    {{$works->Links()}}
</div>


<!--End Main Content-->
</div>
</div>