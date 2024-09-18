<?php

namespace App\Providers;

use App\Models\produits;
use App\Models\categories;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        paginator::useBootstrap();
        $produits = produits::paginate(8);
        $categories = categories::all();

        // Partager les variable avec toutes les vues
        View::share('var_categorie', $categories);
        View::share('var_produit', $produits);
        
    }
}
