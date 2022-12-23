<div class="container mt-5 mx-3">
    {{-- Be like water. --}}
<div class="row justify-content-center">
   <div class="col-md-10">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">ADD TRAVAIILS</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form wire:submit.prevent="store">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Sujet</label>
                    <input type="text" class="form-control" id="" placeholder="Enter email"
                        wire:model.defer="travail.sujet">
                </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label for="" class="form-label">Categorie</label>
                        <select class="form-control form-control-lg" name="" id="" wire:model.defer="travail.categorie">
                            <option selected>categorie</option>
                            <option value="MEMOIRE">MEMOIRE</option>
                            <option value="THESE">THESE</option>
                            <option value="TFC">TFC</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label for="" class="form-label">Promotion</label>
                        <select class="form-control form-control-lg" name="" id="" wire:model.defer="travail.promotion">
                            <option selected>Faculte</option>
                            <option value="ECONOMIE">ECONOMIE</option>
                            <option value="SCIENCES POLITIQUE">SCIENCES POLITIQUE</option>
                            <option value="COMMUNICATION SOCIAL">COMMUNICATION SOCIAL</option>
                            <option value="THEOLOGIE">THEOLOGIE</option>
                            <option value="SCIENCES INFORMATIQUE">SCIENCES INFORMATIQUE</option>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Annee d'etudes</label>
                    <input type="text" class="form-control" id="" placeholder=""
                        wire:model.defer="travail.annee">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Details page</label>
                    <input type="" class="form-control" id="exampleInputPassword1" placeholder=""
                        wire:model.defer="travail.pages">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">NOM COMPLET ETUDIANT</label>
                    <input type="text" class="form-control" id="" placeholder="NOM POSTNOM PRENOM"
                        wire:model.defer="travail.etudiant">
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    
                        <div class="">
                            <input type="file" class="form-control" wire:model="file">

                        </div>
                       
                

                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">terms confiditons</label>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" wire:loading.attr="disabled" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
   </div>
</div>
   
</div>

@section('script')

<script>
     window.addEventListener('showSuccessMessage', event=> {
   
        Swal.fire({
            position: 'top-end',
            icon:'success',
            toast: true,
            title:"operatione reussie",
            text:event.detail.message,
            showConfirmButton: false,
            timer:6000

        });

    });
</script>
    
@endsection