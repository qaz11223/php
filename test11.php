<?php
    if (isset($_GET['n'])){
        $n = $_GET['n'];
        $sum = 0;
        $i = 1 ;
        while ($i <= $n){
            $sum += $i ;
            $i++ ;
        }
    }
?>
<form action="test11.php">
1+2+3....+
<input type="number" name="n" value="<?php echo $n; ?>">
<input type="submit" value="=">
<?php
    echo $sum;
    ?>
</form>
