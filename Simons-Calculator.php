<?php
function tree(string $text): void 
{
    echo $text;
}
tree("param3t3r");

function repeatContent(int $count = 1 ): void
{
    for($i = 0; $i <= $count; $i++){
     sayHello("Poznan");
    }
}

repeatContent();
repeatContent(5);