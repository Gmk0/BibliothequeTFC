<div>



    <div class="container p-3 mt-auto">
       
      <div class="row mt-4">
        <div class="col-md-4">
          <div class="row justify-content-start align-items-start ">
            <div class="mb-3">
              <label for="" class="form-label text-muted">Sujet</label>
             <h5 class="">{{$travail->sujet}}</h5>
            </div>

            <div class="mb-1">
              <label for="" class="form-label text-muted">Categorie</label>
             <h5 class="">{{$travail->categorie}}</h5>
            </div>
            <div class="mb-1">
              <label for="" class="form-label text-muted">Domaine</label>
             <h5 class="">{{$travail->faculte}}</h5>
            </div>
            <div class="mb-1">
              <label for="" class="form-label text-muted">Realiser Par</label>
             <h5 class="">{{$travail->etudiant}}</h5>
            </div>
            <div class="mb-3">
              <label for="" class="form-label text-muted">Vue</label>
              <div class=" w-25 p-1 border border-primary rounded-lg "><i class="fas fa-eye"></i> {{$travail->viewCounter}}</div>
            </div>
            <div class="mb-1">
              
            <button class="btn btn-outline-primary">Download</button>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div id="viewer" style="width: 100%; height: 500px;"></div>
        </div>
    
      </div>
       
        
      
    </div>

    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
</div>

@section('script')
<script type="text/javascript" src="https://cloudpdf.io/viewer.min.js"></script>
<script>
  const config = { 
    documentId: '869c007d-e2e6-44a1-a765-d8855f7a1e63',
    darkMode: true, 
  };
  CloudPDF(config, document.getElementById('viewer')).then((instance) => {
    
  });
</script>

@endsection

