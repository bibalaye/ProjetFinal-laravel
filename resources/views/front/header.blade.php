
    <div class="max-w-100 mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="hidden flex w-100 menu  sm:flex justify-center">
                @foreach ($var_categorie as $categorie)
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex ">
                        <x-nav-link class="link" :href="route('listeProduitparcategorie', ['id' => $categorie->id])" :active="request()->is('liste/' . $categorie->id)">
                            {{ $categorie->nom }}
                        </x-nav-link>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Responsive Navigation Menu -->
<div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
    <div class="bg-white p-4 rounded shadow-md">
        <h4 >menu</h4>
        <div class="pt-2 pb-3 space-y-1">
            @foreach ($var_categorie as $categorie)
            <x-responsive-nav-link :href="route('listeProduitparcategorie', ['id' => $categorie->id])" :active="request()->is('liste/' . $categorie->id)">
                {{ $categorie->nom }}
            </x-responsive-nav-link>
            @endforeach
        </div>
    </div>
</div>

