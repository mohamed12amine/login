<?php
            // Se connecter à la base de données
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "contact";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Vérifier la connexion
            if ($conn->connect_error) {
                die("Connexion échouée: " . $conn->connect_error);
            }

            // Vérifier si le formulaire a été soumis
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Récupérer les valeurs du formulaire
                $email = $_POST["email"];
                $password = $_POST["passwordU"];

                // Préparer la requête SQL pour insérer les valeurs dans la base de données
              if($email== "" and $password== ""){
                echo "<script type='text/javascript'>
				window.alert('Merci beaucoup $name pour votre message');
				window.open('index.html');
			  </script>";
              }else{
                $sql = "INSERT INTO contactutil(email,password) VALUES ('$email','$password')";
              }

            	// Exécuter la requête SQL
                if ($conn->query($sql) === TRUE) {
              
                } else {
                    echo "Erreur: " . $sql . "<br>" . $conn->error;
                }
            }

            // Fermer la connexion à la base de données
            $conn->close();
      ?>