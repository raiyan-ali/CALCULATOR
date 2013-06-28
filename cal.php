<!DOCTYPE html">
<html>
<head>
<meta  charset=utf-8" />
<title>CalCulaTor</title>
<?php
 /*I use $_POST[] for get the value of the text box and isset() works as not to show error like- "Undefined Index" And !empty for data validation*/
if(isset($_POST['btnadd'])){
   
   if((!empty($_POST['txt1']))&& (!empty($_POST['txt2']))){
	 $x=$_POST['txt1'];
    $y=$_POST['txt2'];
	$z=$x+$y;
    echo $z;
   }	    
   else{
	   echo 'Please Input Into the textbox';
	}
}

/*Here I use if function for Escape the error of php and using my defined massege*/
elseif(isset($_POST['btndiv'])){
 if((!empty($_POST['txt1']))&& (!empty($_POST['txt2']))){
	 $x=$_POST['txt1'];
    $y=$_POST['txt2'];
	$z=$x/$y;
    echo $z;
   }	    
   else{
	   echo 'Please Input Into the textbox';
	}
}


elseif(isset($_POST['btnsub'])){
 if((!empty($_POST['txt1']))&& (!empty($_POST['txt2']))){
	 $x=$_POST['txt1'];
    $y=$_POST['txt2'];
	$z=$x-$y;
    echo $z;
   }	    
   else{
	   echo 'Please Input Into the textbox';
	}
}

elseif(isset($_POST['btnmul'])){
 if((!empty($_POST['txt1']))&& (!empty($_POST['txt2']))){
	 $x=$_POST['txt1'];
    $y=$_POST['txt2'];
	$z=$x*$y;
    echo $z;
   }	    
   else{
	   echo 'Please Input Into the textbox';
	}
}

elseif(isset($_POST['btnmod'])){
 if((!empty($_POST['txt1']))&& (!empty($_POST['txt2']))){
	 $x=$_POST['txt1'];
    $y=$_POST['txt2'];
	$z=$x%$y;
    echo $z;
   }	    
   else{
	   echo 'Please Input Into the textbox';
	}
}
?>
</head>

<body>
<form action="cal.php" method="post" name="frm1"> <!--form works here to shows my code output organized way and correctly-->
 <br/> <br/>
Input The First Value : <input type="text" id="txt1" name="txt1"/> <br/> <br/> <br/>
Input The Second Value : <input type="text" id="txt2" name="txt2"/> <br/>  <br/>
 <input type="submit" id="btnadd" name="btnadd" value="ADD"/> <br/>  <br/>
 <input type="submit" id="btnsub" name="btnsub" value="MINUS"/> <br/> <br/>
 <input type="submit" id="btndiv" name="btndiv" value="DIVIDED"/> <br/> <br/>
 <input type="submit" id="btnmul" name="btnmul" value="MULTIPLACATION"/>  <br/><br/>
 <input type="submit" id="btnmod" name="btnmod" value="MODULAS"/> <br/>
</form>
</body>
</html>
