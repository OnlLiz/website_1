<?php  
  // оголошуємо змінну, в яку будемо зберігати результати роботи
  $data['result']='error'; 
  // якщо дані були відправлені методом  POST, то...
  if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $data['result']='success';
    //отримати імя, яке ввів клієнт
    if ((isset($_POST['name'])) && (strlen(trim($_POST['name'])) > 0)) {
      $name = stripslashes(strip_tags($_POST['name']));
    } else {
      $data['result']='error';
	    $data['name']='Поле імя відсутнє.';  
    } 
    //отримати email, який ввів клієнт
    if (isset($_POST['email']))  {
      $email = stripslashes(strip_tags($_POST['email']));
     } else {
      $data['result']='error';
	    $data['email']='Поле email відсутнє';
    }   
	 //отримати телефон, який ввів клієнт
    if ((isset($_POST['phone'])) && (strlen(trim($_POST['phone'])) > 0)) {
     $phone = stripslashes(strip_tags($_POST['phone']));      
    } else {
      $data['result']='error';
	    $data['phone']='Поле телефон відсутнє.';  
    } 
    //отримати повідомлення, яке ввів користувач
    if (isset($_POST['comment'])) {
      $comment = stripslashes(strip_tags($_POST['comment']));    
    } 
  } 
  else {
    //помилка - не існує асоціативний масив $_POST["send-message"]
    $data['result']='error';
	  $data['files']=' не існує асоціативний масив POST '; 
  }
 
  // подальші дії якщо помилок не виявлено
  if ($data['result']=='success') {
  	//1. занесення в БД
    include("con_bd.php");   
    $resultsql = mysqli_query($link,"INSERT INTO feedback(name, email, phone, comment) 
    VALUES ('$name', '$email', '$phone', '$comment')");
    mysqli_close($link);

  }
 
  echo json_encode($data);
 
?> 