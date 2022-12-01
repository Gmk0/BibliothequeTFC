<div>

    <div>

        <div>

            <div class="ROW">
                <div class="col-md-4 d-flex justify-content-around">
                    <button class="btn btn-outline-primary" data-toggle="modal" data-target="">
                        Ajouter
                    </button>
                    <button class="btn btn-secondary" data-toggle="modal" data-target="#modal-lg">
                        Importer
                    </button>
                </div>

            </div>


        </div>
        <div x-data="{selection: @entangle('selection').defer, selectAll : false,
                    
                    toggleAllCheckboxes() {
                        this.selectAll = !this.selectAll
                        this.selection = [];
    
                        checkboxes = document.querySelectorAll('input[name=id]');
                        [...checkboxes].map((el) => {
                            el.checked = this.selectAll;
                            (this.selectAll) ? this.selection.push(el.value) : this.selection = [];
                        })
                    }}" class=" mt-5">



            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">etudiant</h3>

                            <div class="card-tools d-flex">
                                <div class="input-group input-group-sm col-md-3">

                                    <select class="form-control" name="" id="" wire:model.debounce.800ms="sort">

                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="75">75</option>
                                        <option value="100">100</option>
                                        <option value="200">200</option>
                                        <option value="300">300</option>
                                    </select>
                                </div>
                                <div class="input-group input-group-sm" style="width: 300px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search" wire:model.debounce.800ms="search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <div class="mailbox-controls">
                                <!-- Check all button -->
                                <input type="checkbox" name="checkbox" class="btn btn-default btn-sm checkbox-toggle"
                                    x-on:click="toggleAllCheckboxes()" wire:model="check">
                                <div class="btn-group">
                                    <button type="button" x-on:click="$wire.deleteetudiants(selection)"
                                        class="btn btn-default btn-sm button-toggle">
                                        <i class="far fa-trash-alt"></i>
                                    </button>

                                </div>


                                <!-- /.btn-group -->
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-sync-alt"></i>
                                </button>

                                <button wire:loading class="btn btn-link" type="button" disabled>
                                    <span class="spinner-border spinner-grow-sm" role="status"
                                        aria-hidden="true"></span>
                                    Loading...
                                </button>
                                <div class="float-right">

                                    {{$etudiants->links()}}
                                </div>
                                <!-- /.btn-group -->
                            </div>
                            <!-- /.float-right -->
                        </div>
                        <table class="table table-hover text-nowrap etudiant-list">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Matricule</th>
                                    <th>name</th>
                                    <th>Lastname</th>
                                    <th>Faculte</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($etudiants as $etudiant )
                                <tr>
                                    <td><input type="checkbox" name="id" value="{{$etudiant->id}}" x-model="selection">
                                    </td>
                                    <td>{{$etudiant->matricule}}</td>
                                    <td>{{$etudiant->name}}</td>
                                    <td>{{$etudiant->lastname}}</td>
                                    <td>{{$etudiant->faculte}}</td>
                                    <td>{{$etudiant->email}}</td>


                                    <td class="text-center">
                                        <button class="btn btn-link"
                                            wire:click="confirmDeletePromo({{$etudiant->id}},'{{$etudiant->intitule}}')"><i
                                                class="fa fa-trash-alt" aria-hidden="true"></i></button>
                                        <button class="btn btn-link" wire:click="goToEdit({{$etudiant->id}})"
                                            data-target="#modal-promotion-edit"><i class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                                @empty
                                <h4 class="text-center">not data found</h4>
                                @endforelse


                            </tbody>
                            <tfoot>

                            </tfoot>

                        </table>

                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer p-0">
                        <div class="mailbox-controls">
                            <!-- Check all button -->
                            <input type="checkbox" name="checkbox" class="btn btn-default btn-sm checkbox-toggle"
                                x-on:click="toggleAllCheckboxes()" wire:model="check">
                            <div class="btn-group">
                                <button type="button" x-on:click="$wire.deleteetudiants(selection)"
                                    class="btn btn-default btn-sm">
                                    <i class="far fa-trash-alt"></i>
                                </button>

                            </div>


                            <!-- /.btn-group -->
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-sync-alt"></i>
                            </button>

                            <button wire:loading class="btn btn-link" type="button" disabled>
                                <span class="spinner-border spinner-grow-sm" role="status" aria-hidden="true"></span>
                                Loading...
                            </button>
                            <div class="float-right">

                                {{$etudiants->links()}}
                            </div>
                            <!-- /.btn-group -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>


    <div wire:ignore.self class="modal fade" id="modal-lg" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">domaine</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="importFile">
                        <p>
                            Veuillez importer un fichier en formant .xls avec colonne
                            <strong> Matricule;Name; LastName;Faculte;Email;Password </strong>
                        </p>
                        <div class="row mb-3">
                            <label for="name" class="col-md-12 col-form-label ">{{ __('file') }}</label>

                            <div class="form-goup">
                                <input id="name" type="file" class="form-control @error('file') is-invalid @enderror"
                                    autocomplete="name" autofocus wire:model.defer="file">

                                @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"
                                wire:click="cleanModal()">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>


                    </form>

                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
</div>