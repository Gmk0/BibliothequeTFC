@extends("layouts.admin")
@section('title','etudiant')
@section("content")

<div class="container-fluid mt-5">
    {{-- <h2 class="mb-4">
        Laravel 7 Import and Export CSV & Excel to Database Example
    </h2>
    <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
            <div class="form-group text-left">
                <input type="file" name="file" class="form-control" id="">

            </div>
        </div>
        <button class="btn btn-primary">Import data</button>
        <a class="btn btn-success" href="{{ route('file-export') }}">Export data</a>
    </form>--}}
    @livewire("admin.student-list")
</div>

@endsection