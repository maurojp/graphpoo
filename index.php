<?php
    include($_SERVER['DOCUMENT_ROOT'] .'/src/graphpoo.php');
    
    $grafico = new graphpoo;
    
    $grafico->setWidth(400);
    
    $grafico->setHeight(230);
    
    $grafico->setTopMargin(40);
    
    $grafico->setBottomMargin(50);
    
    $grafico->setLeftMargin(50);
    
    $grafico->setRightMargin(20);
    
    $grafico->setBGColor("#EEEEEE");
    
    $grafico->setTitle("Grafico de Ejemplo");
    
    $grafico->setTitleFontColor("#777777");
    
    $grafico->setTitleFontSize(5);
    
    $grafico->setTitleAlign("CENTER");
    
    $grafico->setGridRound(10);
    
    $grafico->setGridCount(4);
    
    $grafico->setGridDecimals(1);
    
    $grafico->setGridLines(true);
    
    $grafico->setGridFontSize(3);
    
    $grafico->setLabelFontColor("#999999");
    
    $grafico->setLabelFontSize(4);
    
    $grafico->setLabelOrientation("H");
    
    $grafico->setLabels(["ENE","FEB","MAR","ABR","MAY","JUN","JUL","AGO","SEP","OCT","NOV","DIC"]);
    
    $serie1 = new serie;
    
    $serie1->setColor("#FF8000");
    
    $serie1->setType("LINE");
    
    $serie1->setData([5,3,11,5,10,2,13,11,7,4,10,7]);
    
    $serie2 = new serie;
    
    $serie2->setColor("#0080FF");
    
    $serie2->setType("LINE");
    
    $serie2->setData([4,2,7,4,6,0,12,8,3,1,9,10]);
    
    $serie3 = new serie;
    
    $serie3->setColor("#8000FF");
    
    $serie3->setType("BAR");
    
    $serie3->setData([1,2.5,3,4.44,2,0.5,1,2,1,1,1.7,5]);
    
    $grafico->addSerie($serie1);
    
    $grafico->addSerie($serie2);
    
    $grafico->addSerie($serie3);
    
    if ($grafico->renderToFile('prueba.png'))
    {
        echo "<img src='prueba.png'>";
    } 
?>