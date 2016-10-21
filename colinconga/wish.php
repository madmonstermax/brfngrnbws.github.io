<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Wish List</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<style>
			tr {
			text-decoration: initial;
			font-size: 200%;
			}
		</style>
	</head>
	<body>
		<script>
            $(document).ready(function(){
                $.ajaxSetup({cache:false});
                $("#navcontain").load("nav.php");
			});
		</script>
		<div id="navcontain">
		</div>
		<br>
		<br>
		
		<script>
			$('#tablerow').each(function (i) {
				$("#tablerow").html(i + 1);
			});
		</script>
		
		<h2>Colin's Things That He Really Wants List</h2>
		<table style="width: 100%">
			<tr>
				<td>
					<span style="font-weight: bold">Rank</span>
				</td>
				<td>
					<span style="font-weight: bold">Thing</span>
				</td>
				<td>
					<span style="font-weight: bold">Price</span>
				</td>
			</tr>
			<tr>
				<td id="tablerow"></td>
				<td>
					<a target="_blank" href="https://www.amazon.com/dp/B01GX5YWAO/">Evga GTX 1070</a>
				</td>
				<td>$409.99</td>
			</tr>
			<tr>
				<td id="tablerow"></td>
				<td>
					<a target="_blank" href="https://www.amazon.com/dp/B01FJLA8NI">i7-6800K</a>		
				</td>
				<td>$437.99</td>
			</tr>
			<tr>
				<td id="tablerow"></td>
				<td>
					<a target="_blank" href="https://www.amazon.com/dp/B00YISN2TG/">MSI x99-A Raider</a>		
				</td>
				<td>$194.99</td>
			</tr>
			<tr>
				<td id="tablerow"></td>
				<td>
					<a target="_blank" href="https://www.amazon.com/dp/B015FXUXPS/">G.Skill Ripjaw V 16GB</a>
				</td>
				<td>$135.58</td>
			</tr>
		</table>
		<br>
		<br>
		<br>
		<h>Also these shirts</h>
		<ol>
			<li></li>
		</ol>
	</body>
</html>

