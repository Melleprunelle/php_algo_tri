<?php

$tab = array("Poire", "Cerise", "Kiwi", "Banana", "Pouet", "lol", "ok");
$tab_length = count($tab)-1;
$a;

for ($tab_length; $tab_length >= 1; $tab_length--) {
    for ($i = 0; $i < $tab_length; $i++) {
        if (strlen($tab[$i]) > strlen($tab[$i+1])) {
            $a = $tab[$i];
            $tab[$i] = $tab[$i+1];
            $tab[$i+1] = $a;
        }
    }
}
    print_r ($tab);

?>


