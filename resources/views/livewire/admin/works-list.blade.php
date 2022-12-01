@section('title',' Travail')
<div>

    <div>

        <div class="ROW">
            <div class="col-md-4">
                <button class="btn btn-outline-primary" data-toggle="modal" data-target="#modal-lg">
                    Ajouter
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
                        <h3 class="card-title">Travail</h3>

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
                                <button type="button" x-on:click="$wire.deleteTravaux(selection)"
                                    class="btn btn-default btn-sm button-toggle">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                                <button x-show="selection.length > 0" x-on:click="$wire.activeMultiples(selection)"
                                    class="btn  btn-sm button-toggle"><span
                                        class="badge badge-pill badge-success ">activer</span></button>
                                <button x-show="selection.length > 0" x-on:click="$wire.desactiveMultiple(selection)"
                                    class="btn button-toggle"><span
                                        class="badge badge-pill badge-warning">disabled</span></button>
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

                                {{$travaux->links()}}
                            </div>
                            <!-- /.btn-group -->
                        </div>
                        <!-- /.float-right -->
                    </div>
                    <table class="table table-hover text-nowrap travail-list">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>sujet</th>
                                <th>Faculte</th>
                                <th>Categorie</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($travaux as $travail )
                            <tr>
                                <td><input type="checkbox" name="id" value="{{$travail->id}}" x-model="selection">
                                </td>
                                <td>{{$travail->id}}</td>
                                <td>{{$travail->sujet}}</td>
                                <td>{{$travail->faculte}}</td>
                                <td>{{$travail->categorie}}</td>
                                @if($travail->status ==1)
                                <td><button class="btn"><span
                                            class="badge badge-pill badge-success">activer</span></button>
                                </td>
                                @else
                                <td> <button class="btn"><span
                                            class="badge badge-pill badge-warning">desactiver</span></button>
                                </td>
                                @endif

                                <td class="text-center">
                                    <button class="btn btn-link"
                                        wire:click="confirmDeletePromo({{$travail->id}},'{{$travail->intitule}}')"><i
                                            class="fa fa-trash-alt" aria-hidden="true"></i></button>
                                    <button class="btn btn-link" wire:click="goToEdit({{$travail->id}})"
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
                            <button type="button" x-on:click="$wire.deleteTravaux(selection)"
                                class="btn btn-default btn-sm">
                                <i class="far fa-trash-alt"></i>
                            </button>
                            <button x-show="selection.length > 0" x-on:click="$wire.activeMultiples(selection)"
                                class="btn  btn-sm"><span class="badge badge-pill badge-success">activer</span></button>
                            <button x-show="selection.length > 0" x-on:click="$wire.desactiveMultiple(selection)"
                                class="btn "><span class="badge badge-pill badge-warning">disabled</span></button>
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

                            {{$travaux->links()}}
                        </div>
                        <!-- /.btn-group -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>
</div>



@section('script')
<script>
    $(function () {
    //Enable check and uncheck all functionality
    $('.button-toggle').click(function () {
        $('input[name=\'checkbox\']').prop('checked', false)
    })

   
  })*/


</script>

@endsection