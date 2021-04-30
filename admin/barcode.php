<html>
<head>
<link href="barcode_style.css" type="text/css" rel="stylesheet"/>


<style type="text/css">
	
body
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:100%;
 font-family: "Myriad Pro","Helvetica Neue",Helvetica,Arial,Sans-Serif;
 background-color:#F5EEF8;
}
#wrapper
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:995px;
}
#wrapper h1
{
 margin-top:50px;
 font-size:45px;
 color:#884EA0;
}
#wrapper h1 p
{
 font-size:18px;
}
#barcode_div input[type="text"]
{
 width:300px;
 height:35px;
 border:none;
 padding-left:10px;
 font-size:17px;
}
#barcode_div input[type="submit"]
{
 background-color:#884EA0;
 border:none;
 height:35px;
 color:white;
}

</style>
</head>
<body>
<div id="wrapper">

<div id="barcode_div">
 <form method="post" action="barcode.php">
  <input type="text" name="barcode_text">
  <input type="submit" name="generate_barcode" value="GENERATE">
 </form>
</div>

</div>
</body>
</html>

<?php
if(isset($_POST['generate_barcode']))
{
 $text=$_POST['barcode_text'];
 echo "<img alt='testing' src='barcode/barcode.php?codetype=Code39&size=40&text=".$text."&print=true'/>";
}
?>