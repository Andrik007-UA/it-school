<?php?>
<!DOCTYPE html>
<html lang="uk_UA">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="style.css">

	<title>IT-School</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 1</h1>
				<form action="/php-sc/do1.php" method="GET" class="form-group">
					<label for="fcinp01">A: </label><input type="text" class="form-control" name="a" id="fcinp01">
					<label for="fcinp012">B: </label><input type="text" class="form-control" name="b" id="fcinp012">
					<div class="buttons-cnt">
						<button class="btn btn-default" type="button" onclick="click(this)">Завдання</button>
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
						<button class="btn btn-default" type="button" onclick="click(this)">Завдання</button>
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
						<button class="btn btn-default" type="button" onclick="click(this)">Завдання</button>
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
						<button class="btn btn-default" type="button" onclick="click(this)">Завдання</button>
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
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 6</h1>
				<form action="/php-sc/do6.php" method="POST" class="form-group">
					<label for="fcinp06">Довжина: </label><input type="text" class="form-control" id="fcinp06" name="a">
					<label for="fcinp061">Ширина: </label><input type="text" class="form-control" id="fcinp061" name="b">
					<label for="fcinp062">Висота: </label><input type="text" class="form-control" id="fcinp062" name="c">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 7</h1>
				<form action="/php-sc/do7.php" method="POST" class="form-group">
					<label for="fcinp07">Ваше ім'я: </label><input type="text" class="form-control" id="fcinp07" name="name">
					<label for="fcinp071">Ваше прізвище: </label><input type="text" class="form-control" id="fcinp071" name="lastname">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
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
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
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
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 10</h1>
				<form action="/php-sc/do10.php" method="GET" class="form-group">
					<label for="fcinp10">A: </label><input  name="n1" type="text" class="form-control" id="fcinp10">
					<label for="fcinp102">B: </label><input name="n2" type="text" class="form-control" id="fcinp102">
					<label for="fcinp103">C: </label><input name="n3" type="text" class="form-control" id="fcinp103">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
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
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 12</h1>
				<form action="/php-sc/do12.php" method="GET" class="form-group">
					<label for="fcinp12">X: </label><input  name="x" type="text" class="form-control" id="fcinp12">
					<label for="fcinp122">Y: </label><input name="y" type="text" class="form-control" id="fcinp122">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
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
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
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
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 15</h1>
				<form action="/php-sc/do15.php" method="GET" class="form-group">
					<label for="fcinp15">Продані літри: </label><input  name="a" type="text" class="form-control" id="fcinp15">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 16</h1>
				<form action="/php-sc/do16.php" method="GET" class="form-group">
					<label for="fcinp16">Вік: </label><input  name="a" type="text" class="form-control" id="fcinp16">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 17</h1>
				<form action="/php-sc/do17.php" method="GET" class="form-group">
					<label for="fcinp17">Число від 0 до 9 включно: </label><input type="text" name="a" class="form-control" id="fcinp17">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 18</h1>
				<form action="/php-sc/do18.php" method="GET" class="form-group">
					<label for="fcinp18">Вхідні дані відсутні</label>
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання 19</h1>
				<form action="/php-sc/do19.php" method="GET" class="form-group">
					<label for="fcinp19">Номер дня тижня: </label><input type="text" name="a" class="form-control" id="fcinp19">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<!--<div class="col-sm-12 col-md-5 card">
				<h1>Завдання</h1>
				<form action="/php-sc/do02.php" method="GET" class="form-group">
					<label for="fcinp02">Input 02</label>
					<input type="text" class="form-control" id="fcinp02">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання</h1>
				<form action="/php-sc/do01.php" method="GET" class="form-group">
					<label for="fcinp01">Input 01</label>
					<input type="text" class="form-control" id="fcinp01">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання</h1>
				<form action="/php-sc/do02.php" method="GET" class="form-group">
					<label for="fcinp02">Input 02</label>
					<input type="text" class="form-control" id="fcinp02">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання</h1>
				<form action="/php-sc/do01.php" method="GET" class="form-group">
					<label for="fcinp01">Input 01</label>
					<input type="text" class="form-control" id="fcinp01">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання</h1>
				<form action="/php-sc/do02.php" method="GET" class="form-group">
					<label for="fcinp02">Input 02</label>
					<input type="text" class="form-control" id="fcinp02">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання</h1>
				<form action="/php-sc/do01.php" method="GET" class="form-group">
					<label for="fcinp01">Input 01</label>
					<input type="text" class="form-control" id="fcinp01">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання</h1>
				<form action="/php-sc/do02.php" method="GET" class="form-group">
					<label for="fcinp02">Input 02</label>
					<input type="text" class="form-control" id="fcinp02">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання</h1>
				<form action="/php-sc/do01.php" method="GET" class="form-group">
					<label for="fcinp01">Input 01</label>
					<input type="text" class="form-control" id="fcinp01">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання</h1>
				<form action="/php-sc/do02.php" method="GET" class="form-group">
					<label for="fcinp02">Input 02</label>
					<input type="text" class="form-control" id="fcinp02">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання</h1>
				<form action="/php-sc/do01.php" method="GET" class="form-group">
					<label for="fcinp01">Input 01</label>
					<input type="text" class="form-control" id="fcinp01">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
			<div class="col-sm-12 col-md-5 card">
				<h1>Завдання</h1>
				<form action="/php-sc/do02.php" method="GET" class="form-group">
					<label for="fcinp02">Input 02</label>
					<input type="text" class="form-control" id="fcinp02">
					<div class="buttons-cnt"><button class="btn btn-default" type="button" onclick="click(this)">Завдання</button><button class="btn btn-primary" type="submit">Виконати</button></div>
				</form>
			</div>
		</div>-->

	</div>
	<script>
		$(document).ready(function(){
			$(".card:nth-child(2n)").addClass("col-md-offset-2");
		})
	</script>
</body>
</html>