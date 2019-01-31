<html><head><title>welcome</title>
    <script language="javascript">
        reqObj=null;
        function varify(){
            document.getElementById("res").innerHTML="Checking";
            if(window.XMLHttpRequest){
                reqObj=new XMLHttpRequest();
            }else {
                reqObj=new ActiveXObject("Microsoft.XMLHTTP");
            }
            
            reqObj.onreadystatechange=process;
            reqObj.open("POST","regg.php?id="+document.getElementById("username").value,true);
            reqObj.send(null);
        }
        function process(){
            if(reqObj.readyState==4){
                document.getElementById("res").innerHTML=reqObj.responseText;
            }
        }
        </script>
    
    </head>
    <body>
        <h1>welcome to this application</h1>
    <form method="POST" action="Successful.php">
        Name of seller<input type="text" name="username" id="username" onblur="verify();" type="text"><span id="res"></span><br>
        <p>Your Email:<input type="email" placeholder="enter Email"/></p>
		<p>How many houses to be sold:<input type="number" min="1" max="10" placeholder="enter Number"/></p> 
		
		<p>Location<input type="text" list="te"placeholder="Enter location" autofocus/>
		<datalist id="te">
		<select><option>Mumbai</option>
		<option>Pune</option>
		<option>Nagpur</option></select></datalist></p>
		<p>Expected Amount<input type="text" list="t"placeholder="Enter expected amount"/>
		<datalist id="t">
		<select><option>15-30L</option>
		<option>30-35L</option>
		<option>35-40L</option></select></datalist></p>
		
		<p>Color of your house:<input type="color" value="#ff0000"></p>
	
        <input value="Press" type="submit">
    </form>
    
</body></html>