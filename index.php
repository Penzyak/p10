<?php
if(isset($_POST['Ok']))
{
	$m_x = (int) $_POST['X'];
	$m_a = (int) $_POST['A'];
	$m_b = (int) $_POST['B'];
	$m_c = (int) $_POST['C'];
	class Math
	{
		public $m_x, $m_a, $m_b, $m_c;		
		function __construct($m_x, $m_a, $m_b, $m_c)
		{
			$this->m_x = $m_x;
			$this->m_a = $m_a;
			$this->m_b = $m_b;
			$this->m_c = $m_c;
		}
		function Case1()
		{
			if($m_x <= 3)
			{
                echo "y=x^2-3x+9 при x<=3";
                echo "<br>";
				echo ($this->m_x ** 2) - 3 * $this->m_x + 9;
                echo "<br>";
			}
			else
			{
                echo "y=x^3+6 при x>3";
                echo "<br>";
				echo $this->m_x ** 3 + 6;
                echo "<br>";
			}
		}
		function Case2()
		{
            echo "y=ab+c";
            echo "<br>";
			echo $this->m_a * $this->m_b + $this->m_c;
		}
	}
	$num = new Math($m_x, $m_a, $m_b, $m_c);
	$num->Case1();
	$num->Case2();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post">
<input type="text" name="X" placeholder="Введите X">
<br>
<input type="text" name="A" placeholder="Введите A">
<br>
<input type="text" name="B" placeholder="Введите B">
<br>
<input type="text" name="C" placeholder="Введите C">
<br>
<button type="submit" name="Ok" m="Ok">Посчитать</button>
</form>
</body>
</html>