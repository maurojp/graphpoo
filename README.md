# graphpoo (spanish)
Graficos Orientados a Objetos para PHP. (for english versión see README-EN.md)
### graphpoo es una librería para utilizar graficos de linea o barras en PHP. (Esta versión no incluye graficos de pastel)
Todos los nombres en el código (variables, clases, atributos, metodos, etc.) están en ingles.

# Métodos: (clase graphpoo)
- setHeight() //Alto total del gráfico.
- setWidth() //Ancho total del grafico.
- setTopMargin() //Margen superior.
- setBottomMargin() //Margen inferior.
- setLeftMargin() //Margen izquierdo.
- setRightMargin() //Margen derecho.
- setBGColor() //Color de fondo.
- setTitle() //Titulo del gráfico.
- setTitleFontColor() //Color de fuente del título.
- setTitleFontSize() //Tamaño de fuente del título.
- setTitleAlign() //Alineación del título. ("LEFT", "CENTER", "RIGHT")
- setGridRound() //Redondeo de la grilla.
- setGridCount() //Cantidad de etiquetas en la grilla.
- setGridDecimals() //Cantidad de decimales en las etiquetas de la grilla.
- setGridLines() //Activar o desactivar lineas de la grilla. (true, false)
- setGridFontColor() //Color de la fuente de las etiquetas de la grilla.
- setGridFontSize() //Tamaño de la fuente de las etiquetas de la grilla.
- setGridLineColor() //Color de las lineas de grilla.
- setLabelFontColor() //Color de la fuente de las etiquetas inferiores.
- setLabelFontSize() //Tamaño de la fuente de las etiquetas inferiores.
- setLabelOrientation() //Orientacion de las etiquetas inferiores. ("H","V")
- setLegend() //Activar o desactivar la leyenda lateral. (true, false)
- setLegendBGColor() //Color de fondo del cuadro de leyenda.
- setLegendFontColor() //Color de la fuente de las etiquetas en la leyenda.
- setLegendFontSize() //Tamaño de la fuente de las etiquetas en la leyenda.
- setLabels() //Matriz con los textos de las etiquetas inferiores.
- addSerie() //Agrega un objeto de tipo Serie al gráfico.
- renderToFile() //Genera el gráfico y lo guarda en un archivo.

# Métodos: (clase serie)
- setTitle() //Titulo de la serie (aparece en la leyenda si esta habilitada)
- setType() //Tipo de gráfico. ("BAR","LINE")
- setColor() //Color de la serie.
- setData() //Matriz con los datos de la serie.
