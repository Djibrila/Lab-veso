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
        .small-container{
          margin-bottom: 30px; 
          margin-left: -600px; 
          margin-right: 40px; 
          margin-top: 10px;
        }
        .small-container .title{
          text-align: center;
        }
        .small-container .contenu{
          text-align: justify;
          font-family: sans-serif;
          color: #555; 
        }

        .side-div{
           
          margin-bottom: 30px;
        }
        .bread{
          margin-left: -100px;
        }
        /* Phones */
@media (max-width: 767px) and (min-width: 320px){
        .small-container{
          margin-left: 20px; 
        }
        .bread{
          margin-left: -20px;
        }
        .side-div{
           text-align: center;
           margin-left: 0;
           margin-right: 0;
         }

}


/* Tablet */

@media (max-width: 1023px) and (min-width: 768px){
        .small-container{
        
          margin-left: 50px; 
        }
        .side-div{
           
           margin-left: 0;
         }
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

    <div class="container-fluid">
    <div class="row">
    <div class="col side-div">
      <?php include('sidebar.php'); ?> 
    </div>



        <!-- contenu au niveau de la page article -->
        
        <div class="col small-container">
<div class="bread">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Articles</a></li>
    <li class="breadcrumb-item active" aria-current="page">Présentation</li>
  </ol>
</nav>
</div>
            <h2 class="title">Présentation de VESO</h2>
            <div class="contenu">
                
                <p>
                  Le laboratoire Ville, Environnement et Société (VESO) a pour principal objectif de constituer un réseau de chercheurs qui s’intéresse aux dynamiques urbaines afin de constituer une base de données sur celle-ci. 
                </p> 
                <br>
                  <h4><strong>1.</strong>Missions assignées au laboratoire VESO</h4>
                          <p>
                              Les principales missions assignées au VESO visent à :
                                  <ul>
                                      <li> <strong>Soutenir la recherche</strong> à travers la publication d’articles scientifiques de qualité et des TER de bonne facture (masters et thèses). Au sujet des publications, les membres du laboratoire définissent une fréquence temporelle raisonnable de publication d’articles, et se donnent les moyens de faire des publications collectives (ouvrage collectif).
                                      </li>
                                      <br>
                                      <li> <strong>Promouvoir la recherche scientifique </strong> à travers la formation par et pour la recherche.
                                      </li>
                                      <br>
                                      <li> <strong>Postuler aux consultations nationales ou internationales</strong> dans l’optique de mobiliser des ressources additionnelles au bénéfice du laboratoire. Celles-ci peuvent provenir, entre autres, du financement des projets de recherche, des offres de bourses par les partenaires du laboratoire et des appels d’offre émanant des institutions étatiques et internationales. 
                                      </li>
                                      <br>
                                      <li> <strong>Constituer un réseau de recherche </strong> recherche à travers la dynamique de partage d’informations sur les publications récentes entre chercheurs et doctorants. Ceci pourrait se faire aisément grâce au développement des technologies de l’information et de la communication à travers les réseaux sociaux.
                                      </li>
                                  </ul>
                          </p>
                  <br>
                      <h4><strong>2.</strong>Equipes de recherche</h4>
                        <p>
                          Le laboratoire VESO est constitué de deux équipes de recherche :
                                <ul>
                                    <li> <strong>Transitions urbaines, mobilités, innovations et adaptations (TUMIA) :</strong> sans être exhaustif cette équipe s’intéresse à la dynamique des villes (transitions), aux adaptations et aux innovations y afférentes.
                                    </li>
                                    <br>
                                    <li> <strong>Foncier, Aménagement et Risques urbains (FARU) : </strong> Cette équipe aborde les problématiques de l’instabilité foncière due à l’occupation de certaines zones à risque, la mise en valeur des terrains urbains dans une perspective d’aménagement du territoire.
                                    </li>
                                </ul>
                        </p>

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