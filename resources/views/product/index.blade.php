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
    
    <div class="container mt-5">    
        <div class="row">
            @foreach ($products as $product)
            <div class="col-12 col-md-4 mb-2 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{Storage::url($product->image)}}" class="card-img-top" alt="{{$product->name}}">
                        <h5 class="card-title">{{$product->name}}</h5>
                        Prezzo consigliato:
                        <p class="card-text">{{$product->price}}</p>
                        Descrizione Prodotto:
                        <p class="card-text">{{$product->description}}</p>
                        
                        <a href="" class="btn btn-primary"></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
</x-layout>