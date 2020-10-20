  <?php
   /* $param  = 'John!';

    function sayHello()
    {
      $param = 'Michael!';
      $func  = function() use ($param)
      {
        echo 'Hi, I am ' . $param;
      };
      $func();
    }
	
	

    sayHello();
	
	
	$param  = 'John!';

    function sayHello()
    {
      $param = 'Michael!';
      $func  = function() {echo 'Hi, I am ' . $param;};
      $func();
    }
	
	

    sayHello();*/
	
	
	$param  = 'John!';

    function sayHello()
    {
      $param = 'Michael!';
      $func  = function() use (&$param)
      {
        $param = 'Dave!';
      };
      $func();
      echo 'I am ' . $param; // prints I am Dave!
    }
    sayHello();
	/*
	php closures w kontekjscie obiektowki https://www.php.net/manual/en/class.closure.php
	
	https://www.php.net/manual/en/functions.anonymous.php
	php closueres w kontekscie programowania aprpceduralnego 
	
	*/
	
	?>