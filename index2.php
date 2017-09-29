<?php
echo "<table border=1>";

 for($i=1;$i<=9;$i++) {
	 echo "<tr>";
	 For ($j=1;$j<=10;$j++) {
		 $y=($i*$j);
		 echo "<td>$i*$j=$y <br></td>";
};
     echo "</tr>";
	};
echo "</table>";
?>