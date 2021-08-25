<?php
if(isset($_GET['str'])){
	echo md5($_GET['str']);
}else{
	echo "request str";
}

?>