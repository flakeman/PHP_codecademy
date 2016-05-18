<!DOCTYPE html>
<html>
	<head>
	  <title> Practice makes perfect! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <?php
        /*обязательно указывать комментарии*/
        //создаю класс
        class Dog {
         public $numLegs = 4;
         public $name;
         public function __construct($name) { //создаю конструктор
             $this->name = $name;
         }
        }
        ?>
      </p>
    </body>
</html>