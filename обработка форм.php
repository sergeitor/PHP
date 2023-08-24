<?php
if(isset($_GET['s'])) {
    $t=(string)$_GET['t'];
    $t=str_split($t,1);  //разбивает строку по 1 символу
    $arr=[];                           //только для английского, кодируется 1 байтом
   foreach($t as $key => $l){
       if($key % 2 !=0){$arr[] = $l;}
   } foreach($arr as $x){ echo $x ;}
}
else {echo "Введите буквы на английском: ";}
?>

<form name="f" action="<?=$_SERVER['PHP_SELF']?>"  method="get">
    <p><textarea name="t" cols="50" rows="10"></textarea>
    <p><input type="reset" value="Очистить форму">
    <p><input type="submit" name="s" value="Отправить!">
</form>