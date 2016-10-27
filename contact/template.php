<!DOCTYPE html>
<html>
<head>
    <title><?php echo $_POST["fullName"]?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/img/favico.png" rel="shortcut icon" type="image/x-icon"/>
    <link href="assets/css/style.min.css" rel="stylesheet"/>
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
</head>
<body class="homepage">
<div id="main" class="wrapper">
    <section class="home-jobs">
    	<img src="lynn.jpg" alt="<?php echo $_POST["fullName"]?>" class="img-circle" width=150px height=150px>
	    <h3>Contact</h3>
    	<h2><?php echo $_POST["fullName"]?></h2>
        	<div class="container">
        	<table align="left" class="table">
        		<thead>
        			<tr>
        				<th>Categories</th>
        				<th>Link Browser</th>
        			</tr>
        		</thead>
        		<tbody>
        			<tr>
        				<td align="left"><strong>Email</strong></td>
        				<td align="left"><a href="mailto:<?php echo $_POST["email"]?>"><?php echo $_POST["email"]?></a></td>
        			</tr>
        			<tr>
        				<td align="left"><strong>Instagram</strong></td>
        				<td align="left"><a href="instagram://user?username=<?php echo $_POST["instagram"]?>">Open Instagram Apps</a></td>
        			</tr>
        			<tr>
        				<td align="left"><strong>Facebook</strong></td>
				        <td align="left"><a href="fb://profile/<?php echo $_POST["facebook"]?>">Open Facebook Apps</a></td>
		                </tr>
        			<!-- <tr>
        				<td align="left"><strong>Contact Card</strong></td>
        				<td align="left"><a href="vCardLynn.vcf">Download</a></td>
        			</tr> -->
        		</tbody>
        	</table>
        	</div>
    </section>
</div>
</body>
</html>    