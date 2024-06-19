// JavaScript Document
//після завантаження веб-сторінки з формою
$(function () {
  // при відправці форми на сервер (id="contact_form")
  $('#contact_form').submit(function (event) {
    // відмінимо стандартні дії браузера
    event.preventDefault();
    // створимо змінну, яка буде вказувати валідна форма чи ні
    var formValid = true;
    // переберемо всі елементи керування форми(input ) 
    $('#contact_form input').each(function () {
      //знайдемо предків, що мають клас .form-group (для встановлення success/error)
      var formGroup = $(this).parents('.form-group');      
      //валідація даних за допомогою  HTML5 функції checkValidity
      if (this.checkValidity()) {
        //додамо до formGroup класс .has-success та видалимо .has-error
        formGroup.addClass('has-success').removeClass('has-error');        
      } else {
        //додамо до formGroup класс .has-error та видалимо .has-success
        formGroup.addClass('has-error').removeClass('has-success');        
        //якщо елемент не пройшов перевірку, то відмітимо форму як не валідну  
        formValid = false;
      }
    });
      // якщо форма валідна, то відправляємо форму на сервер (AJAX)
    if (formValid) {
      // отримуємо name, який ввів клієнт
      var name = $("#name").val();
      // отримуємо email, який ввів клієнт
      var email = $("#email").val();
      // отримуємо phone, який ввів клієнт
      var phone = $("#phone").val();
      // отримуємо comment, який ввів клієнт
	    var comment = $("#comment").val();
       
      // обєкт, через який будемо створювати форму перед відправкою на сервер
      var formData = new FormData();
      // додамо в formData значення 'name' 
      formData.append('name', name);
      // додамо в formData значення 'email' 
      formData.append('email', email);
      // додамо в formData значення 'phone' 
      formData.append('phone', phone);
      // додамо в formData значення 'comment'  
	    formData.append('comment', comment);
       
      // технологія AJAX 
      $.ajax({
        //метод передачі запиту - POST
        type: "POST",
        //URL-адреса запиту
        url: "form/zapyt.php",
        //дані, що передаються - formData
        data: formData,
        // не встановлювати тип контенту, оскільки використовуємо FormData
        contentType: false,
        // не обробляти дані formData
        processData: false,
        // відключити кешування даних у браузері
        cache: false,
        //при успішному виконанні запиту		
				
		//у випадку успіху
        success: function (data) {
          $('#error').text('Ваш запит відправлено! Наш менеджер Вам зателефонує!');
          // розбираємо рядок JSON, отриманий від сервера
          var $data =  JSON.parse(data);
          // якщо сервер повернув відповідь success, то дані відправлені
          if ($data.result == "success") {            
          }
		      else {
            // Якщо сервер повернув error, то ...
            $('#error').text('Якщо Ви не хочете вводити дані, зателефонуйте нам!');
			      if ($data.name) {			   
			        //додати до елемента клас .has-error та видалити .has-success
              $('#name').parents('.form-group').addClass('has-error').removeClass('has-success');               
		          $('#error').text('Ви не ввели імя');
             }
			      if ($data.email) {			  
			        //додати до елемента клас .has-error та видалити .has-success
              $('#email').parents('.form-group').addClass('has-error').removeClass('has-success');
              $('#error').text('Ви не ввели е-мейл');
		        	}
		      	if ($data.phone) {			
			        //додати до елемента клас .has-error та видалити .has-success
              $('#phone').parents('.form-group').addClass('has-error').removeClass('has-success');
              $('#error').text('Ви не ввели телефон'); 
		        	}
		      	if ($data.comment) {			
		    	   //додати до елемента  клас .has-error та видалити .has-success
		    	   $('#comment').parents('.form-group').addClass('has-error').removeClass('has-success');               	
	        		}
           }
         },
         error: function (request) {
          $('#error').text('Виникла помилка ' + request.responseText + ' при відправці даних. Спробуйте зателефонувати нам.');
         }
      });
    }
  });
});