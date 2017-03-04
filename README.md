# graphpoo (spanish)
Graficos Orientados a Objetos para PHP. (for english versión see README-EN.md)
graphpoo es software open-source bajo licencia MIT. (ver LICENSE.txt)
### graphpoo es una librería para utilizar gráficos de linea o barras en PHP. (Esta versión no incluye gráficos de pastel)
Todos los nombres en el código (variables, clases, atributos, métodos, etc.) están en ingles.

## Métodos: (clase graphpoo)
- setHeight() //Alto total del gráfico.
- setWidth() //Ancho total del grafico.
- setBorder() //Activar o desactivar el borde de la imagen.
- setBorderColor() //Color del borde de la imagen.
- setTopMargin() //Margen superior.
- setBottomMargin() //Margen inferior.
- setLeftMargin() //Margen izquierdo.
- setRightMargin() //Margen derecho.
- setBGColor() //Color de fondo.
- setTitle() //Título del gráfico.
- setTitleFontColor() //Color de fuente del título.
- setTitleFontSize() //Tamaño de fuente del título.
- setTitleAlign() //Alineación del título. ("LEFT", "CENTER", "RIGHT")
- setGridRound() //Redondeo de la grilla.
- setGridCount() //Cantidad de etiquetas en la grilla.
- setGridDecimals() //Cantidad de decimales en las etiquetas de la grilla.
- setGridLines() //Activar o desactivar líneas de la grilla. (true, false)
- setGridFontColor() //Color de la fuente de las etiquetas de la grilla.
- setGridFontSize() //Tamaño de la fuente de las etiquetas de la grilla.
- setGridLineColor() //Color de las lineas de grilla.
- setXAxisColor() //Color del eje X.
- setYAxisColor() //color del eje Y.
- setLabelFontColor() //Color de la fuente de las etiquetas inferiores.
- setLabelFontSize() //Tamaño de la fuente de las etiquetas inferiores.
- setLabelOrientation() //Orientación de las etiquetas inferiores. ("H","V")
- setLegend() //Activar o desactivar la leyenda lateral. (true, false)
- setLegendBGColor() //Color de fondo del cuadro de leyenda.
- setLegendBorder() //Activar o desactivar el borde de la leyenda.
- setLegendBorderColor() //Color del borde de la leyenda.
- setLegendFontColor() //Color de la fuente de las etiquetas en la leyenda.
- setLegendFontSize() //Tamaño de la fuente de las etiquetas en la leyenda.
- setLabels() //Matriz con los textos de las etiquetas inferiores.
- setDefaults() //Carga los estilos desde el archivo GSTYLE.php.
- addSerie() //Agrega un objeto de tipo Serie al gráfico.
- renderToFile() //Genera el gráfico y lo guarda en un archivo.

## Métodos: (clase serie)
- setTitle() //Título de la serie (aparece en la leyenda si esta habilitada)
- setType() //Tipo de gráfico. ("BAR","LINE")
- setColor() //Color de la serie.
- setBorder() //Activa o desactiva el borde de la serie. (Solo en gráficos de barras)
- setBorderColor() //Color del borde de la serie. (Solo en gráficos de barras)
- setData() //Matriz con los datos de la serie.

## Ejemplos
![graphpoo_example1](https://github.com/mauroruso/graphpoo/blob/master/graphpoo_example1.png)

## Este documento esta en desarrollo...
