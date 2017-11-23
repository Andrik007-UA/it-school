<?php?>
<!DOCTYPE html>
<html lang="uk_UA">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="loader.css">
	<!--<script src="jsvndr/jsencrypt.js"></script>-->

	<title>IT-School</title>
</head>
<body>
	<div class="shtora left-top-shtora"></div>
	<div class="shtora left-bottom-shtora"></div>
	<div class="shtora right-top-shtora"></div>
	<div class="shtora right-bottom-shtora"></div>
	<div class="loader">
		<span>{</span><span>}</span>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 1</h1>
				<form action="/php-sc/do1.php" method="GET" class="form-group">
					<label for="fcinp01">A: </label><input type="text" class="form-control" name="a" id="fcinp01">
					<label for="fcinp012">B: </label><input type="text" class="form-control" name="b" id="fcinp012">
					<div class="buttons-cnt">
						<button class="btn btn-default" type="button" onclick="click(1)">Завдання</button>
						<button class="btn btn-primary" type="submit">Виконати</button>
					</div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 2</h1>
				<form action="/php-sc/do2.php" method="POST" class="form-group">
					<label for="fcinp02">A: </label><input type="text" class="form-control" name="a" id="fcinp02">
					<label for="fcinp022">B: </label><input type="text" class="form-control" name="b" id="fcinp022">
					<div class="buttons-cnt">
						<button class="btn btn-default" type="button" onclick="click(2)">Завдання</button>
						<button class="btn btn-primary" type="submit">Виконати</button>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 3</h1>
				<form action="/php-sc/do3.php" method="POST" class="form-group">
					<label for="fcinp03">A: </label><input type="number" class="form-control" name="a" id="fcinp03">
					<label for="fcinp032">B: </label><input type="number" class="form-control" name="b" id="fcinp032">
					<div class="buttons-cnt">
						<button class="btn btn-default" type="button" onclick="click(3)">Завдання</button>
						<button class="btn btn-primary" type="submit">Виконати</button>
					</div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 4</h1>
				<form action="/php-sc/do4.php" method="POST" class="form-group">
					<label for="fcinp04">X1: </label><input type="number" class="form-control" name="x1" id="fcinp04">
					<label for="fcinp042">Y1: </label><input type="number" class="form-control" name="y1" id="fcinp042">
					<label for="fcinp043">X2: </label><input type="number" class="form-control" name="x2" id="fcinp043">
					<label for="fcinp044">Y2: </label><input type="number" class="form-control" name="y2" id="fcinp044">
					<div class="buttons-cnt">
						<button class="btn btn-default" type="button" onclick="click(4)">Завдання</button>
						<button class="btn btn-primary" type="submit">Виконати</button>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 5</h1>
				<form action="/php-sc/do5.php" method="POST" class="form-group">
					<label for="fcinp05">Години: </label>
					<input type="text" class="form-control" id="fcinp05" name="hours">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(5)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 6</h1>
				<form action="/php-sc/do6.php" method="POST" class="form-group">
					<label for="fcinp06">Довжина: </label><input type="text" class="form-control" id="fcinp06" name="a">
					<label for="fcinp061">Ширина: </label><input type="text" class="form-control" id="fcinp061" name="b">
					<label for="fcinp062">Висота: </label><input type="text" class="form-control" id="fcinp062" name="c">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(6)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 7</h1>
				<form action="/php-sc/do7.php" method="POST" class="form-group">
					<label for="fcinp07">Ваше ім'я: </label><input type="text" class="form-control" id="fcinp07" name="name">
					<label for="fcinp071">Ваше прізвище: </label><input type="text" class="form-control" id="fcinp071" name="lastname">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(7)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 8</h1>
				<form action="/php-sc/do8.php" method="POST" class="form-group">
					<label for="fcinp08">Сума: </label><input name="sum" type="text" class="form-control" id="fcinp02">
					<label for="fcinp081">Валюта в яку треба конвертувати: </label><select name="to" id="fcinp081" class="form-control">
						<option value="dollar">&dollar;</option>
						<option value="euro">&euro;</option>
						<option value="pound">&pound;</option>
					</select>
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(8)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 9</h1>
				<form action="/php-sc/do9.php" method="GET" class="form-group">
					<label for="fcinp09">A: </label>
					<input type="text" class="form-control" id="fcinp09" name="a">
					<label for="fcinp091">B: </label>
					<input type="text" class="form-control" id="fcinp091" name="b">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(9)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 10</h1>
				<form action="/php-sc/do10.php" method="GET" class="form-group">
					<label for="fcinp10">A: </label><input  name="n1" type="text" class="form-control" id="fcinp10">
					<label for="fcinp102">B: </label><input name="n2" type="text" class="form-control" id="fcinp102">
					<label for="fcinp103">C: </label><input name="n3" type="text" class="form-control" id="fcinp103">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(10)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 11</h1>
				<form action="/php-sc/do11.php" method="GET" class="form-group">
					<label for="fcinp11">A: </label><input  name="n1" type="text" class="form-control" id="fcinp11">
					<label for="fcinp112">B: </label><input name="n2" type="text" class="form-control" id="fcinp112">
					<label for="fcinp113">C: </label><input name="n3" type="text" class="form-control" id="fcinp113">
					<label for="fcinp114">D: </label><input name="n4" type="text" class="form-control" id="fcinp114">
					<label for="fcinp115">E: </label><input name="n5" type="text" class="form-control" id="fcinp115">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(11)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 12</h1>
				<form action="/php-sc/do12.php" method="GET" class="form-group">
					<label for="fcinp12">X: </label><input  name="x" type="text" class="form-control" id="fcinp12">
					<label for="fcinp122">Y: </label><input name="y" type="text" class="form-control" id="fcinp122">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(12)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 13</h1>
				<form action="/php-sc/do13.php" method="GET" class="form-group">
					<label for="fcinp13">A: </label><input  name="n1" type="text" class="form-control" id="fcinp13">
					<label for="fcinp132">B: </label><input name="n2" type="text" class="form-control" id="fcinp132">
					<label for="fcinp133">C: </label><input name="n3" type="text" class="form-control" id="fcinp133">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(13)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 14</h1>
				<form action="/php-sc/do14.php" method="GET" class="form-group">
					<label for="fcinp14">X: </label><input  name="a" type="text" class="form-control" id="fcinp14">
					<label for="fcinp142">Y: </label><input name="b" type="text" class="form-control" id="fcinp142">
					<label for="fcinp143">Знак: </label><select class="form-control" id="fcinp143" name="znak">
						<option value="plus">+</option>
						<option value="minus">-</option>
					</select>
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(14)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 15</h1>
				<form action="/php-sc/do15.php" method="GET" class="form-group">
					<label for="fcinp15">Продані літри: </label><input  name="a" type="text" class="form-control" id="fcinp15">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(15)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 16</h1>
				<form action="/php-sc/do16.php" method="GET" class="form-group">
					<label for="fcinp16">Вік: </label><input  name="a" type="text" class="form-control" id="fcinp16">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(16)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 17</h1>
				<form action="/php-sc/do17.php" method="GET" class="form-group">
					<label for="fcinp17">Число від 0 до 9 включно: </label><input type="text" name="a" class="form-control" id="fcinp17">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(17)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 18</h1>
				<form action="/php-sc/do18.php" method="GET" class="form-group">
					<label for="fcinp18">Вхідні дані відсутні</label>
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(18)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 19</h1>
				<form action="/php-sc/do19.php" method="GET" class="form-group">
					<label for="fcinp19">Номер дня тижня: </label><input type="text" name="a" class="form-control" id="fcinp19">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(19)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 20</h1>
				<form action="/php-sc/do20.php" method="GET" class="form-group">
					<label for="fcinp20">Виберіть тип циклу: </label>
					<select name="ctype" id="fcinp20" class="form-control">
						<option value="for">for</option>
						<option value="while">while</option>
						<option value="do">do-while</option>
					</select>
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 21</h1>
				<form action="/php-sc/do21.php" method="GET" class="form-group">
					<label for="fcinp212">A = </label>
					<input type="text" class="form-control" id="fcinp212" name="a">
					<label for="fcinp213">B = </label>
					<input type="text" class="form-control" id="fcinp213" name="b">
					<label for="fcinp211">Виберіть тип циклу: </label>
					<select name="ctype" id="fcinp211" class="form-control">
						<option value="for">for</option>
						<option value="while">while</option>
						<option value="do">do-while</option>
					</select>

					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 22</h1>
				<form action="/php-sc/do22.php" method="GET" class="form-group">
					<label for="fcinp20">Виберіть тип циклу: </label>
					<select name="ctype" id="fcinp20" class="form-control">
						<option value="for">for</option>
						<option value="while">while</option>
						<option value="do">do-while</option>
					</select>
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 23</h1>
				<form action="/php-sc/do23.php" method="GET" class="form-group">
					<label for="fcinp23">A = </label>
					<input type="text" class="form-control" id="fcinp23" name="a">

					<label for="fcinp231">Виберіть тип циклу: </label>
					<select name="ctype" id="fcinp231" class="form-control">
						<option value="for">for</option>
						<option value="while">while</option>
						<option value="do">do-while</option>
					</select>

					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 24</h1>
				<form action="/php-sc/do24.php" method="GET" class="form-group">
					<label for="fcinp241">N =  </label>
					<input type="text" class="form-control" id="fcinp241" name="n">

					<label for="fcinp24">Виберіть тип циклу: </label>
					<select name="ctype" id="fcinp24" class="form-control">
						<option value="for">for</option>
						<option value="while">while</option>
						<option value="do">do-while</option>
					</select>
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 25</h1>
				<form action="/php-sc/do25.php" method="GET" class="form-group">
					<label for="fcinp251">N =  </label>
					<input type="text" class="form-control" id="fcinp251" name="n">

					<label for="fcinp25">Виберіть тип циклу: </label>
					<select name="ctype" id="fcinp25" class="form-control">
						<option value="for">for</option>
						<option value="while">while</option>
						<option value="do">do-while</option>
					</select>
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 26</h1>
				<form action="/php-sc/do26.php" method="GET" class="form-group">
					<label for="fcinp26">Виберіть тип циклу: </label>
					<select name="ctype" id="fcinp26" class="form-control">
						<option value="for">for</option>
						<option value="while">while</option>
						<option value="do">do-while</option>
					</select>
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 27</h1>
				<form action="/php-sc/do27.php" method="GET" class="form-group">
					<label for="fcinp271">Z =  </label>
					<input type="text" class="form-control" id="fcinp271" name="z">
					<label for="fcinp272">K =  </label>
					<input type="text" class="form-control" id="fcinp272" name="k">

					<label for="fcinp27">Виберіть тип циклу: </label>
					<select name="ctype" id="fcinp27" class="form-control">
						<option value="for">for</option>
						<option value="while">while</option>
						<option value="do">do-while</option>
					</select>
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 28</h1>
				<form action="/php-sc/do28.php" method="GET" class="form-group">
					<label for="fcinp281">N =  </label>
					<input type="text" class="form-control" id="fcinp281" name="z">

					<label for="fcinp28">Виберіть тип циклу: </label>
					<select name="ctype" id="fcinp28" class="form-control">
						<option value="for">for</option>
						<option value="while">while</option>
						<option value="do">do-while</option>
					</select>
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 29</h1>
				<form action="/php-sc/do29.php" method="GET" class="form-group">
					<label for="fcinp291">N =  </label>
					<input type="text" class="form-control" id="fcinp291" name="k">

					<label for="fcinp29">Виберіть тип циклу: </label>
					<select name="ctype" id="fcinp29" class="form-control">
						<option value="for">for</option>
						<option value="while">while</option>
						<option value="do">do-while</option>
					</select>
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 30</h1>
				<form action="/php-sc/do30.php" method="GET" class="form-group">
					<label for="fcinp301">K =  </label>
					<input type="text" class="form-control" id="fcinp301" name="k">

					<label for="fcinp30">Виберіть тип циклу: </label>
					<select name="ctype" id="fcinp30" class="form-control">
						<option value="for">for</option>
						<option value="while">while</option>
						<option value="do">do-while</option>
					</select>
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 31</h1>
				<form action="/php-sc/do31.php" method="GET" class="form-group">
					<label for="fcinp311">Слово =  </label>
					<input type="text" class="form-control" id="fcinp311" name="wd">

					<label for="fcinp31">Виберіть тип циклу: </label>
					<select name="ctype" id="fcinp31" class="form-control">
						<option value="for">for</option>
						<option value="while">while</option>
						<option value="do">do-while</option>
					</select>
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання</h1>
				<form action="/php-sc/do31.php" method="GET" class="form-group">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання</h1>
				<form action="/php-sc/do31.php" method="GET" class="form-group">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 34</h1>
				<form action="/php-sc/do34.php" method="GET" class="form-group">
					<label for="fcinp311">Слово =  </label>
					<input type="text" class="form-control" id="fcinp311" name="wd">

					<label for="fcinp31">Виберіть тип циклу: </label>
					<select name="ctype" id="fcinp31" class="form-control">
						<option value="for">for</option>
						<option value="while">while</option>
						<option value="do">do-while</option>
					</select>
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>

	</div>
	<script>
		$(document).ready(function() {
			$(".card:nth-child(2n)").addClass("col-md-offset-2");
			$("input").attr("required", "required");
			$("input").attr("autocomplete", "off");
			setTimeout(function () {
	            $(".right-top-shtora").animate({
	                left: "+100%",
	                top: "-100%"
	            }, 500);
	            $(".right-bottom-shtora").animate({
	                top: "+100%",
	                left: "+100%"
	            }, 500);
	            $(".left-top-shtora").animate({
	                top: "-100%",
	                left: "-100%"
	            }, 500);
	            $(".left-bottom-shtora").animate({
	                left: "-100%",
	                top: "+100%"
	            }, 500);
	            $(".loader").fadeOut(500);
	        }, 1000);
		})
	</script>
	<script src="js.js" type="javascript"></script>
</body>
</html>