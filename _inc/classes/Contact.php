<?php

    class Contact extends Database{

        private $db;

        public function __construct()
        {
            $this->db = $this->connect();
        }

        public function insert($data){
          try {
              $query = "INSERT INTO contact (name, email, message, acceptance) VALUES (:name, :email, :message, :acceptance)";
              $stmt = $this->db->prepare($query);
              $stmt->execute($data);
          } catch (PDOException $e) {
              echo $e->getMessage();
          }
        } 
      

        public function select(){
          try{
            $sql = "SELECT * FROM contact";
            $query =  $this->db->query($sql);
            $contacts = $query->fetchAll();
            return $contacts;
          }catch(PDOException $e){
            echo($e->getMessage());
          }
        }

        public function delete(){

          try {
            $data = array(
                'contact_id' => $_POST['delete_contact']
            );
            $query = "DELETE FROM contact WHERE id = :contact_id";
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);
          }catch (PDOException $e) {
            echo $e->getMessage();
          }
        }

        public function selectById($id){
          try {
              $query = "SELECT * FROM contact WHERE id = :id";
              $stmt = $this->db->prepare($query);
              $stmt->bindParam(':id', $id);
              $stmt->execute();
              return $stmt->fetch();
          } catch (PDOException $e) {
              echo $e->getMessage();
          }
        }
      
        public function update($data){
            try {
                $query = "UPDATE contact SET name = :name, email = :email, message = :message, acceptance = :acceptance WHERE id = :id";
                $stmt = $this->db->prepare($query);
                $stmt->execute($data);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
      
    }
?>