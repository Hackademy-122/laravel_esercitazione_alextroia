<x-layout>

    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<div class="container-fluid mt-4">    
    <div class="row justify-content-center bg-success">
        <div class="col-12 col-md-6 m-3">
            <h1 class="text-center">
                Laravel Progetto1
            </h1>
        </div>
    </div>
   </div>

</x-layout>