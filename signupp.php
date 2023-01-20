<?php
        $u=trim(stripslashes(htmlspecialchars(addslashes($_POST["iu"]))));
	$k=trim(stripslashes(htmlspecialchars(addslashes($_POST["ik"]))));
	$kk=crypt($k,'$6$rounds=8192$t0u1w2x3y4z5$');
	$kkk=crypt($kk,'$6$rounds=8192$t0u1w2x3y4z5$');
	$kkkk=crypt($kkk,'$6$rounds=8192$t0u1w2x3y4z5$');
        try{
                $c=new PDO("mysql:host=127.0.0.1;dbname=db0","root","123456");
		$c->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		echo $k;
		$s="INSERT INTO users VALUES('$u','$kkkk');";
		if($c->exec($s)){
			setcookie("user",$u);
			header("location:index.php");
		}else{
			echo "Error";
		}
        }catch(PDOException $e){
                echo $e->getMessage();
        }finally{
                $c=null;
        }
?>
