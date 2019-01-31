<html>
	<head><title></title>
	</head>
	<body>
		<form action="Successful.php">
		<p>Name:<input type="text" placeholder="enter Name"  autocomplete="on"/></p>
		<p>Password:<input type="password" placeholder="enter Password" required="required"/></p>
		<p>Email:<input type="email" placeholder="enter Email"/></p>
		<p>How many houses to be purchased:<input type="number" min="1" max="10" placeholder="enter Number"/></p> 
		
		<p>Location<input type="text" list="te" placeholder="search" autofocus/>
		<datalist id="te">
		<select><option>Pune</option>
		<option>Mumbai</option>
		<option>Nagpur</option></select></datalist></p>
		<p>Budget<input type="text" list="t"placeholder="Enter your budget range"/>
		<datalist id="t">
		<select><option>15-30L</option>
		<option>30-35L</option>
		<option>35-40L</option></select></datalist></p>
		
		
		<p>Your color preferance for house:<input type="color" value="#ff0000"></p>
		<p><input type="submit" value="Submit"></p>
		</form>
	</body>
</html>