<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
    crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/css.css"/>
    <title>Pagina inicial</title>

</head>

<body>
    
    
    <div class="jumbotron text-center">

    <i class="fas fa-cloud-moon" style="font-size:60px; color:#DCDCDC"> </i>
    <h3 id="titulo"><h3>

    <a class="link" href="projetoweb/contato.php"><button  class="btn" type="button" name="b1">inicio</button></a>
    <a class="link" href="projetoweb/contato.php"> <button class="btn" type="button" name="b2" >contato</button></a>
    <a class="link" href="projetoweb/contato.php"><button class="btn" type="button" name="b3"> item</button></a>
 
     </div>
    
   
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="img/img.png" style="width: 150px; height: 150px;"  class="img-responsive" alt="Cinque Terre">
                <h3> Colum 1</h3>
                <p>descricao</p>
                <p> 
                </p>
            </div>
            <div class="col-sm-4" >
                 <img src="img/img.png" style="width: 150px; height: 150px;" class="img-responsive" alt="Cinque Terre">
                <h3> Colum 2</h3>
                <p>descricao</p>
                <p> 
                </p>
            </div>
            <div class="col-sm-4">
                <img src="img/img.png" style="width: 150px; height: 150px;" class="img-responsive" alt="Cinque Terre">
                <h3> Colum 3</h3>
                <p>descricao</p>
                <p> 
                </p>
            </div>
        </div>

    </div>

    <div class="rodape">
    
    <h3 id="t2"><h3>

    </div>

    <script>
        document.getElementById("titulo").innerHTML = "Meu título meu tituo para ttedte";
        document.getElementById("t2").innerHTML = "direitos autorais";
    </script>
</body>

</html>