<?php
class Dane extends DbConnect{


function addDane($id_user,$name,$surname,$birth_date,$sex,$email,$phone,$address,$first_question,$second_question,$date){
         
            $zapytanie = "insert into contest (`id_user`,`name`,`surname`,`birth_date`,`sex`,`email`,`phone`,`address`,`first_question`,`second_question`,`date`) values (NULL,'$name','$surname','$birth_date','$sex','$email','$phone','$address','$first_question','$second_question','$date')";
            $wyslanie = $this->db->query($zapytanie);
            header('Location:index.php');
            exit ();
 }
 
}

           