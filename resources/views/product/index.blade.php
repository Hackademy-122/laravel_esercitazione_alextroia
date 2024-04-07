<x-layout>

<div class="container-fluid mt-4">    
    <div class="row justify-content-center bg-success">
        <div class="col-12 col-md-6 m-3">
            <h1 class="text-center">
                Laravel Progetto1
            </h1>
        </div>
    </div>
   </div>

   <div class="container-fluid">    
    <div class="row justify-content-center bg-success">
        @foreach ($products as $product)
            
        <div class="col-12 col-md-6 m-3">
            <h1 class="text-center">
                {{$product->name}}
            </h1>
        </div>
        @endforeach
    </div>
   </div>

</x-layout>