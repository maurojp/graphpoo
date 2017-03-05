<?php
    // Ejemplo simple de uso

    include('graphpoo.php');
    
    $grafico = new graphpoo;
    
    $grafico->setDefaults();
    
    $grafico->setWidth(490); //
    
    $grafico->setHeight(210); //
    
    $grafico->setTitle("Grafico de Ejemplo (en miles de uSs)"); //
    
    $grafico->setLabels(["ENE","FEB","MAR","ABR","MAY","JUN","JUL","AGO","SEP","OCT","NOV","DIC"]);
    
    $serie1 = new serie;
    
    $serie1->setTitle("Ventas");
    
    $serie1->setColor("#FF8000");
    
    $serie1->setType("LINE");
    
    $serie1->setData([5,3,11,5,10,2,13,11,7,4,10,7]);
    
    $serie2 = new serie;
    
    $serie2->setTitle("Compras");
    
    $serie2->setColor("#0080FF");
    
    $serie2->setType("LINE");
    
    $serie2->setData([4,2,7,4,6,0,12,8,3,1,9,10]);
    
    $serie3 = new serie;
    
    $serie3->setTitle("Gastos");
    
    $serie3->setColor("#00FF11");
    
    $serie3->setBorder(true);
    
    $serie3->setBorderColor("#555555");
    
    $serie3->setType("BAR");
    
    $serie3->setData([1,2.5,4,4.44,2,0.5,1,2,1,1,1.7,5]);
    
    $grafico->addSerie($serie1);
    
    $grafico->addSerie($serie2);
    
    $grafico->addSerie($serie3);
    
    $grafico->renderImage('prueba.png');
    
    echo "<img src='prueba.png'>";
?>