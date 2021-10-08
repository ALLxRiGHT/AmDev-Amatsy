<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  	<script src="ajax.js"></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<main>
		<form action="" id="ajax_form" method="post">
			<h1>Банкомат</h1>
			<div>
				<p>Номинал в наличии:</p>
				<input type="text" name="nominals" placeholder="5,10,20,50,100,200,500" pattern="\d+((,\d+)+)?" required>
			</div>
			<div>
				<p>Ваша сумма:</p>
				<input type="number" name="sum" placeholder="12345" required min="0" step="1">
			</div>
			<div style="text-align: right;">
				<button>Отправить</button>
			</div>
		</form>
		
		<div class="answer">
			<label>Ответ:</label><br>
			<table id="result_form">

			</table>			
		</div>

	</main>
</body>
</html>