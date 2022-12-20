<div>



    <div class="container">
       
        <div class="row justify-content-center">
            <div class="col-md-4">
                LOLO
            </div>
            <div id="" class="col-lg-8 mb-3">
                <div class="cart" id="pfd-viewer"></div>
            </div>
            
        </div>

    </div>

    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
</div>

@section('script')
   <script>
    PDFObject.embed("{{asset('travails/pdf.pdf')}}","#pfd-viewer",{height:"50rem"})
    </script> 
@endsection

