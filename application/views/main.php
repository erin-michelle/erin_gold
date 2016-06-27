
<!DOCTYPE html>
<html>
<head>
	<title>Ninja Gold Torture</title>
	<style type="text/css">
		#container {
			width: 900px;
			margin: 50px;
		}

		h2 {
			font-family: futura;
			margin: 10px;
			display: inline-block;
			vertical-align: top;

		}
		.your-gold input {
			width:  150px;
			height: 20px;
			display: inline-block;
			vertical-align: top;
			margin: 10px;
		}


		.farm {
			position: relative;
			vertical-align: top;
			display: inline-block;
			width: 150px;
			height: 150px;
			margin: 10px;
			text-align: center;
			font-family: futura;
			border: 1px solid black;
			padding: 10px 20px 20px 20px;
		}

			.cave {
			position: relative;
			vertical-align: top;
			display: inline-block;
			width: 150px;
			height: 150px;
			margin: 10px;
			text-align: center;
			font-family: futura;
			border: 1px solid black;
			padding: 10px 20px 20px 20px;
		}
			.house {
			position: relative;
			vertical-align: top;
			display: inline-block;
			width: 150px;
			height: 150px;
			margin: 10px;
			text-align: center;
			font-family: futura;
			border: 1px solid black;
			padding: 10px 20px 20px 20px;
		}

			.casino {
			position: relative;
			vertical-align: top;
			display: inline-block;
			width: 150px;
			height: 150px;
			margin: 10px;
			text-align: center;
			font-family: futura;
			border: 1px solid black;
			padding: 10px 20px 20px 20px;
		}

		p {
			font-family: futura;
			margin: 10px;
		}

		.log {
			width: 814px;
			height: 150px;
			margin: 10px;
			overflow: scroll;
			border: 1px solid black;
			padding: 10px;
		}

		.house form {
			margin-top: 31px;
			position: relative;
		}

		.activity-box {
			width: 950px;
			border: 1px solid black;
			margin: 0 auto;
			height: 200px;
			overflow: scroll;
			font-family: futura;
		}

		.reset-button {
			margin-left: 60px; 
			font-family: futura;
			width: 70px;
			padding: 10px;
			background-color: pink;
			border-radius: 5px;
			border: 1px solid black;
		}


	</style>
</head>
<body>
	<div id="container">		
		<div class="your-gold">
			<h2>Your Gold: <?= $this->session->userdata('gold') ?></h2>
			
			<a href='welcome/reset'><button class='reset-button' type='submit'>Restart</button></a>
        </div>
	    <div class="locations">         
	    	<div class="farm">
				<h2>Farm</h2>             
				<p>(earns 10-20 golds)</p>             
				<form action="welcome/find_gold" method="post">
					<input type="hidden" name="building" value="farm"/>
					<input type="submit" value="Find Gold!"/>
				</form>
			</div>

			<div class="cave">
				<h2>Cave</h2>             
				<p>(earns 5-10 golds)</p>             
				<form action="welcome/find_gold" method="post">
					<input type="hidden" name="building" value="cave"/>
					<input type="submit" value="Find Gold!"/>
				</form>
			</div>

			<div class="house">
				<h2>House</h2>             
				<p>(earns 2-5 golds)</p>             
				<form action="welcome/find_gold" method="post">
					<input type="hidden" name="building" value="house"/>
					<input type="submit" value="Find Gold!"/>
				</form>
			</div>

			<div class="casino">
				<h2>Casino!</h2>             
				<p>(earns/loses 0-50 golds)</p>             
				<form action="welcome/find_gold" method="post">
					<input type="hidden" name="building" value="casino"/>
					<input type="submit" value="Find Gold!"/>
				</form>
			</div>
		</div>	

		<div class="activity-section">
			<h2>Your activities: </h2>
			<div class="activity-box"> 
		<?php foreach ($all_activities as $activity) { ?>
			<?= $activity ?>
			<br>
		<?php } ?>
			</div>
		</div>	
	</div>	
</body>
</html>