<html>
<head><title>TEST NO. 7</title>
<style>

#tb {
  border: 1px solid #ddd;
  border-collapse: collapse;
  width: 100%;
}

#tb th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

#tb th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
	<table id="tb">
	<tr>
		<td>PERSON ID</td>
		<td>NAME</td>
		<td>PERSON HOBBIES</td>
	</tr>
		<?php
			$koneksi = mysqli_connect("localhost","root","","arkademytest") or die(mysqli_error());
		
			$sql = "SELECT t1.id as person_id, t1.name , GROUP_CONCAT(t2.name) AS person_hobbies FROM msperson t1 LEFT JOIN hobbies t2 ON t2.person_id = t1.id GROUP BY t1.id";
			$query = mysqli_query($koneksi, $sql);			
			$data = mysqli_fetch_array($query);
			
			//while($data = mysqli_fetch_array($query)){
			foreach ($query as $data){
			?>
				<tr>
					<td><?php echo $data['person_id']; ?></td>
					<td><?php echo $data['name']; ?></td>
					<td><?php echo $data['person_hobbies']; ?></td>
				</tr>
			<?php
			}
		?>
	</table>
</body>
</html>