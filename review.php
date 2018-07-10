
<?php
 echo '<form action="" method="post">
        <p>Bad';
for($x=1;$x<=5;$x++){
       echo '<input type="radio" name="rating" id="$x" />';     
}
echo 'Good</p>';
echo '<textarea rows=5 cols="20"></textarea></br></br>';

echo '<input type="submit" value="Submit" />
        </form>';

?>