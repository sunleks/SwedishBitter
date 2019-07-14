<?php 
	// require_once 'router.php';
	require_once 'controller.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>testProject</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>	
	<div class="table">
		<div class="table__column">
			<div class="table__cell table__cell--header">Имя</div>
			<?php foreach ($users as $key => $value):?>
			<div><?=$value['name']?></div>
			<?php endforeach; ?>
		</div>
		<div class="table__column">
			<div class="table__cell table__cell--header">Возраст</div>
			<?php foreach ($users as $key => $value):?>
			<div><?=$value['age']?></div>
			<?php endforeach; ?>
		</div>
		<div class="table__column">
			<div class="table__cell table__cell--header">Город</div>
			<?php foreach ($users as $key => $value):?>
			<div><?=$value['cities']?></div>
			<?php endforeach; ?>
		</div>
		
	</div>
	<form method="post" action="" name="form">
		<label for="name">Имя</label>
		<input type="text" name="name" id="name" value="<?=$name;?>">
		<label for="age">Возраст</label>
		<input type="text" name="age" id="age" value="<?=$age;?>">
		<div>Город</div>
		<br>
		<select name="cities" id="cities">
			<?php foreach ($cities as $key => $cities) { ?>
			<option value="<?=$cities['id']?>"><?=$cities['cities']?></option>
			<?php } ?>
		</select>
		<input type="submit" name="submit" value="submit" id="submit">
	</form>
	<div>
		<h1><?=$msg ?></h1>
	</div>
</body>
</html>
