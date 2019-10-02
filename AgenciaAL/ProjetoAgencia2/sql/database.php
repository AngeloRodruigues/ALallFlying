<?php 
function DB_escape($dados){
$link=DB_connect();
if(!is_array($dados))$dados=mysqli_real_escape_string($link,$dados);
else{
	$arr=$dados;
	foreach ($arr as $key => $value) {
	$key=mysqli_real_escape_string($link,$key);
	$value=mysqli_real_escape_string($link,$value);
	$dados[$key]=$value;}}
return $dados;}

function DB_delete($table,$where = null){
$where= ($where)?" {$where}": null;
$query="DELETE FROM {$table}{$where}";
$c=DB_EXECUTE($query);
return $c;}
function DB_count($table,$AO,$B="*",$params=null){
$query="SELECT $AO,COUNT($B) FROM {$table} {$params}";
$c=DB_EXECUTE($query);
$c=mysqli_num_rows($c);
return $c;

}
function DB_update($table, array $dados, $where=null, $insertid = false){
	$where = ($where)?" {$where}": null;
	foreach ($dados as $key => $value) {
		$field[]= "{$key} = '{$value}'";}
	$field=implode(", ", $field);
	 $query="UPDATE {$table} SET {$field}{$where}";
	 return DB_EXECUTE($query,$insertid);}


 function DB_read($table,$params = null, $fiels='*'){
 	$params= ($params)?" {$params}": null;
 	$query="SELECT {$fiels} FROM {$table}{$params}";
 	$result=DB_EXECUTE($query);
 	if (!mysqli_num_rows($result)) 
	return false;
 	else{while( $res=mysqli_fetch_assoc($result)){
$dados[]=$res;}
return $dados;}}



function DB_create($table,array $dados, $insertid = false){
	$dados=DB_escape($dados);
	$field=implode(",", array_keys($dados));
	$values="'".implode("','", $dados)."'";
	$query="INSERT INTO {$table} ({$field})  values ({$values})";
	$c=DB_EXECUTE($query, $insertid);
	return $c;}



	
function DB_EXECUTE($query, $insertid = false){
	$query=DB_escape($query);
	$link=DB_connect();
	$result= @mysqli_query($link,$query)or die (mysqli_error($link));
	if ($insertid) {
		$result= mysqli_insert_id($link);
	}
	$c=DB_close($link);
	return $result;}
?>