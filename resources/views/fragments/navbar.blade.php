@vite('resources/js/app.js')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<header>
    <nav class="navbar navbar-expand-lg navbar-danger" style="background-color: rgba(101, 203, 234, 0.8);">
        <div class="container-fluid">
            <i class="bi bi-hearts"> <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-hearts" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.931.481c1.627-1.671 5.692 1.254 0 5.015-5.692-3.76-1.626-6.686 0-5.015m6.84 1.794c1.084-1.114 3.795.836 0 3.343-3.795-2.507-1.084-4.457 0-3.343M7.84 7.642c2.71-2.786 9.486 2.09 0 8.358-9.487-6.268-2.71-11.144 0-8.358"/>
              </svg></i>
            <a class="navbar-brand" href="{{ route('index') }}">
             
                
            </a>

           
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto"> 
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}" style="font-size: 18px; transition: all 0.3s ease;">
                            <i class="fa-solid fa-house"></i> Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}" style="font-size: 18px; transition: all 0.3s ease;">
                            <i class="fa-solid fa-candy"></i> Productos
                        </a>
                    </li>

                  
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 18px; transition: all 0.3s ease;">
                            <i class="fa-solid fa-users"></i> Clientes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('clients.index') }}">Ver Clientes</a></li>
                            <li><a class="dropdown-item" href="{{ route('addresses.index') }}">Direcciones</a></li> <!-- Enlace a Direcciones -->
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sales.index') }}" style="font-size: 18px; transition: all 0.3s ease;">
                            <i class="fa-solid fa-cart-shopping"></i> Ventas
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>


</header>

<style>
    
    .navbar {
        background-color: #343a40; 
        padding: 15px 30px;
        border-bottom: 2px solid #f8f9fa; 
    }

    
    .navbar-brand i {
        font-size: 40px; 
        color: #f8f9fa; 
    }

   
    .navbar-nav .nav-link:hover {
        background-color: #ff9900; 
        border-radius: 5px;
        transform: scale(1.1); 
    }

   
    .nav-link i {
        margin-right: 5px;
        font-size: 20px;
        color: #f8f9fa;
        transition: color 0.3s ease;
    }

    .nav-link:hover i {
        color: #343a40; 
    }

   
    .dropdown-menu {
        background-color: #343a40; 
        border: none;
    }

    .dropdown-item:hover {
        background-color: #ff9900;
        color: #343a40; 
    }
</style>
