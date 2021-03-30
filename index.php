<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript</title>

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">JS</h1>
            <p class="lead">A aplicação dessa prova serve para medir o conhecimento básico em js .</p>
        </div>
    </div>

    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <p class="texto">O teste consiste em alimentar a tabela com as informações disponibilizadas pelo arquivo <strong>array.json</strong> na raiz desse projeto. E prencher as informações de acordo com as regras abaixo:</p>
                <p>
                    <ul>
                        <li>Salários até <strong>R$ 680,00 </strong>: aumento de 20% - score <strong>baixo</strong> </li>
                        <li>Salários entre <strong>R$ 680,01</strong> e <strong>R$ 1.300,00</strong> : aumento de 15% - score<strong> médio</strong></li>
                        <li>Salários entre <strong>R$ 1.300,01</strong> e <strong>R$ 3.500,00</strong> : aumento de 10% - score <strong>padrão</strong></li>
                        <li>Salários entre <strong> R$ 3.500,01</strong> e <strong>R$ 10.500,00</strong> : aumento de 5% - score <strong>alto</strong></li>
                        <li>Salários acima de <strong>R$ 10.500,01</strong> : aumento de 2,5% - score <strong>sem limite</strong></li>
                    </ul>

                </p>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Salário</th>
                            <th scope="col">Reajuste</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">...</th>
                            <td>...</td>
                            <td>...</td>
                            <td>...</td>
                        </tr>
                    </tbody>
                </table>                
            </div>
        </div>
    </div>


    <!-- JS Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>