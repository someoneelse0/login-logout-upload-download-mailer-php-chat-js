<?php
	$u=trim(stripslashes(htmlspecialchars(addslashes($_POST["iu"]))));
	$k=trim(stripslashes(htmlspecialchars(addslashes($_POST["ik"]))));
	$kk=crypt($k,'$6$rounds=8192$t0u1w2x3y4z5$');
	$kkk=crypt($kk,'$6$rounds=8192$t0u1w2x3y4z5$');
	try{
		$c=new PDO("mysql:host=localhost;dbname=db0","root","123456");
		$c->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$s="SELECT * FROM users WHERE username='$u';";
		$cc=$c->prepare($s);
		$cc->execute();
		$n=1;
		echo $k;
		while($r=$cc->fetch(PDO::FETCH_NUM)){
			password_verify($kkk,$r[1])?$n=0:$n=1;
		}
		if($n==0){
			setcookie("user",$u);
			header("location:index.php");
		}else if($n==1){
			header("location:login.php");
		}else{
			echo "Error";
		}
	}catch(PDOException $e){
		echo $e->getMessage();
	}finally{
		$c=null;
	}
?>
