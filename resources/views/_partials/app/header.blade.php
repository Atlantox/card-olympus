<header>
    <nav class="navbar fixed-top navbar-expand-lg lb-bg-primary shadowed flex-column pb-0">
        <div class="container-fluid mb-2 p-0 p-sm-1">
            <a class="navbar-brand m-0 col-12 col-md-3 col-lg-3 col-xl-2 text-center" href="{{ route('home') }}">
                <img class="logo" src="{{ asset('logo.png') }}" alt="card olympus logo">
                <span class="align-text-top">
                    Card Olympus
                </span>
            </a>
            <form class="d-flex col-8 col-sm-6 col-md-5 col-lg-4 col-xl-3 mx-auto lb-bg-primary-d rounded-pill border border-white justify-content-between" role="search">
                @csrf
                <input class="bg-none border-0 focus-none text-white px-2 hide-clear-button col-10" type="search" placeholder="Search for a card" aria-label="Search">
                <button class="bg-none border-0 p-0 col-2 text-white" type="submit">
                    <i class="bi-search fs-5"></i>
                </button>
            </form>

            <div class="col-xl-2">
                <ul class="navbar-nav justify-content-end flex-row">
                    <li class="nav-item">
                        <a class="nav-link p-0 mx-2 text-white" href="#">
                            <i class="bi-cart fs-4 lb-bg-primary-d border border-white rounded-circle p-2"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-0 mx-2 text-white" href="#">
                            <i class="bi-person fs-4 lb-bg-primary-d border border-white rounded-circle p-2"></i>
                        </a>
                    </li>
                </ul>                
            </div>
        </div>

        <div class="container-fluid lb-bg-primary-d">
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Catalog
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item text-white" href="#">Action</a></li>
                      <li><a class="dropdown-item text-white" href="#">Another action</a></li>
                      <li><a class="dropdown-item text-white" href="#">Something else here</a></li>
                    </ul>
                  </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">About us</a>
                  </li>
              </ul>

              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Account
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Settings</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Log out</a></li>
                    </ul>
                </li>
              </ul>
              
            </div>
          </div>

      </nav>
</header>