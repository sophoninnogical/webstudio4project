<html>
<title>Juntron</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="stylesheets/screen.css">
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
<body>
	<div class="head-menu">
		<div class="logo" href="index.php"><img src="img/logo.png" ></div>
		<div class="title-menu">
			<a href="index.php">Home</a>
			<a href="gift.php" class="menu_active">Gift</a>
			<a href="#">Wrap</a>
			<a href="#" style="margin-right: 49px">Trial</a>
		</div>


	</div>
	<?php
		include 'conn.php';
		$fastival = "valentine";
		$sql = "SELECT all_code,all_price,all_pic
						FROM product
						WHERE all_festival = '".$fastival."' ";

		//echo $sql;
		$result = $conn->query($sql);
?>



	<div class="container">
		<div class="bg-container">
			<section class="control_box">
				<div class="box-item">	
					<h1>Product</h1>
				<form action="<?php  $_SERVER['PHP_SELF']; ?>" medthod = "get">
					<div class="item-gift" onclick="choose()" id="choose">

							<?php
						  if ($result->num_rows > 0) {
							// 	// output data of each row
						 	while($row = $result->fetch_assoc()) {

							?>
							<img src="<?php echo $row["all_pic"];?>" style="width: 140px;height:auto;
									">
								
								<div class="txt_product">
									<p>No product:<span><?php echo $row["all_code"]; ?></span></p>
									<p>Price:<span><?php echo $row["all_price"]; ?></span></p>
									<button class="Addcard" method="get" name="item" 
									value="<?php $row["all_code"];
									?>"> Addcard</button>  
								</div>
								
							
							
							<?php
								 }
							  }

							?>

					</div>
					</form>					
				</div>

				<script>
					document.getElementById("")
				</script>
				<div class="box-contact">
				<div class="con_box">


					<h1>Gift</h1>
					<select name="choose_festival" class="choose_festival">
						<option value="Valentine">All festival</option>
						<option value="Valentine">Valentine</option>
						<option value="Christmas">Christmas</option>

					</select>

					<form action="gift_api.php" method="POST" onsubmit="return chk();" >
							<input type="text" id="name" name="name" placeholder="name/nickname" maxlength="20" class="i_txt">
							<input type="text" id ="telnum" name="telnumber" placeholder="telphone number" maxlength="10" class="i_txt">
							<input type="reset" name="Aceept" class="btn_contact" value="Reset"style="background-color:#ed5564">
							<input type="submit" name="Aceept" class="btn_contact" value="Aceept" onclick="confirmOrder()" >

					</form>
					<script >
					function chk() {
						var name = document.getElementById('name').value;
						var tel = document.getElementById('telnum').value;
						 if (name == "" && tel ==""){
							alert("plase input name and telphone number");
								return false;
						}
						else if(name == "")  {
									alert("plaese input name by charecter only!! ");
									return false;

								}

							else if (!isNaN(document.getElementById('name').value )==true) {
									alert("ตัวหนังสือ");
									return false;
							}

						 else if (tel == "") {
								alert("กรุณกรอก password ");
							return false;
						 }

						 else{
							return true;
						 }
					}

					function confirmOrder(){
						alert("confirm order ?");
					}
					</script>
					</div>
				</div>
			</section>
			<div class="basket">
			<i class="fa fa-shopping-cart "></i>
				<h1>0</h1>
			</div>

		</div>

	</div>
</body>
</html>
