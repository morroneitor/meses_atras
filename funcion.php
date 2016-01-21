function ult_meses($cant_mes){
	$date = date('Y-m-d');
	$cantidad = "-".$cant_mes." month";
	$newdate = strtotime ( $cantidad , strtotime ( $date ) );
	$fec_nueva = date ( 'Y-m-d' , $newdate );
	return $fec_nueva;
}
