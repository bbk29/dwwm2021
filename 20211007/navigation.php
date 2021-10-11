<!-- <?php  require_once('headerSession.php')?> -->

<!-- Navigation-->
     <nav class="navbar navbar-expand-lg navbar-dark text-white bg-secondary">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">La Boutique du Macho</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href=/DWWMPHP/20211107/accueil.php>Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href=/DWWMPHP/20211107/pageAdmin.php>A propos</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href=/DWWMPHP/20211107/produit.php role="button" data-bs-toggle="dropdown" aria-expanded="false">Boutique</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Tous les Produits</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Produits populaires</a></li>
                                <li><a class="dropdown-item" href="#!">Produits récents</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-light" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Panier
                            <span class="badge bg-light text-dark ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
