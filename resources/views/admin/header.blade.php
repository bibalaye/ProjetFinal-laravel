
    <div class=" mt-5 pt-5 d-flex flex-column flex-shrink-0 bg-light vh-100 w-100">
        <ul class="d-none d-sm-none d-md-block nav nav-pills nav-flush flex-column mb-auto text-center">
            <li class="nav-item"> <a href="{{url(' ')}}" class="nav-link {{ request()->is('') ? ' active' : '' }}  py-3 border-bottom"> <i class="fa fa-home"></i> <small>HOME</small> </a> </li>
            <li> <a href="{{url('produit')}}" class="nav-link {{ request()->is('produit') ? ' active' : '' }} py-3 border-bottom"> <i class="fa-solid fa-shirt"></i> <small>PRODUITS</small> </a> </li>
            <li> <a href="{{url('Categorie')}}" class="nav-link {{ request()->is('Categorie') ? ' active' : '' }} py-3 border-bottom"> <i class="fa fa-layer"></i> <small>CATEGORIES</small> </a> </li>
            <li> <a href="{{url('achat')}}" class="nav-link {{ request()->is('achat') ? ' active' : '' }} py-3 border-bottom"> <i class="fa fa-cart-arrow-down"></i> <small>ACHATS</small> </a> </li>
            <li> <a href="{{url('user')}}" class="nav-link {{ request()->is('user') ? ' active' : '' }} py-3 border-bottom"> <i class="fa fa-user"></i> <small>UTILISATEURS</small> </a> </li>
        </ul>
        <div class="w-100 btn-group dropend d-block d-sm-block d-md-none">
            <button type="button" class="w-100 b_menu btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="visually-hidden text-primary">MENU</span>
            </button>
            <ul class="dropdown-menu flex-column mb-auto text-center">
                <li class="nav-item"> <a href="{{url(' ')}}" class="nav-link active {{ request()->is('') ? ' active' : '' }} py-3 border-bottom"> <small>HOME</small> </a> </li>
                <li> <a href="{{url('produit')}}" class="nav-link {{ request()->is('produit') ? ' active' : '' }} py-3 border-bottom"> <small>PRODUITS</small> </a> </li>
                <li> <a href="{{url('Categorie')}}" class="nav-link {{ request()->is('Categorie') ? ' active' : '' }} py-3 border-bottom"><small>CATEGORIES</small> </a> </li>
                <li> <a href="{{url('achat')}}" class="nav-link {{ request()->is('achat') ? ' active' : '' }} py-3 border-bottom"><small>ACHATS</small> </a> </li>
                <li> <a href="{{url('user')}}" class="nav-link {{ request()->is('user') ? ' active' : '' }} py-3 border-bottom"><small>UTILISATEURS</small> </a> </li>
            </ul>
          </div>
    </div>