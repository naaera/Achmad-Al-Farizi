<html>
<head><title>Biodata</title></head>
<body>
<form action="show.php?act=add" method="POST"> 
<table align="center">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" required=""></td>
            </tr>
			<tr>
                <td>Address</td>
                <td><input type="text" name="address" required=""></td>
            </tr>
			<tr>
                <td>Hobby</td>
                <td>
				<input type="checkbox" name="hobby[]" value="Football">Football
				<input type="checkbox" name="hobby[]" value="Basket">Basket
				<input type="checkbox" name="hobby[]" value="Badminton">Badminton
				</td>
            </tr>
			<tr>
                <td>Is Married</td>
                <td>
                    <input type="radio" name="ismarried" value="true" required="">yes
                    <input type="radio" name="ismarried" value="false" required="">no
                </td>
            </tr>
			<tr>
                <td>School</td>
                <td><select name="level">
                        <option value="highschool">highschool</option>
                        <option value="university">university</option>
                    </select>
				<input type="text" name="school" required=""></td>
            </tr>
			<tr>
                <td>Skills</td>
                <td>
				<input type="checkbox" name="skills[]" value="PHP">PHP
				<input type="checkbox" name="skills[]" value="JAVA">JAVA
				</td>
            </tr>
			<tr>
                <td>
                    <input type="submit" value="Add">
                </td>
            </tr>
</form>
</body>
</html>