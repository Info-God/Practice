<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <table>
        <h1>Confirmation</h1>
        <?php
            if(isset($details)){

        ?>
        	<table class="container">
            <form action="<?=base_url("staff/student_info"); ?>" method="post">
                <tr>
                    <td>Name :
                    <td><input type="text" name="studentName" value="<?=$details["name"];?>" />
                </tr>
                <tr style="margin-top: 20px;">
                    <td>Date :
                    <td><input type="date" name="date" value="<?=$details["date"];?>" />
                </tr>
                <tr>
                    <td>Address :
                    <td><textarea name="address" rows="3" cols="30"><?=$details["address"];?></textarea>
                </tr>
                <tr>
                    <td>Department :
                    <td><select name="department">
						<option default><?=$details["department"];?>
                        <option>IT  
                        <option>CSE
                        <option>Mechanical
                        <option>Civil
                        <option>EEE
                    </select>
                </tr>
                <tr>
                    <td>Phone Number :
                    <td><input type="number" name="phonenumber" value="<?=$details["phone_number"];?>" />
                </tr>
                <tr>
                    <td>Gender :
                    <td><input type="text" name="gender"  value="<?=$details["gender"];?>"/> 
                </tr>
                <tr>
                    <td>Blood Group:
                    <td><select name="bloodGroup">
						<option default><?=$details["blood_group"];?>
                        <option>A+  
                        <option>AB+
                        <option>B+
                        <option>O+
                        <option>AB-
                    </select>
                </tr>
                <tr>
                    <td>
                    <td><input type="submit" value="Confirm"/>
                </tr>
        <?php 
            }
        ?>
    </table>
</body>
</html>