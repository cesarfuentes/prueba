<?php 
$form_data='';  //form_data vacio
foreach($_POST as $key => $value){
    $form_data.="\$$key=$value<br>";
    $$key=$value;
}

echo $form_data;

if($formType){
echo "opinion";
}else{
echo "presupuesto";
}