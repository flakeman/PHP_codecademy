<html>
	<head>
		<title></title>
	</head>
	<body>
      <p>
        <?php
        function greetings($name) {
            echo "Greetings, " . $name . "!";
        }
        $name = 'Vova';
        greetings($name);
        ?>
      </p>
    </body>
</html>