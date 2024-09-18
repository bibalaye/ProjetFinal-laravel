
<x-app-layout>
<main>
    <a id="monLien" href="detailproduit.php?id=1">
        <section class="banniere mt-5 mb-2" id="banniere">
        </section>
    </a>
    <section class="container">
        <section class="container mb-2" id="categories">
            
            <div class="row">
                @foreach ($var_categories as $categorie)
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <a href="{{url('liste/'.$categorie->id)}}"><img class="img-fluid w-100" src="{{asset('img/b'.$categorie->id.'.jpg')}}" alt="liste article par categorie"></a>
                </div>
                @endforeach
            </div>
            
        </section>
        <section class="container ">
            <div class="row articles">
                @foreach ($var_produit as $article)
                <div class="card shadow-lg article m-2">
                    <a href="{{ url('detail/' . $article->id) }}"><img src="{{ asset('uploads/'.$article->image) }}" class="card-img-top" alt="{{ $article->nom }}"></a>
                    <div class="card-body">
                      <h5 class="card-title titrear">{{ $article->nom }}</h5>
                      <p class="card-text prix">{{ $article->prix }} $</p>
                      <a href="{{ url('detail/' . $article->id) }}" class="btn m-auto btn-outline-primary boutton">Détail de l'article</a>
                    </div>
                </div>
                @endforeach
                
            </div>
            {{$var_produit->links('pagination::bootstrap-4')}}
        </section>
    </section>
</main>
</x-app-layout>


