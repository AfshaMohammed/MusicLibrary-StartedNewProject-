<!Doctype html>
<html>
	<head>
		<title>Music Library</title>
		<link rel="stylesheet" href="style1.css" type="text/css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	</head>
	<body>
		<div class="MusicLibrary">
			<div class="header">
				<h1><i>Music Library</i></h1>
			</div>
			<div class="body">
				<div id="nav">
				<ul>
					<li><a style="text-decoration:none; color:white; font-size:20px" href="Index.php">Home</a>&nbsp&nbsp&nbsp;</li>
					<li><a style="text-decoration:none; color:white; font-size:20px" href="AboutUs.html">AboutUs</a>&nbsp&nbsp&nbsp;</li>
					<li><a style="text-decoration:none; color:white; font-size:20px" href="ContactUs.html">ContactUs</a>&nbsp&nbsp&nbsp;</li>
				</ul>
				</div>
				</br></br>
				<img id="img1" style="float:right;" src="Images/Music-Heart.jpg" alt="MusicLovers" width="250" height="250">
				<h2 style="color:brown">Manager Login</h2>
				<br>
				<button>Click here to Login</button>
				<br><br>
				<table style="border: 1px solid #cccccc; box-shadow:5px 5px 5px 8px #cccccc">
					<tr>
						<td>
							<h2 style="color:blue">User Email:<h2>
						</td>
						<td>
							<input type="email" name="email" placeholder="Please Enter Email Address" size="30" maxlength="20"/>
						</td>
					</tr>
					<tr>
						<td>
							<h2 style="color:blue">Password:<h2>
						</td>
						<td>
							<input type="password" name="password" placeholder="Please Enter Password" size="30" maxlength="20"/>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><button>Submit</button></td>
					</tr>
				</table>
				<br>
				<div class="footer">
					<marquee><img src="Images/scroll.jpg"  alt="Music Systems" width="250" height="250"></marquee>
				</div>
	</div>
	<script>
		$(document).ready(function(){
			$("input").focus(function(){
				$(this).css("background-color", "#ffccff")
			});
			$("input").blur(function(){
				$(this).css("background-color", "#ffffff")
			});
		});
		$(document).ready(function(){
			$('table').hide();
			$("button").click(function(){
				$("table").fadeToggle("slow");
			});
		});
	
	</script>
	</body>
</html>
