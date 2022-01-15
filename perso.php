<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>Veso </title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');
        .header-container{
          background-image: url('images/header.jpg') ;
          background-size: cover; 
          background-position: center;
          padding: 100px 0;
         
        }
        .text{
          font-family: sans-serif;
          color: white;
          text-align: center;
          background: lightgrey;
          opacity: 85%;
          margin: 50px 290px; 
         padding: 20px 0
          

        }
        .text h1{
          font-size: 60px;
          font-weight: bold;
          color: green;
          font-family: 'Roboto Condensed', sans-serif;
        }
        .text h5{
          font-style: italic;
          
        }

        .side-div{
           
          margin-bottom: 30px;
        }

    </style>
</head>
<body>
    <?php include('navbar.php'); ?> 
    <!-- header -->
    <div class="header-container">
        <div class="text">
            <h1>VESO</h1>
            <h5>Laboratoire Ville-Environnement-Société</h5> <br>
            <!-- <a href="#"><button type="button" class="btn btn-success">Voir Articles</button></a> -->
            <!-- <button type="button" class="btn btn-outline-success">Success</button> -->
        </div>
    </div>
    <!-- header -->

    <div class="container">
    <div class="row">
    <div class="col side-div">
      <?php include('sidebar.php'); ?> 
    </div>
        <!-- contenu au niveau de la page article -->
        <div class="col small-container">
            <h2 class="title">Presonnel</h2>
            <div class="contenu">
                
            </div>
        </div>
        <!-- contenu au niveau de la page article -->
    </div>
    </div>


    <?php include('footer.php'); ?>
     

     
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>