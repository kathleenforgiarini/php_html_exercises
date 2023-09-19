<html>
<body style="border: 6px solid red; height: 200px; display:flex">

	<div
		style="width: 350px; height: 200px; border-right: dashed; margin: 20px">
		<form action="#" method="get">
			Employee id : <input type="text" name="id" /><br /> 
			Last name : <input type="text" name="lastName" /> <br /> 
			Gross pay : <input type="number" name="grossPay" /> <br /> 
			<input type="submit" name="submit" value="submit" />
		</form>
	</div>

	<div
		style="width: 350px; margin: 20px">
    <?php
    
    include 'library_exercise1.php';
    
    global $id;
    global $lastName;
    global $grossPay;
    global $tax;
    global $amountOfTax;
    global $netPay;

        echo "<!DOCTYPE html>
                Employee id : $id <br/>
                Last name : $lastName <br/>
                Gross Pay : $grossPay <br/>
                Tax (%) : $tax % <br/>
                Amount of tax : $amountOfTax <br/>
                Net Pay : $netPay <br/>
            </html>
             ";
    ?>
	
	</div>

</body>
</html>