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
                            <h3 class="listetitle">Ajouter une Catégorie</h3>
                        </div>
                        <section class="container">
                            
                            <div class="row form_aj_mod">
                                <section class="col-lg-2 col-md-2 col-12 p-0">
                                    @include('admin.header')
                                </section>
                                <div class="col-lg-10 col-md-10 col-12">
                                    <form class="form" action="{{ url('addCategorie') }}" method="post">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="nomCategorie" class="form-label">Nom du Catégorie :</label>
                                            <input type="text" class="form-control" name="nomCategorie">
                                        </div>

                                        <div class="mb-3">
                                            <input type="submit" class="btn btn-primary bouton" value="Ajouter la Catégorie">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </section>

                </div>
            </div>
        </div>
    </main>
</x-app-layout>
