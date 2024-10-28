<?php

require_once "DatabaseController.php";

class TechnologyControler {

    private $connection;

    public function __construct() {
        $this->connection = DatabaseController::connect();
    }

    public function gettecnology() {

        try  {
       
            $sql = "SELECT * 
                    FROM Technology
                    WHERE 1";
        
           /* $statement = $this->connection->prepare($sql);
            $statement->setFetchMode(PDO::FETCH_OBJ);
            $statement->execute();

            $result = $statement->fetchAll();

            return $result;*/
            return $sql;

          } catch(PDOException $error) {
              echo $sql . "<br>" . $error->getMessage();
          }
    }

}