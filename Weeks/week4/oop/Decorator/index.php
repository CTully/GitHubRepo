<?php

ini_set('display_errors','on');
error_reporting(E_ALL | E_STRICT);

require_once 'classes.php';

$P = new Player(array('str'=>10, 'dex'=>15));
echo '<hr />';
echo $P->Data['str'];
echo '<hr />';
echo $P->Data['dex'];

$Str = new Player_Str_Decorate($P);
echo '<hr />';

echo $Str->Player->Data['str'];

$Dex=new Player_Dex_Decorate($P);
echo '<hr />';
echo $Dex->Player->Data['dex'];
$Dex->Add(55);
echo '<hr />';
echo $Dex->Player->Data['dex'];