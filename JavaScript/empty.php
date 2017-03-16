<meta charset='utf-8'>
<pre>
<?php

error_reporting(E_ALL);
set_time_limit(5);

$user = array ("Иванов И.И." => array('name'=>"Иванов И.И.", 'age'=>28, 'visited'=>28), 
"Петров В.И." =>array('name'=>"Петров В.И.",'age'=>24, 'visited'=>21),
 "Сидоров К.С." =>array('name'=>"Сидоров К.С.",'age'=>19, 'visited'=>22), 
"Клон Сидорова К.С." =>array('name'=>"Клон К.С.",'age'=>1899, 'visited'=>22));
foreach($user as $key=>$value){
$value['name']=$key;
$subarr[$value['visited']][]=$value;
}
krsort($subarr);


?>
</pre>