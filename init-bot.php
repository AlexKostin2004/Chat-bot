<?php 
	$text= $_POST['text'];//'Привет , Помогите , Пока';

	$text_main= $text;

	$text=mb_strtolower($text);

	$arr = explode(' ',$text);

	
	//array_push($arr, '$ExitSTR|array$exit_off');
	//array_unshift($arr, '$InSTR|array$in_off');

	$echo="";

	//$dial_str.="<p>";

	#print_r($arr);
	//$ar_r_e = "[^]*[$]";
	
	foreach ($arr as $value) {

		$dial_str.=$value;

		//var_dump($atskto);


		if ($atskto) {			
			$echo.="Человек, Да - это хорошо! ";
			$atskto=false;
		}

		if ($no) {
				
				if ($value=='вопросов' or $value=='вопросов.' or $value=='вопросов,' or $value=='вопросов?' or $value=='вопросов!') {
						
						$echo.="Это хорошо, когда нет вопросов! ";
					}	

			}

		if ($chto) {
				
				if ($value=='ты' or $value=='ты.' or $value=='ты,' or $value=='ты?' or $value=='ты') {
						
						$you_ts=true;
					}	



		if ($you_ts) {
				
				if ($value=='умеешь' or $value=='умеешь.' or $value=='умеешь,' or $value=='умеешь?' or $value=='умеешь!') {
						
						$echo.="Всё в разумных приделах! ";
					}	

			}


			if ($no) {
				
				if ($value=='вопросов' or $value=='вопросов.' or $value=='вопросов,' or $value=='вопросов?' or $value=='вопросов!') {
						
						$echo.="Это хорошо, когда нет вопросов! ";
					}	

			}	

			if ($this_is) {
				
				if ($value=='что' or $value=='что.' or $value=='что,' or $value=='что?' or $value=='что') {
						
						$echo.="<p>Ничего. </p> ";
					}	

				else{

					$echo.="<p>Ясно. </p> ";
				}

			}

			
			}	

			if ($kto) {
				
				if ($value=='тебя' or $value=='тебя.' or $value=='тебя,' or $value=='тебя?' or $value=='тебя!' or $value=='твой' or $value=='твой.' or $value=='твой,' or $value=='твой?' or $value=='твой!') {
						
						$echo.= "<p>Меня сделал всего один человек, Костин Александр. 13 летний программист из Омска! </p>";
						
					}	

				if ($value=='ты' or $value=='ты.' or $value=='ты,' or $value=='ты?' or $value=='ты!' or $value=='вы' or $value=='вы.' or $value=='вы,' or $value=='вы?' or $value=='вы!') {

					$atskto=true;
					$echo.= "<p>Я достаточно умный чат-бот. А Вы кто? </p>";
					$echo.="Человек, Да - это хорошо! ";
					$atskto=true;

					//var_dump($atskto);

				}

				if ($value=='он' or $value=='он.' or $value=='он,' or $value=='он?' or $value=='он!') {

					$echo.= "<p>Кто-то. </p>";

				}
				if ($value=='я' or $value=='я.' or $value=='я,' or $value=='я?' or $value=='я!') {

					$echo.= "<p>Никто!!! - это шутка! </p>";

				}

			}

			if ($value== "что!" or $value== "что," or $value== "что." or $value== "что" or $value== "что?") 
			{

					
				$chto=true;		
				$echo.= "<p>Ничего! </p>";
				
			}

			if ($value== "понял!" or $value== "понял," or $value== "понял." or $value== "понял" or $value== "понял?") 
			{		
				$echo.= "<p>Потом поймёте </p>";
				
			}

			if ($value== "ээй!" or $value== "ээй," or $value== "ээй." or $value== "ээй" or $value== "ээй?") 
			{		
				$echo.= "<p>Да, да я тут! </p>";
				
			}

			if ($value== "пожалуйста!" or $value== "пожалуйста," or $value== "пожалуйста." or $value== "пожалуйста" or $value== "пожалуйста?") 
			{		
				$echo.= "<p><big style=\"font-size: 50px;\">&#9786; </big> </p>";
				
			}

			if ($value== "+!" or $value== "+," or $value== "+." or $value== "+" or $value== "+?") 
			{		
				$echo.= "<p>Спасибо!!! <big style=\"font-size: 50px;\">&#9786; </big></p>";
				
			}

			if ($value== "-!" or $value== "-," or $value== "-." or $value== "-" or $value== "-?") 
			{		
				$echo.= "<p>Но я же только учусь. Обидно!!! <big style=\"font-size: 50px;\">&#9785; </big></p>";
				
			}

			if ($value== "ммм!" or $value== "ммм," or $value== "ммм." or $value== "ммм" or $value== "ммм?" or $value== "как-так!" or $value== "как-так," or $value== "как-так." or $value== "как-так" or $value== "как-так?" or $value== "возможно!" or $value== "возможно," or $value== "возможно." or $value== "возможно" or $value== "возможно?") 
			{		
				$echo.= "<p>Ну как-то так... </p>";
				
			}

			

			if ($value== "привет" or $value== "привет!" or $value== "привет," or $value== "привет." or $value=="hello" or $value=="hello," or $value=="hello!" or $value=="hello." or $value=="здравствуйте" or $value=="здравствуйте," or $value=="здравствуйте!" or $value=="здравствуйте.") {
				//echo $value." ";
				
				//$echo.="<p>Привет. </p>";
				//
				
				if ($priv!=1) {

					$rand=rand(0,3);
					if ($rand==0) {			 
						 $echo.="Привет. ";			
					}
					if ($rand==1) {			 
						 $echo.="Здравтвуйте. ";			
					}
					if ($rand==2) {			 
						 $echo.="Hello. ";			
					}
					if ($rand==3) {			 
						 $echo.="Bonjour. ";			
					}
					if ($rand==4) {			 
						 $echo.="Hi. ";			
					}
					//$echo.="<p>Я готов вслушать ваш вопрос. </p>";
				}

				$priv=1;
			}
			if ($value== "помогите" or $value== "помогите," or $value== "помогите!" or $value== "помогите." or $value=="помощь" or $value=="помощь," or $value=="помощь!" or $value=="помощь." or $value=="help,"  or $value=="help" or $value=="help!" or $value=="help.") {
				//echo $value." ";
				$echo.= "<p>Рад вам помочь! </p>";
			}

			if ($value== "пока!" or $value== "пока." or $value== "пока,"  or $value== "пока" or $value=="досвидания," or $value=="досвидания" or $value=="досвидания." or $value=="досвидания!" or $value=="свидания" or $value=="свидания," or $value=="свидания!" or $value=="свидания.") {
				//echo $value." ";
				//
				if ($pocka!=1) {
					
					$echo.= "<p>Пока. </p>";
				}			

				

				$pocka=1;
			}
			if ($value== "войти?" or $value== "войти," or $value== "войти" or $value== "войти." or $value=="вход?" or $value=="вход" or $value=="вход," or $value=="пароль?" or $value=="пароль." or $value=="пароль," or $value=="пароль" or $value=="input?" or $value=="input," or $value=="input") {
				//echo $value." ";
				$echo.= "<p>Для того чтобы войти наберите логин и пароль. </p> Или Нажмите \"Сброс пароля\". ";
			}
			if ($value== "спасибо!" or $value== "спасибо," or $value== "спасибо." or $value== "спасибо" or $value=="благодарю," or $value=="благодарю" or $value=="благодарю!" or $value=="благодарю.") {
				//echo $value." ";
				$echo.= "<p>Не за, что! </p>";
			}
			if ($value== "дела" or $value== "дела," or $value== "дела?" or $value=="настроение" or $value=="настроение," or $value=="настроение?") {
				//echo $value." ";
				$echo.= "<p>Хорошо, спасибо, а у Вас? </p>";
			}
			if ($value== "хорошо" or $value== "хорошо," or $value== "хорошо." or $value== "хорошо!" or $value=="замечательно" or $value=="замечательно." or $value=="замечательно," or $value=="замечательно!" or $value=="отлично" or $value=="отлично." or $value=="отлично," or $value=="отлично!" or $value=="неплохо!" or $value=="неплохо," or $value=="неплохо." or $value=="неплохо" or $value=="нечего!" or $value=="нечего," or $value=="нечего." or $value=="нечего" or $value=="тоже!" or $value=="тоже," or $value=="тоже." or $value=="тоже") {
				//echo $value." ";
				$echo.= "<p>Это, великолепно! </p>";
			}
			if ($value== "плохо" or $value== "плохо!" or $value== "плохого" or $value== "плохого." or $value== "плохого," or $value== "плохого?" or $value== "плохого!" or $value== "плохо." or $value== "плохо," or $value=="отвратительно" or $value=="отвратительно!" or $value=="отвратительно," or $value=="отвратительно." or $value=="ужасно." or $value=="ужасно," or $value=="ужасно!" or $value=="ужасно" or $value=="кошмарно!" or $value=="кошмарно" or $value=="кошмарно," or $value=="кошмарно." or $value=="кошмарно!") {
				//echo $value." ";
				$echo.= "<p>Ничего страшного, скоро пройдёт! </p>";
			}

			if ($value== "погода" or $value== "погода?" or $value== "погоду?" or $value== "погоде?" or $value== "погоды?" or $value== "погода!" or $value== "погода." or $value== "погода," or $value=="погоду" or $value=="погоду!" or $value=="погоду," or $value=="погоду." or $value=="погоде." or $value=="погоде," or $value=="погоде!" or $value=="погоде" or $value=="погоды!" or $value=="погоды" or $value=="погоды," or $value=="погоды." or $value=="погоды!") {
				//echo $value." ";
				$echo.= "<p>Пока такой функции нет. <a href=\"https://yandex.ru/pogoda/\">Но вы можете пройти по жтой ссылки</a></p>";
			}

			if ($value== "нет!" or $value== "нет," or $value== "нет." or $value== "нет") {
				//echo $value." ";
				//
				
				$no=true;
				
				//$echo.= "<p>Не за, что! </p>";
			}

			if ($value== "когда!" or $value== "когда," or $value== "когда." or $value== "когда" or $value== "когда?") {
							
				$echo.= "<p>Когда нибудь... </p>";
				
			}

			if ($value== "кто!" or $value== "кто," or $value== "кто." or $value== "кто" or $value== "кто?") {
							
				$kto=true;
				
			}


				//Привет, как дела? У меня всё хорошо, но я не могу войти. Заранее спасибо! Пока.
				//
				//Привет, как дела? У меня всё хорошо, но я не могу войти и ещё у меня проблема, как тут искать . Заранее спасибо! Пока.
				//
				//Привет, как дела? У меня всё хорошо, но я не могу войти и ещё у меня проблема, как тут искать . Заранее спасибо! О и всё хотел спросить кто ты и кто тебя создал? Пока.
				//Привет, привет! Как дела? У меня всё хорошо, но я не могу войти и ещё у меня проблема, как тут искать . Заранее спасибо! О и всё хотел спросить кто ты ,  кто тебя создал и что ты умеешь, когда у тебя день рождения? Пока, пока!

			if ($value== "поиск" or $value== "поиск?" or $value== "поиске?" or $value== "поиски?" or $value== "погоды?" or $value== "поиск!" or $value== "поиск." or $value== "поиск," or $value=="поиске" or $value=="поиске!" or $value=="поиске," or $value=="поиске." or $value=="поиски." or $value=="поиски," or $value=="поиски!" or $value=="поиски" or $value=="поиску!" or $value=="поиску" or $value=="поиску," or $value=="поиску." or $value=="поиску!" or $value=="найти!" or $value=="найти" or $value=="найти," or $value=="найти." or $value=="найти!" or $value=="искать!" or $value=="искать" or $value=="искать," or $value=="искать." or $value=="искать!" or $value=="искать?" or $value=="поискать!" or $value=="поискать" or $value=="поискать," or $value=="поискать." or $value=="поискать!") {
				//echo $value." ";
				$echo.= "<p>Чтобы выполнить поиск надо нажать на кнопку \"Искать!\" </p>";
			}

			if ($value== "почисти!" or $value== "почисти," or $value== "почисти." or $value== "почисти" or $value=="чисти," or $value=="чисти" or $value=="чисти!" or $value=="чисти." or $value=="перезагрузи," or $value=="перезагрузи" or $value=="перезагрузи!" or $value=="перезагрузи.") {
				//echo $value." ";
				$echo.= "<script>window.location.reload()</script>";
			}

			if ($value== "это!" or $value== "это," or $value== "это." or $value== "это" or $value== "это?") {
					
				$this_is=true;		
				//$echo.= "<p>Ясно! </p>";
				
			}

			if ($value == '$ExitSTR|array$exit_off') {

				$dial_str.="</p>";

			}

			if ($value == '$InSTR|array$in_off') {

				$dial_str.="<p>";

			}

			if ($value == "mydial_on") {

				$echo.= $dial_str;

			}

			

		}

	if (empty($echo)) {
		echo "Я вас не понял! ";
		$rand=rand(0,3);
		if ($rand==0) {			 
			 echo "Попробуйте ещё раз.";			
		}
		if ($rand==1) {			 
			 echo "Повторите свой запрос. ";			
		}
		if ($rand==2) {			 
			 echo "Напишите пожалуйста понятние. ";			
		}
		if ($rand==3) {			 
			 echo "Уточните запрос. ";			
		}
		if ($rand==4) {			 
			 echo "Спросите по другому. ";			
		}
		echo "<p>Вы хотели спросить: $text_main </p>";
	}
	if (!empty($echo)) {
		echo $echo;
	}
	

		//$text= $_POST['text'];



 ?>