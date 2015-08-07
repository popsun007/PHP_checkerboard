<style type="text/css">
.item {
	width:40px;
	height:40px; 
	display: inline-block;
	padding: 0px;
}
</style>
<table border="1px">
<?php 
for($j=0; $j<8; $j++) {
	?>
	
	<?php
 for($i=0; $i<8; $i++){ ?>
	<div class="item" style=" background-color:
 	<?php  if(($j + $i)%2 ==0) echo "red"; else echo "black"; ?>;"></div>
<?php } 
echo "<br>";
}
?>
</table>