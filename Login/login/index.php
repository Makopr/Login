<!DOCTYPE html>
<html lang="ru"><head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="../files/logo_voenmeh.ico">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<title>Вход</title>
</head>
<body>
	<img src="img/backG.jpg" class="background"/>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form>
				<h1>Создайте Аккаунт</h1>
				<span>Используйте эту возможность с умом</span>
				<input type="text" class="form" placeholder="Name" id="RegUsername" name="name"/>
				<input type="email" class="form" placeholder="Email" id="RegEmail" name="email"/>
				<input type="password" class="form" placeholder="Password" id="RegPassword" name="pass">
				<a class="regpass-icon" id="regpass-icon"><img src="img/view.svg" id="regIcon" style="width:20px;height:20px;"></a>
				<button class="btn btn-success" id="register-button" type="button">Зарегистрироваться</button>
				<div class="reger">
					<span class="hide" id="regText">Вы зарегестрированы</span>
				</div>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form>
				<h1>Войти</h1>
				<span>Введите почту, с которой регистрировались</span>
				<input type="email" class="form" placeholder="Email" id="SignEmail" name="email"/>
				<input type="password" class="form" placeholder="Password" id="SignPassword" name="pass">
				<a class="signpass-icon" id="signpass-icon"><img src="img/view.svg" id="signIcon" style="width:20px;height:20px;"></a>
				<button class="btn btn-success" id="sign-button" type="button">Войти</button>
				<div class="signer">
					<span class="hide" id="signText">Пользователя нет.</span>
				</div>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Войдите!</h1>
					<p>Введите свою почту, пароль и вас вспомнят</p>
					<button class="ghost" id="signIn">Войти</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Привет, Друг!</h1>
					<p>Расскажите, кто вы и какая у вас почта</p>
					<button class="ghost" id="signUp">Зарегистрироваться</button>
				</div>
			</div>
		</div>
	</div>
	<script src="js/script.js"></script>
</body>
</html>