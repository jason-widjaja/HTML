<!DOCTYPE html>
<html>

<Head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</Head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="foto/logo.png" height="100" width="80">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product"> Our Product</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                </li>
            </ul>

        </div>
    </nav>

    <div class="product-body">
        <div class="katalog-product">
            <div class="card-deck">
                <a  href ="/buy/{{$product[0]->nama_produk}}" class="card">
                    <img class="card-img-top" src={{$product[0]->foto_produk}} alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$product[0]->nama_produk}}</h5>
                        <p class="card-text">
                            Harga : {{$product[0]->harga_ecer}}
                            <Br><br>
                            Durian monthong kualitas EXPORT PREMIUM HARGA KAKI LIMA !! 
                            <br>
                            Berat per box 450-500 gram.
                            </p>
                        <p class="card-text"><small class="text-muted"></small></p>
                    </div>
                </a>
                <a  href ="/buy/{{$product[1]->nama_produk}}" class="card">
                    <img class="card-img-top" src="{{$product[1]->foto_produk}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$product[1]->nama_produk}}</h5>
                        <p class="card-text">
                            Harga : {{$product[1]->harga_ecer}}
                            <Br><br>
                            Durian monthong kualitas EXPORT PREMIUM HARGA KAKI LIMA !! 
                            <br>
                            Berat per box 450-500 gram.
                            </p>
                        <p class="card-text"><small class="text-muted"></small></p>
                    </div>
                </a>

                <a  href ="/buy/{{$product[2]->nama_produk}}" class="card">
                    <img class="card-img-top" src="{{$product[2]->foto_produk}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$product[2]->nama_produk}}</h5>
                        <p class="card-text">
                            Harga : {{$product[2]->harga_ecer}}
                            <Br><br>
                            Durian monthong kualitas EXPORT PREMIUM HARGA KAKI LIMA !! 
                            <br>
                            Berat per box 450-500 gram.
                            </p>
                        <p class="card-text"><small class="text-muted"></small></p>
                    </div>
                </a>

            </div>

            <div class="card-deck">

            <a  href ="/buy/{{$product[3]->nama_produk}}" class="card">
                    <img class="card-img-top" src="{{$product[3]->foto_produk}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$product[3]->nama_produk}}</h5>
                        <p class="card-text">
                            Harga : {{$product[3]->harga_ecer}}
                            <Br><br>
                            Durian monthong kualitas EXPORT PREMIUM HARGA KAKI LIMA !! 
                            <br>
                            Berat per box 450-500 gram.
                            </p>
                        <p class="card-text"><small class="text-muted"></small></p>
                    </div>
                </a>

                <a  href ="/buy/{{$product[4]->nama_produk}}" class="card">
                    <img class="card-img-top" src="{{$product[4]->foto_produk}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$product[4]->nama_produk}}</h5>
                        <p class="card-text">
                            Harga : {{$product[4]->harga_ecer}}
                            <Br><br>
                            Durian monthong kualitas EXPORT PREMIUM HARGA KAKI LIMA !! 
                            <br>
                            Berat per box 450-500 gram.
                            </p>
                        <p class="card-text"><small class="text-muted"></small></p>
                    </div>
                </a>

                <a  href ="/buy/{{$product[5]->nama_produk}}" class="card">
                    <img class="card-img-top" src="{{$product[5]->foto_produk}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$product[5]->nama_produk}}</h5>
                        <p class="card-text">
                            Harga : {{$product[5]->harga_ecer}}
                            <Br><br>
                            Durian monthong kualitas EXPORT PREMIUM HARGA KAKI LIMA !! 
                            <br>
                            Berat per box 450-500 gram.
                            </p>
                        <p class="card-text"><small class="text-muted"></small></p>
                    </div>
                </a>
               
            </div>

        </div>

        <div class="codeboostrap">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
                integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
                crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
                integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
                crossorigin="anonymous">
            </script>
        </div>
</body>


</html>