<x-layout>
    <div class="container-fluid mt-4">    
        <div class="row justify-content-center bg-success">
            <div class="col-12 col-md-6 m-3">
                <h1 class="text-center">
                    
                </h1>
            </div>
        </div>
    </div>
    
    <div class="container mt-5">    
        <div class="row justify-content-center p-5">
            <div class="col-12 col-md-8 shadow">
                <form method="POST" action="{{route('storeProduct')}}" enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">
                        <label for="inputName" class="form-label">Nome prodotto</label>
                        <input name="name" type="text" class="form-control" id="inputName" aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="inputPrice" class="form-label">Prezzo Indicativo</label>
                        <input name="price" type="text" class="form-control" id="InputPrice" aria-describedby="priceHelp">
                    </div>
                    <div class="mb-3">
                        <label for="InputDescription" class="form-label">Descrizione prodotto</label>
                        <textarea name="description" id="InputDescription" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="inputImage" class="form-label">Immagine:</label>
                        <input name="image" type="file" class="form-control" id="inputImage" aria-describedby="imageHelp">
                    </div>

                    <button type="submit" class="btn btn-primary">Crea Prodotto</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>