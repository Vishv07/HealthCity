<?php
if(isset($_POST['generate_barcode']))
{
 $text=$_POST['barcode_text'];
 echo "<img alt='testing' src='barcode/barcode.php?codetype=Code39&size=40&text=".$text."&print=true'/>";
}
?>