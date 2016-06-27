<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset = "utf-8">
	<title>checkerboard</title>
</head>

<style type="text/css">

	.red_black {
		display: inline-block;
		vertical-align: top;
		width: 500px;
	}	

	.white_green {
		display: inline-block;
		vertical-align: top;
		width: 500px;
	}

*{
	padding: 0;
	margin: 0;
}
	table, td {

		border-collapse: collapse;
	}
	
	.black{
		background-color: black;
		width: 50px;
		height: 50px;
	}
	.red{
		background-color: red;
		width: 50px;
		height: 50px;
	}

		.green{
		background-color: green;
		width: 50px;
		height: 50px;
		}
		.white{
		background-color: #faebd7;
		width: 50px;
		height: 50px;
	}

</style>
<body>

	<div class="red_black">
		<table>
			<tbody>
				<?php
					for($x=1; $x<=8; $x++){
						echo "<tr>";
						for($y=1; $y<=4; $y++){
							echo "<td></td>";
					
							if($x % 2 == 0){
								echo '<td class="black"></td>';
								echo '<td class="red"></td>';
							}
							else{
								echo '<td class="red"></td>';
								echo '<td class="black"></td>';
							}
						}
					echo "</tr>";
					}
				?>
				</tbody>
			</table>
	</div>
	<div class= "white_green">
		<table>
				<tbody>
					<?php
						for($x=1; $x<=8; $x++){
							echo "<tr>";
							for($y=1; $y<=4; $y++){
								echo "<td></td>";
						
								if($x % 2 == 0){
									echo '<td class="green"></td>';
									echo '<td class="white"></td>';
								}
								else{
									echo '<td class="white"></td>';
									echo '<td class="green"></td>';
								}
							}
						echo "</tr>";
						}
		?>
				</tbody>
		</table>
</html>