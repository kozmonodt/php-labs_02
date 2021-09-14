<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title>Чёткий сайтик</title>
	<link rel="stylesheet" href="/css/style.css">
	<script>
		function bigMenu(x) {
			x.style.backgroundColor = "red";
		}

		function normalMenu(x) {
			x.style.backgroundColor = "white";
		}

		function myFunction() {
			document.getElementById("myDropdown").classList.toggle("show");
		}

		// Close the dropdown menu if the user clicks outside of it
		window.onclick = function(event) {
			if (!event.target.matches('.dropbtn')) {
				var dropdowns = document.getElementsByClassName("dropdown-content");
				var i;
				for (i = 0; i < dropdowns.length; i++) {
					var openDropdown = dropdowns[i];
					if (openDropdown.classList.contains('show')) {
						openDropdown.classList.remove('show');
					}
				}
			}
		}

		function myFunction() {
			document.getElementById("myDropdown").classList.toggle("show");
		}

		function startTime() {
			var today = new Date();
			var h = today.getHours();
			var m = today.getMinutes();
			var s = today.getSeconds();
			m = checkTime(m);
			s = checkTime(s);
			var date = today.toLocaleDateString();
			var days = ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'];
			var dayName = days[today.getDay()];
			document.getElementById('clock').innerHTML = date + " " + dayName + " " + h + ":" + m + ":" + s;
			var t = setTimeout(startTime, 1000);
		}

		function checkTime(i) {
			if (i < 10) {
				i = "0" + i
			}; // add zero in front of numbers < 10
			return i;
		}

		function addToHistory() {

		}

		var historyMainArr = [];

		function onLoad() {
			if (localStorage.getItem('historyMain') != null) {
				window.historyMainArr = JSON.parse(localStorage.getItem('historyMain'));
			}
			addHistory();
			checkCookie('historyMainCook');

		}

		function addHistory() {
			window.historyMainArr.push(1);
			localStorage.setItem('historyMain', JSON.stringify(historyMainArr));
		}

		///////

		function setCookie(cname, cvalue, exdays) {
			var d = new Date();
			d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
			var expires = "expires=" + d.toUTCString();
			document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
		}

		function getCookie(cname) {
			var name = cname + "=";
			var ca = document.cookie.split(';');
			for (var i = 0; i < ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0) == ' ') {
					c = c.substring(1);
				}
				if (c.indexOf(name) == 0) {
					return c.substring(name.length, c.length);
				}
			}
			return "";
		}

		function checkCookie(request) {
			var user = getCookie(request);
			var n = 1;
			if (user != "") {
				user = parseInt(user, 10) + n;
				setCookie(request, user, 365);
			} else {
				setCookie(request, 0, 365);
			}
		}
	</script>
</head>

<body onload="startTime(); addToHistory(); onLoad()">
	<header>
		<div class="wrapperHeader">
			<div class="logo">
				<p>ЛЕХА!</p>
			</div>
			<div class="phone">
				<p>+79781234567</p>
			</div>
			<div class="search">
				<form action="#">
					<input type="text">
					<input type="submit" value="Отправить">
				</form>
			</div>
			<div class="clock" id="clock">
			</div>
		</div>
		<nav id="menu">
			<ul>
				<li id="active"><a href="/main">Главная</a></li>
				<li onmouseover="bigMenu(this)" onmouseout="normalMenu(this)"><a href="/about">О мне</a></li>
				<li onmouseover="bigMenu(this)" onmouseout="normalMenu(this)">
					<a href="/interests" onclick="myFunction()" class='dropbtn' " >Мои интересы</a>
                        <ul id=" myDropdown" class="dropdown-content">
							<li><a href="hobbies.html#Ходить">Ходить</a></li>
							<li><a href="hobbies.html#Сидеть">Сидеть</a></li>
							<li><a href="hobbies.html#Кушать">Кушать</a></li>
							<li><a href="hobbies.html#Спать">Спать</a></li>
						</ul>
				</li>
				<li onmouseover="bigMenu(this)" onmouseout="normalMenu(this)"><a href="#">Учеба</a>
					<ul class="submenu">
						<li><a href="/disciplines">Дисциплины</a></li>
						<li><a href="/test">Пройти тест</a></li>
					</ul>
				</li>
				<li onmouseover="bigMenu(this)" onmouseout="normalMenu(this)"><a href="/photo">Фотоальбом</a></li>
				<li onmouseover="bigMenu(this)" onmouseout="normalMenu(this)"><a href="/contact">Контакты</a></li>
				<li onmouseover="bigMenu(this)" onmouseout="normalMenu(this)"><a href="/history">История</a></li>
			</ul>
		</nav>
	</header>
	<?php include 'application/views/' . $content_view; ?>
	<div id="footer">
		<a href="/">Булах А.А.</a> &copy; 2021</a>
	</div>
</body>