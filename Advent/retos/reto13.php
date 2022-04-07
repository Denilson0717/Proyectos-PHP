<?php

wrapGifts(["📷", "⚽️"]);
/* Resultado:
[ '****',
  '*📷*',
  '*⚽️*',
  '****'
]
*/

wrapGifts(["🏈🎸", "🎮🧸"]);
/* Resultado:
[ '******',
  '*🏈🎸*',
  '*🎮🧸*',
  '******'
]
*/

wrapGifts(["📷"]);
/* Resultado:
[ '****',
  '*📷*',
  '****'
]
*/

function wrapGifts($lista){
    strlen($lista[0]) > 6 ? $envoltura = '******' : $envoltura = '****';
    $listaRegalo = array_map("envuelto", $lista);
    array_push($listaRegalo , $envoltura);
    array_unshift($listaRegalo, $envoltura);
    foreach ($listaRegalo as $key) {
        echo $key;
        echo "<br>";
    }
    echo "<br>";
}

function envuelto($lista){
    return '*'.$lista.'*';
}

?>