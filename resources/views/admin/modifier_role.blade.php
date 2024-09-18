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
                            @foreach ($var_user as $user)
                                <h3 class="listetitle">Le rôle de cet utilisateur est actuellement : {{ $user->role->nom }}</h3>
                            @endforeach
                        </div>
                        <section class="container">
                            
                            <div class="row form_aj_mod">
                                <section class="col-lg-2 col-md-2 col-12 p-0">
                                    @include('admin.header')
                                </section>
                                <div class="col-lg-10 col-md-10 col-12">
                                    <form class="form" action="{{ url('update_role') }}" method="post">
                                        @csrf

                                        @foreach ($var_user as $user)
                                            <div class="mt-5">
                                                <input class="form-control" type="hidden" name="iduser"
                                                    value="{{ $user->id }}">
                                            </div>

                                            <div class="mb-3">
                                                <select class="form-select" name="user_role_id" id="">
                                                    @foreach ($var_role as $role)
                                                        <option value="{{ $role->id }}"
                                                            @if ($user->role_id == $role->id) selected @endif>{{ $role->nom }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <input type="submit" class="btn btn-primary bouton" value="Modifier">
                                            </div>
                                        @endforeach
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
