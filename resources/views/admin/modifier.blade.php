<x-app-layout>
    <main>
        <div class="main-bg">
            <div class="sub-main-w3">
                <div class="bg-content-w3pvt">
                    <div class="top-content-style">
                        <a class="" href="{{ route('accueil') }}">
                            <img src="{{ asset('img/logo2.webp') }}" alt="" />
                        </a>
                    </div>

                    <section class="container-fluid mt-5 pt-5">
                        <div class="row d-flex justify-content-center w-100">
                            <h3 class="listetitle">Modifier un produit</h3>
                        </div>
                        <section class="container">
                            
                            <div class="row form_aj_mod">
                                <section class="col-lg-2 col-md-2 col-12 p-0">
                                    @include('admin.header')
                                </section>
                                <section class="formaj col-lg-10 col-md-10 col-12">
                                    <form class="form" action="{{ url('update') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @foreach ($var_produit as $prod)
                                            <input type="hidden" name="idProduit" value="{{ $prod->id }}">

                                            <div class="mb-3">
                                                <label for="nomProduit" class="form-label">Nom du produit :</label>
                                                <input type="text" class="form-control " name="nomProduit"
                                                    value="{{ $prod->nom }}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="categorie" class="form-label">Catégorie :</label>
                                                <select class="form-select" name="categorie" id="categorie">
                                                    @foreach ($var_categorie as $categorie)
                                                        <option value="{{ $categorie->id }}"
                                                            @if ($prod->categories_id == $categorie->id) selected @endif>{{ $categorie->nom }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="descriptionProduit" class="form-label">Description du
                                                    produit :</label>
                                                <textarea class="form-control "
                                                    name="descriptionProduit">{{ $prod->description }}</textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label for="prix" class="form-label">Prix :</label>
                                                <input type="text" class="form-control " name="prix"
                                                    value="{{ $prod->prix }}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="imageProduit" class="form-label">Images du produit :</label>
                                                <div class="d-flex align-items-center">
                                                    <input class="form-control form-control-lg" id="formFileLg" type="file"
                                                    name="imageProduit" value="{{ $prod->image }}">
                                                <div>
                                                    <img class="immodif" src="{{ asset('uploads/' . $prod->image) }}" alt="">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="imageProduit" class="form-label">Autres Images :</label>
                                                <div class="d-flex align-items-center">
                                                    <input class="form-control form-control-lg" id="formFileLg" type="file"
                                                    name="images[]" value="{{ $prod->image }}" multiple>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <input type="submit" class="btn btn-primary bouton" name="ajouterProduit"
                                                    value="Modifier">
                                            </div>
                                        @endforeach
                                    </form>
                                </section>
                            </div>
                        </section>
                    </section>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
