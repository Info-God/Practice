
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome</title>
	<style>
		table{
			margin:auto;
		}
		.table tr,.table td{
			margin-top: 20%;
			border: 1px solid black;
			margin: auto;
		}
		.table th{
			background-color: slateblue;
		}
		.table td{
			background-color: lightblue;
		}
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>
		<?php
			if(isset($editData)){
			?>
			<table class="container" >
            <form action="<?=base_url("staff/updateData"); ?>" method="post">
				<tr>
                    <td>ID :
                    <td><input type="number" name="id" value="<?=$editData[0]->roll_no;?>" readonly/>
                </tr>
                <tr>
                    <td>Name :
                    <td><input type="text" name="studentName" value="<?=$editData[0]->name;?>" />
                </tr>
                <tr style="margin-top: 20px;">
                    <td>Date :
                    <td><input type="date" name="date" value="<?=$editData[0]->date;?>" />
                </tr>
                <tr>
                    <td>Address :
                    <td><textarea name="address" rows="3" cols="30"><?=$editData[0]->address;?></textarea>
                </tr>
                <tr>
                    <td>Department :
                    <td><select name="department">
						<option default><?=$editData[0]->department;?>
                        <option>IT  
                        <option>CSE
                        <option>Mechanical
                        <option>Civil
                        <option>EEE
                    </select>
                </tr>
                <tr>
                    <td>Phone Number :
                    <td><input type="number" name="phonenumber" value="<?=$editData[0]->phone_number;?>" />
                </tr>
                <tr>
                    <td>Gender :
                    <td><input type="text" name="gender"  value="<?=$editData[0]->gender;?>"/> 
                </tr>
                <tr>
                    <td>Blood Group:
                    <td><select name="bloodGroup">
						<option default><?=$editData[0]->blood_group;?>
                        <option>A+  
                        <option>AB+
                        <option>B+
                        <option>O+
                        <option>AB-
                    </select>
                </tr>
                <tr>
                    <td>
                    <td><input type="submit" value="Update"/>
                </tr>



			<?php
			}
			else{
			?>
	<a href="<?=base_url("staff/regForm");?>" style="margin-left:50%;">Register</a><br />
	<table class="table" style="padding-top:2%">
		<tr>
			<th>Option
			<th>roll_no
			<th>Name
			<th>Address
			<th>Gender
			<th>Department
			<th>Date
			<th>Blood Group
			<th>Phone Number
			<th>Option
		</tr>
		<?php
			foreach($student_data as $data){
		?>
			<tr>
				<td><a href="<?=base_url("staff/editData/".$data->roll_no) ?>">Edit</a>
				<td><?=$data->roll_no?>
				<td><?=$data->name?>
				<td><?=$data->address?>
				<td><?=$data->gender?>
				<td><?=$data->department?>
				<td><?=$data->date?>
				<td><?=$data->blood_group?>
				<td><?=$data->phone_number?>
				<td><a href="<?=base_url("staff/delete/".$data->roll_no) ?>">Delete</a>		
			</tr>
			<?php 
			}
			?>
	</table>
<?php 
			}
			?>
</body>
</html>
