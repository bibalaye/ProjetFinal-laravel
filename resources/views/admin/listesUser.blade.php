<x-app-layout>

    <main>
        <section class=" conatiner-fluid mt-5 pt-5">
            <div class="container">
                <h1 class="listetitle">Liste des Utilisateurs</h1>
                <div class="w-50 mx-auto mb-4">
                    <form class="d-flex" role="search" action="" method="post">
                        <input class="form-control me-2" type="text" name="motcle" id="motcle">
                        <input class="btn btn-outline-success" id="btrecher" type="submit"
                            name="rechercher" value="rechercher">
                    </form>
                </div>
                <div class="row">
                    <section class="col-lg-2 col-md-2 col-12 bg">
                        @include('admin.header')
                    </section>
                    <section class=" col-lg-10 col-md-10 col-12">
                        <section class="container">
                            <div class="table-responsive">

                                <table class="table" cellpadding="0" cellspacing="0" border="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Prénom et Nom</th>
                                            <th scope="col">E-mail</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Modifier</th>
                                            <th scope="col">Supprimer</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        @foreach ($var_users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->role->nom }}</td>
                                                <td><a class="btn btn-primary"
                                                        href="{{ url('modifier_role/' . $user->id) }}">Modifier</a></td>
                                                <td><a class="btn btn-danger"
                                                        href="{{ url('supprimer_user/' . $user->id) }}">Supprimer</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$var_users->links('pagination::bootstrap-4')}}
                            </div>
                        </section>
                    </section>
                </div>
        </section>
    </main>
</x-app-layout>
