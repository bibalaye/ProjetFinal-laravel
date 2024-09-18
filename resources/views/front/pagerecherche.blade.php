
<x-app-layout>
<main>
        <section class="container ">
            <div class="row container articles">
                @foreach ($var_produit_rechercher as $article)
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
            <div class="container mx-auto">
                {{$var_produit_rechercher->links('pagination::bootstrap-4')}}
            </div>
        </section>
    </section>
</main>
</x-app-layout>


