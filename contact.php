<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Veso</title>

    <style>
        input{
            width: 60%;
        }
        textarea{
            width: 60%; 
            padding: 10px; 
            border: 1px solid #ccc; 
            margin: 10px; 
            font-size: 1em; 
            
        }
        button{
            background-color: green; 
            color: white; 
            padding: 12px 20px; 
            border: none; 
            cursor:pointer; 
            border-radius:  10px; 
            font-size: 0.8em; 
        }
        .contact-div{
            text-align: center; 
            margin: 150px auto; 
            padding: 10px 20px; 
            max-width: 600px; 
            background-color: #eeeeee;
        }
        h3{
            text-align: center; 
        }

    </style>
</head>
<body>
    
     <?php include('navbar.php'); ?> 
    
     <div class="contact-div">
        <form action="https://formspree.io/f/myyozvqa" method="POST">
            <h3>Contactez-nous</h3>
            <br>     
                <input type="email" name="_replyto" placeholder="Entrez votre email">
        
            <br>
            <br>

                <textarea name="message">Message</textarea>
                <br>
            <!-- your other form fields go here -->
            <button type="submit">Envoyer</button>
        </form>
     </div>
     
     <?php include('footer.php'); ?>

     
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>