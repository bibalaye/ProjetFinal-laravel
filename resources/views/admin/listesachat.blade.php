<x-app-layout>
    <main>
        <section class="conatiner-fluid mt-5 pt-5">
            <div class="container">
                <h1 class="listetitle">Liste des Achats</h1>
                            <div class="w-50 mx-auto mb-4">
                                <form class="d-flex" role="search" action="" method="post">
                                    <input class="form-control me-2" type="text" name="motcle" id="motcle">
                                    <input class="btn btn-outline-success" id="btrecher" type="submit"
                                        name="rechercher" value="rechercher">
                                </form>
                            </div>
                <div class="row ">
                    <section class="col-lg-2 col-md-2 col-12 bg">
                        @include('admin.header')
                    </section>
                    <section class=" col-lg-10 col-md-10 col-12">
                        <section class="container">
                            <div class="table-responsive">
                                <table class="table" cellpadding="0" cellspacing="0" border="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nom Produit</th>
                                            <th scope="col">Nom categorie</th>
                                            <th scope="col">nom du Client</th>
                                            <th scope="col">Email du Client</th>
                                            <th scope="col">Date de l'achat</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        @foreach ($var_achat as $achat)
                                            <tr>
                                                <td>{{ $achat->produits->nom }}</td>
                                                <td>{{ $achat->produits->categorie->nom }}</td>
                                                <td>{{ $achat->user->name }}</td>
                                                <td>{{ $achat->user->email }}</td>
                                                <td>{{ $achat->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$var_achat->links('pagination::bootstrap-4')}}
                            </div>
                        </section>
                    </section>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>
