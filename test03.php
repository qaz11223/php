<?php
$result = $a = $b = $c ='';
if (isset($_GET['a'])){
    $a = $_GET['a']; $b = $_GET['b'];$b = $_GET['c'];
    if ($c == 1){
        $result = $a + $b;
    }else{
        if ($c == 2){
            $result = $a - $b;
    }else if ($c == 3){
        $result = $a * $b;
    }else if ($c == 4){
        $r1 = (int)($a / $b);
        $r2 = $a % $b;
        $result = "{$a} ...... {$b}";
        echo $result;
    }
    //$r1 = (int)($a / $b);
    //$r2 = $a % $b;
    //$result = "{$r1} ...... {$r2}";
    //echo "{$a} + {$b} = {$result}";
    }
?>
<form action="test03.php">
<input name="a" value="<?php echo $a;?>">
<select name="c">
    <option value="1"<?php if ($c == 1)echo 'selected';?>>+</option>
    <option value="2"<?php if ($c == 2)echo 'selected';?>>-</option>
    <option value="3"<?php if ($c == 3)echo 'selected';?>>X</option>
    <option value="4"<?php if ($c == 4)echo 'selected';?>>/</option>
</select>
<input name="b" value="<?php echo $b;?>">
<input type="submit" value="=">
<?php
echo $result;
?>
</form>