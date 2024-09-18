
<x-app-layout>
<main>
<section class="container-fluis">
    <div class="mt-5 pt-5 row containerdetails">
        @foreach ($var_produit as $art)
            
        
           <div class="col-lg-7 col-md-7 col-sm-6 col-12 image">
            <div class="w-100 rounded-lg shadow-lg im">
                <img id="mainImage" class="rounded-lg shadow-lg imgdetail" src="{{asset('uploads/'.$art->image)}}" alt="">
            </div>
            <div class=" p-2 d-flex justify-content-around imgs">
            <div class="p-2 d-none d-md-block imagecliquable"><img class="img-fluid" src="{{asset('uploads/'.$art->image)}}" alt=""></div> 
            @if ($art->images)
                @php
                $imagePaths = explode(';', $art->images);
                @endphp
                @foreach ($imagePaths as $image)
                <div class="p-2 d-none d-md-block imagecliquable"><img class="img-fluid" src="{{asset('uploads/'.$image)}}" alt="">
                </div>
                @endforeach
            @endif
            </div>
           </div>
           <div class="col-lg-5 col-md-5 col-sm-6 col-12 sidebar">
            <div class="container">
                <div class="d-flex justify-content-between pe-3 pb-3 ptitre">
                    <div class="titre">{{$art->nom}}</div>
                    <div class="prix">{{$art->prix}} $</div>
                </div>
                <div class="mb-5">
                    <p>{{$art->description}}</p>
                </div>
                @auth
                <div class="btnajouter mt-5 d-flex justify-content-center mx-auto">
                    <a class="btn btn-success text-center" href="{{url('ajouterachat/'.$art->id)}}">Ajouter au panier</a>
                    </div>
                 @else
                 <div class="btnajouter mt-5 d-flex justify-content-center mx-auto">
                    <a class="btn btn-danger text-center" href="{{url('login/')}}">Ajouter au panier</a>
                    </div>   
                @endauth
                
            </div>
           </div>
           @endforeach
    </div>
</section>
</main>
</x-app-layout>