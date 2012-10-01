<?php

require_once 'classes.php';

$P = new Player(array('str'=>10, 'dex'=>15));
echo $P->Data['str'];
echo $P->Data['dex'];

$Str = new Player_Str_Decorate($P);
echo '<br />';

echo $Str->Player->Data['str'];

$Dex=new Player_Dex_Decorate($P);
echo $Dex->Player->Data['dex'];
$Dex->Add(55);