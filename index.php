<?php
    include($_SERVER['DOCUMENT_ROOT'] .'/src/graphpoo.php');
    
    $grafico = new graphpoo;
    
    $grafico->setWidth(400);
    
    $grafico->setHeight(150);
    
    $grafico->setTopMargin(40);
    
    $grafico->setBottomMargin(20);
    
    $grafico->setLeftMargin(20);
    
    $grafico->setRightMargin(20);
    
    $grafico->setBGColor("#EEEEEE");
    
    $grafico->setTitle("Grafico de Ejemplo");
    
    $grafico->setTitleColor("#000000");
    
    $serie1 = new serie;
    
    $serie1->setColor("#FF8000");
    
    $serie1->setData([5,3,11,5,10,2,13,11,7,4,10]);
    
    $serie2 = new serie;
    
    $serie2->setColor("#0080FF");
    
    $serie2->setData([4,2,7,4,6,0,12,8,3,1,9]);
    
    $grafico->addSerie($serie1);
    
    $grafico->addSerie($serie2);
    
    if ($grafico->renderToFile('prueba.png'))
    {
        echo "<img src='prueba.png'>";
    } 
?>