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
					<li><a style="text-decoration:none; color:white; font-size:20px" href="Index.php">Home</a>&nbsp&nbsp&nbsp</li>
					<li><a style="text-decoration:none; color:white; font-size:20px" href="AboutUs.html">AboutUs</a>&nbsp&nbsp&nbsp</li>
					<li><a style="text-decoration:none; color:white; font-size:20px" href="ContactUs.html">ContactUs</a>&nbsp&nbsp&nbsp</li>
					<li><a style="text-decoration:none; color:white; font-size:20px" href="SignIn.php">SignIn</a>&nbsp&nbsp&nbsp</li>
				</ul>
				</div>
				</br></br>
				<img id="img1" style="float:right;" src="Images/Music-Heart.jpg" alt="MusicLovers" width="250" height="250">
				<h2 style="color:brown">New User Registration</h2>
				<br>
				<button>Click here to Register</button>
				<br><br>
				<table style="border: 5px solid #cccccc">
					<tr>
						<td>
							<h2 style="color:blue; text-align:right">First Name:</h2>
						</td>
						<td>
							<input type="text" name="fname" placeholder="Please Enter Your First Name" size="30" maxlength="20"/>
						</td>
					</tr>
					<tr>
						<td>
							<h2 style="color:blue; text-align:right">Last Name:</h2>
						</td>
						<td>
							<input type="text" name="lname" placeholder="Please Enter Your Last Name" size="30" maxlength="20"/>
						</td>
					</tr>
					<tr>
						<td>
							<h2 style="color:blue;text-align:right">Gender:</h2>
						</td>
						<td>
							<form action="">
							<input type="radio"  name="gender" value="Male">Male<br>
							<input type="radio" name="gender" value="Male">Female<br>
							<input type="radio" name="gender" value="Male">Others<br>
							</form>
						</td>
					</tr>
					<tr>
						<td>
							<h2 style="color:blue; text-align:right">Date of Birth:</h2>
						</td>
						<td>
							<select>
								<option class="dropdown-header">Month</option>
								<option>January</option>
								<option>February</option>
								<option>March</option>
								<option>April</option>
								<option>May</option>
								<option>June</option>
								<option>July</option>
								<option>August</option>
								<option>September</option>
								<option>October</option>
								<option>November</option>
								<option>December</option>
							</select>
							<select>
								<option class="dropdown-header">Date</option>
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
								<option>06</option>
								<option>07</option>
								<option>08</option>
								<option>09</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
								<option>24</option>
								<option>25</option>
								<option>26</option>
								<option>27</option>
								<option>28</option>
								<option>29</option>
								<option>30</option>
								<option>31</option>
							</select>
							<select>
								<option class="dropdown-header">Year</option>
								<option>1981</option>
								<option>1982</option>
								<option>1983</option>
								<option>1984</option>
								<option>1985</option>
								<option>1986</option>
								<option>1987</option>
								<option>1988</option>
								<option>1989</option>
								<option>1990</option>
								<option>1991</option>
								<option>1992</option>
								<option>1993</option>
								<option>1994</option>
								<option>1995</option>
								<option>1996</option>
								<option>1997</option>
								<option>1998</option>
								<option>1999</option>
								<option>2000</option>
								<option>2001</option>
								<option>2002</option>
								<option>2003</option>
								<option>2004</option>
								<option>2005</option>
								<option>2006</option>
								<option>2007</option>
								<option>2008</option>
								<option>2009</option>
								<option>2010</option>
								<option>2011</option>
								<option>2012</option>
								<option>2013</option>
								<option>2014</option>
								<option>2015</option>
								<option>2016</option>
								<option>2017</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<h2 style="color:blue; text-align:right">Email Address:</h2>
						</td>
						<td>
							<input type="email" name="email" placeholder="example@gmail.com" size="30" maxlength="20"/>
						</td>
					</tr>
					<tr>
						<td>
							<h2 style="color:blue;text-align:right">Password:</h2>
						</td>
						<td>
							<input type="password" name="password" placeholder="Please Enter Password" size="30" maxlength="20"/>
						</td>
					</tr>
					<tr>
						<td>
							<h2 style="color:blue">Confirm Password:</h2>
						</td>
						<td>
							<input type="password" name="password" placeholder="Please Confirm Password" size="30" maxlength="20"/>
						</td>
					</tr>
					<tr>
						<td>
						</td>
						<td>
							<button>Register</button>
						</td>
					</tr>
				</table>
				<div class="footer">
				<marquee><img src="Images/scroll.jpg" style="background-color:#9999ff" alt="Music Systems" width="250" height="250"></marquee>
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