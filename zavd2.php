<!DOCTYLE HTML>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>SoftGroup</title>
  <link href="main.css" rel="stylesheet" type="text/css"
 </head>
 
 <body>
<div class="page_align"> 
	<div class="header"> 
		<div class="header_I">
			<ul>
				<li><a href="index.php">  <h2>Головна</h2> </a> </li>
				<li><a href="Author.php"><h2> Автор </h2></a> </li>
				<li><a href="https://www.softgroup.ua/"> <h2>Soft Group <h2></a></li>
			</ul>
		</div>
	</div>
	
		<p> <img src="logo.png" alt="html">
</div>	
	

		
	<div class="sidebar">
		<div class="sidebar_I">
			<ul>
				<li><a href="zavd1.php">  <h3>Завдання 1</h3> </a> </li>
				<li><a href="zavd2.php">  <h3>Завдання 2</h3> </a> </li>
				<li><a href="zavd3.php">  <h3>Завдання 3</h3> </a> </li>
				<li><a href="#">  <h3>Завдання 4</h3> </a> </li>
				<li><a href="#">  <h3>Завдання 5</h3> </a> </li>
				<li><a href="#">  <h3>Завдання 6</h3> </a> </li>				
			</ul>
		</div>
	</div>
		
	
	

 <p><h2 align="center">Завдання 2</h2></p>
 <br>
 <form action="zavd2.php" method="post" align="center"> 
 <br>
<h3>Слова найбільшої довжини:</h3> 
 <br>
<label for="txt">Введіть текст:</label> 
 <br>
<input type="text" class="form" id="txt" name="str"> 
<input type="submit" class="btn"> 
</div> 


<?php 
$st= $_POST['str']; 
$allWords = preg_split("/[s ,]+/", $st); 
$maxLenWord = strlen($allWords[0]); 

foreach ($allWords as $value) 
{ 
if (strlen($value) > $maxLenWord) 
{ 
$maxLenWord = $value; 
} 
} 

//перевірка на наявність декількох слів одинакової довжини 
$maxLenWords = array(); 
foreach ($allWords as $value) 
{ 
if (strlen($value) === strlen($maxLenWord)) 
{ 
$maxLenWords[] = $value; 
} 
} 

//виводимо слова 
foreach ($maxLenWords as $value) 
{ 
echo $value . ", "; 
} 

?>
</form>
	
	</div>
	<div class="crl"> </div>
	
	
<div class="end">
	<P> <h5 align="center"> &copy Гаврилюк Дмитро</h5></p>
	<P> <h5 align="center"> 2017</h5></p>
</div>
	
 </body>
</html>