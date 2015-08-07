<?php
function checkerboard($color1, $color2){
?>
<style type="text/css">
.item {
	width:40px;
	height:40px; 
	display: inline-block;
	padding: 0px;
}
table {
	border: 1px solid black;
	border-collapse: collapse;
}
</style>
<table>
<?php 
for($j=0; $j<8; $j++) {
	?>
	<tr>
	<?php
 for($i=0; $i<8; $i++){ ?>
	<td class="item" style=" background-color:
 	<?php  if(($j + $i)%2 ==0) echo $color1; else echo $color2; ?>;"></td>
<?php } 
?>
	</tr>
<?php
	}
?>
</table><br>
<?php
}
checkerboard('red', 'black');
checkerboard('beige','green')
?>
