<?php 


class Flash {

	//Добавляет сообщение во фшелку выбранного типа
	public function add($message, $type) {
		$_SESSION['messages'][$type][] = $message;
	}
	//Удаляет все флешки с содержимым
	public static function clearAll() {
		unset($_SESSION['messages']);
	}
	//Удаляет флешку по типу и принадлежащие ей сообщения
	public static function clear($type) {
		unset($_SESSION['messages'][$type]);
	}
	//Выводит все флешки с сообщениями в html
	public static function showAll() {			
		
		// разделить флешки по типу и вывести все сообщения в данном типе
		$types = array_keys($_SESSION['messages']);
		
		foreach ($types as $type) {

			echo "<div class='flash-${type}'>";

				foreach ($_SESSION['messages'][$type] as $message) {
					
					echo "<p>${message}</p>";				
					
				}

			echo "</div>";
		}

	}
	
	//Выводит флешку по типу с сообщениями
	public static function show($type = null) {

		echo "<div class='flash-${type}'>";

		foreach ($_SESSION['messages'][$type] as $message) {
			echo "<p>${message}</p>";
		}

		echo "</div>";
	}	
}


?>