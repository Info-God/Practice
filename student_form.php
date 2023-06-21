<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_Form</title>
    <style>
        form>tr{
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div >
        <h1>Registration Form</h1>
        <table class="container" >
            <form action="<?=base_url("staff/editForm"); ?>" method="post">
                <tr>
                    <td>Name :
                    <td><input type="text" name="studentName" placeholder="Enter your name" />
                </tr>
                <tr style="margin-top: 20px;">
                    <td>Date :
                    <td><input type="date" name="date" placeholder="Date of joining" />
                </tr>
                <tr>
                    <td>Address :
                    <td><textarea name="address" rows="3" cols="30"></textarea>
                </tr>
                <tr>
                    <td>Department :
                    <td><select name="department">
                        <option>IT  
                        <option>CSE
                        <option>Mechanical
                        <option>Civil
                        <option>EEE
                    </select>
                </tr>
                <tr>
                    <td>Phone Number :
                    <td><input type="number" name="phonenumber" placeholder="Enter your number" />
                </tr>
                <tr>
                    <td>Gender :
                    <td><input type="radio" name="Male"  /><label>Male</label> 
                        <input type="radio" name="Female" /><label>Female</label>
                </tr>
                <tr>
                    <td>Blood Group:
                    <td><select name="bloodGroup">
                        <option>A+  
                        <option>AB+
                        <option>B+
                        <option>O+
                        <option>AB-
                    </select>
                </tr>
                <tr>
                    <td>
                    <td><input type="submit" value="Submit"/>
                </tr>
                <tr>
                    <td><button><a href="<?=base_url("staff/viewData");?>" style="text-decoration: none;">View Data</a></button>
                </tr>
            </form>
        </table>
    </div>
</body>
</html>