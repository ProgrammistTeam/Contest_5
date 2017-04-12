<?php
if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $birth_date = $_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'];
            $sex = $_POST['sex'];
            $email = $_POST['email'];
            $phone = $_POST['cphone'].$_POST['yphone'];
            $address = $_POST['address'];
            $first_question = $_POST['first_question'];
            $second_question = $_POST['second_question'];
//            $yphone = $_POST['yphone'];
            $year = $_POST['year'];
            $month = $_POST['month'];
            $day = $_POST['day'];
         

$walidacja = new Validate();
$walidacja->puste($name, 'name');
$walidacja->puste($surname, 'surname');
$walidacja->puste($birth_date, 'birth_date');
$walidacja->puste($year, 'year');
$walidacja->puste($month, 'month');
$walidacja->puste($day, 'day');
$walidacja->puste($sex, 'sex');
$walidacja->puste($email, 'email');
$walidacja->puste($phone, 'phone');
$walidacja->puste($address, 'address');
$walidacja->maxIloscZnakow($name, 'name', 25);
$walidacja->maxIloscZnakow($surname, 'surname', 40);
$walidacja->maxIloscZnakow($phone, 'phone', 16);
$walidacja->minIloscZnakow($phone, 'phone', 9);
$walidacja->weryfikacjaMaila($email, 'email');

if(!empty($name)){
    $walidacja->znakiOK($name, 'name');
}
if (!empty($surname)){
        $walidacja->znakiOK($surname, 'surname');
}
if (!empty($phone)){
        $walidacja->minIloscZnakow($phone, 'phone');
}

if(!isset($_POST['agreement'])){
    
    $walidacja->isChecked('agreement');
}

if($walidacja->liczError == 0){
    $date = date('Y-m-d'); 
    $addDane = new Dane();
    $addDane->addDane(NULL,$name, $surname, $birth_date, $sex, $email, $phone, $address, $first_question, $second_question, $date);
}

} 