<html>
<body style="border: 6px solid red; height: 200px; display:flex">

	<div
		style="width: 350px; height: 200px; border-right: dashed; margin: 20px">
		<form action="#" method="get">
			Temperature : <input type="number" name="tempC" /> (°C)<br /> 
			<input type="submit" name="submit" value="submit" />
			<input type="reset" name="reset" value="reset" />
		</form>
	</div>

	<div
		style="width: 350px; margin: 20px">
    <?php
    if (isset($_GET["tempC"])) {

        $tempC = $_GET["tempC"];
        $tempF = ($tempC * (9/5)) + 32;
        
        
        echo "<!DOCTYPE html>
                Temperature : $tempF (°F) <br/>
            </html>
             ";  
    }
    ?>
	
	</div>

</body>
</html>