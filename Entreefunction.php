<?php
    // Connexion à la base de données
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "newbd";

    // connecton a la bd 
    $con = mysqli_connect ($host, $username, $password, $database);
    // if ($con ->connect_error){
    //     die("ERREUR: Eurreur de connexion" .$scon->connect-error);
    // }
    if (!$con){
        die(" Ta Connecion a echouee bro:".mysqli_conect_error() );
    }
    else{
        echo "Bro la connexion a take";
    }
    
    if(!function_exists("getAllItem")){
        function getAllItem($table){
            global $con;
            $query = "SELECT * FROM $table ORDER BY id DESC";
            $query_run = mysqli_query($con, $query);
            return $query_run;
        }
    }

    if(!function_exists("getAll")){
        function getAll($table){
            global $con;
            $query = "SELECT * FROM $table ORDER BY created_at DESC";
            $query_run = mysqli_query($con, $query);
            return $query_run;
        }
    }

    if(!function_exists("getAllEnterById")){
        function getAllEnterById($table, $id){
            global $con;
            $query = "SELECT * FROM $table WHERE id = $id";
            $query_run = mysqli_query($con, $query);
            return $query_run;
        }
    }
<<<<<<< HEAD
=======

    if(!function_exists("getAlls")){
        function getAlls($table){
            global $con;
            $query = "SELECT * FROM $table";
            $query_run = mysqli_query($con, $query);
            return $query_run;
        }
    }

    if(!function_exists("getAllCategorieById")){
        function getAllCategorieById($table, $id){
            global $con;
            $query = "SELECT * FROM $table WHERE id = $id";
            $query_run = mysqli_query($con, $query);
            return $query_run;
        }
    }
>>>>>>> 9b68d3f (Initialisation du projet et ajout des fichiers)
?>