<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        .jumbotron {
            padding: 5rem 2rem;
            margin-bottom: 2rem;
            border-radius: .3rem;
            background: url("/image/mobil.jpg") no-repeat center center;
	        background-size: cover;	  
        }
        .lead{
            font-size: 1.25rem;
            font-weight: 300;
        }
            
    </style>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{'/home'}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ '/mobil' }}">Mobil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >Sewa Mobil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >About Us</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
    
</body>
</html>