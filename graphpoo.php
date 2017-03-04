<?php

/*
MIT License

Copyright (c) 2017 Mauro José Pacchiotti

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/

include('serie.php');

/**
 * Class Graphpoo
 */
 
class graphpoo
{
    private $height;
    
    private $width;
    
    private $border;
    
    private $borderColor;
    
    private $topMargin;
    
    private $bottomMargin;
    
    private $leftMargin;
    
    private $rightMargin;
    
    private $BGColor;
    
    private $title;
    
    private $titleFontColor;
    
    private $titleFontSize;
    
    private $titleAlign;
    
    private $gridRound;
    
    private $gridCount;
    
    private $gridDecimals;
    
    private $gridLines;
    
    private $gridLineColor;
    
    private $gridFontColor;
    
    private $gridFontSize;
    
    private $xAxisColor;
    
    private $yAxisColor;
    
    private $labelFontColor;
    
    private $labelFontSize;
    
    private $labelOrientation;
    
    private $legend;
    
    private $legendBGColor;
    
    private $legendBorder;
    
    private $legendBorderColor;
    
    private $legendFontColor;
    
    private $legendFontSize;
    
    private $labels;
    
    protected $series;
    
    public function setHeight($value)
    {
        $this->height = $value;
        
        return $this;
    }    
    
    public function setWidth($value)
    {
        $this->width = $value;
        
        return $this;
    }
    
    public function setBorder($value)
    {
        $this->border = $value;
        
        return $this;
    }    
    
    public function setBorderColor($value)
    {
        $this->borderColor = $value;
        
        return $this;
    }    
    
    public function setTopMargin($value)
    {
        $this->topMargin = $value;
        
        return $this;
    }
    
    public function setBottomMargin($value)
    {
        $this->bottomMargin = $value;
        
        return $this;
    }
    
    public function setLeftMargin($value)
    {
        $this->leftMargin = $value;
        
        return $this;
    }
    
    public function setRightMargin($value)
    {
        $this->rightMargin = $value;
        
        return $this;
    }

    public function setBGColor($value)
    {
        $this->BGColor = $value;
        
        return $this;
    }
    
    public function setTitle($value)
    {
        $this->title = $value;
        
        return $this;
    }
    
    public function setTitleFontColor($value)
    {
        $this->titleFontColor = $value;
        
        return $this;
    }
    
    public function setTitleFontSize($value)
    {
        $this->titleFontSize = $value;
        
        return $this;
    }
    
    public function setTitleAlign($value)
    {
        $this->titleAlign = $value;
        
        return $this;
    }
    
    public function setGridRound($value)
    {
        $this->gridRound = $value;
        
        return $this;
    }
    
    public function setGridCount($value)
    {
        $this->gridCount = $value;
        
        return $this;
    }
    
    public function setGridDecimals($value)
    {
        $this->gridDecimals = $value;
        
        return $this;
    }
    
    public function setGridLines($value)
    {
        $this->gridLines = $value;
        
        return $this;
    }
    
    public function setGridFontColor($value)
    {
        $this->gridFontColor = $value;
        
        return $this;
    }
    
    public function setGridFontSize($value)
    {
        $this->gridFontSize = $value;
        
        return $this;
    }
    
    public function setGridLineColor($value)
    {
        $this->gridLineColor = $value;
        
        return $this;
    }
    
    public function setXAxisColor($value)
    {
        $this->xAxisColor = $value;
        
        return $this;
    }
    
    public function setYAxisColor($value)
    {
        $this->yAxisColor = $value;
        
        return $this;
    }
    
    public function setLabelFontColor($value)
    {
        $this->labelFontColor = $value;
        
        return $this;
    }
    
    public function setLabelFontSize($value)
    {
        $this->labelFontSize = $value;
        
        return $this;
    }
    
    public function setLabelOrientation($value)
    {
        $this->labelOrientation = $value;
        
        return $this;
    }
    
    public function setLegend($value)
    {
        $this->legend = $value;
        
        return $this;
    }
    
    public function setLegendBGColor($value)
    {
        $this->legendBGColor = $value;
        
        return $this;
    }
    
    public function setLegendBorder($value)
    {
        $this->legendBorder = $value;
        
        return $this;
    }
    
    public function setLegendBorderColor($value)
    {
        $this->legendBorderColor = $value;
        
        return $this;
    }
    
    public function setLegendFontColor($value)
    {
        $this->legendFontColor = $value;
        
        return $this;
    }
    
    public function setLegendFontSize($value)
    {
        $this->legendFontSize = $value;
        
        return $this;
    }
    
    public function setLabels($value)
    {
        $this->labels = $value;
        
        return $this;
    }
    
    // Add for Default Option
    public function setDefaults()
    {
        include 'GSTYLE.php';
        
        $this->setBorder(BORDER);
        
        $this->setBorderColor(BORDER_COLOR);
        
        $this->setTopMargin(TOP_MARGIN);
        
        $this->setBottomMargin(BOTTOM_MARGIN);
        
        $this->setLeftMargin(LEFT_MARGIN);
        
        $this->setRightMargin(RIGHT_MARGIN);
        
        $this->setBGColor(BG_COLOR);
        
        $this->setTitleFontColor(TITLE_FONT_COLOR);
        
        $this->setTitleFontSize(TITLE_FONT_SIZE);
        
        $this->setTitleAlign(TITLE_ALIGN);
        
        $this->setGridRound(GRID_ROUND);
    
        $this->setGridCount(GRID_COUNT);
    
        $this->setGridDecimals(GRID_DECIMALS);
    
        $this->setGridLines(GRID_LINES);
    
        $this->setGridLineColor(GRID_LINE_COLOR);
    
        $this->setGridFontColor(GRID_FONT_COLOR);
    
        $this->setGridFontSize(GRID_FONT_SIZE);
    
        $this->setXAxisColor(X_AXIS_COLOR);
    
        $this->setYAxisColor(Y_AXIS_COLOR);
    
        $this->setLabelFontColor(LABEL_FONT_COLOR);
    
        $this->setLabelFontSize(LABEL_FONT_SIZE);
    
        $this->setLabelOrientation(LABEL_ORIENTATION);
    
        $this->setLegend(LEGEND);
    
        $this->setLegendBGColor(LEGEND_BG_COLOR);
    
        $this->setLegendBorder(LEGEND_BORDER);
    
        $this->setLegendBorderColor(LEGEND_BORDER_COLOR);
    
        $this->setLegendFontColor(LEGEND_FONT_COLOR);
    
        $this->setLegendFontSize(LEGEND_FONT_SIZE);
    }
    
    // End Add
    
    public function addSerie($serie)
    {
        $this->series[] = $serie;
        
        return $this;
    }
    
    public function renderImage($filename = NULL)
    {
        
        $imagen = imagecreatetruecolor($this->width, $this->height);
        
        // Background
        
        $bgColorArray = $this->hexToRgb($this->BGColor);
        
        $bgColorRGB = imagecolorallocatealpha($imagen, $bgColorArray[0], $bgColorArray[1], $bgColorArray[2], 0);
        
        imagefill( $imagen, 0, 0, $bgColorRGB ); 
        
        // Border
        
        
        if ($this->border)
        {
            $borderColorArray = $this->hexToRgb($this->borderColor);
        
            $borderColorRGB = imagecolorallocatealpha($imagen, $borderColorArray[0], $borderColorArray[1], $borderColorArray[2], 0);
        
            imagerectangle($imagen, 0, 0, $this->width - 1, $this->height - 1, $borderColorRGB);
        }
        
        // Title
        
        $titleFontColorArray = $this->hexToRgb($this->titleFontColor);
        
        $titleFontColorRGB = imagecolorallocatealpha($imagen, $titleFontColorArray[0], $titleFontColorArray[1], $titleFontColorArray[2], 0);
        
        if ($this->titleAlign == "LEFT")
        {
            $tm = $this->leftMargin;
        } elseif ($this->titleAlign == "CENTER")
        {
            $tm = ((($this->width - $this->leftMargin - $this->rightMargin) - (strlen($this->title) * imagefontwidth($this->titleFontSize))) / 2) + $this->leftMargin;
        } elseif ($this->titleAlign == "RIGHT")
        {
            $tm = (($this->width - $this->leftMargin - $this->rightMargin) - (strlen($this->title) * imagefontwidth($this->titleFontSize))) + $this->leftMargin;
        }
        
        imagestring($imagen, $this->titleFontSize, $tm, $this->topMargin / 4, $this->title, $titleFontColorRGB); 
        
        // General Parameters
        
        $separatorWidth = 6; // Cambiar por una propiedad
        
        $sMax = $this->globalMax($this->series);
        
        // Grid and Grid lines
        
        $gridLineColorArray = $this->hexToRgb($this->gridLineColor);
        
        $gridLineColorRGB = imagecolorallocatealpha($imagen, $gridLineColorArray[0], $gridLineColorArray[1], $gridLineColorArray[2], 0);
        
        $gridFontColorArray = $this->hexToRgb($this->gridFontColor);
        
        $gridFontColorRGB = imagecolorallocatealpha($imagen, $gridFontColorArray[0], $gridFontColorArray[1], $gridFontColorArray[2], 0);
        
        $xAxis = $this->height - $this->bottomMargin;
        $gridStep = ($this->height - $this->bottomMargin - $this->topMargin) / $this->gridCount;
        
        for ($i = 0; $i <= $sMax; $i += ($sMax / $this->gridCount))
        {
            imagestring($imagen, $this->gridFontSize, ($this->leftMargin / 2) + $this->marginTag(number_format($i,$this->gridDecimals), strlen($sMax)), $xAxis - (imagefontheight($this->gridFontSize) / 2), number_format($i,$this->gridDecimals), $gridFontColorRGB);
            if ($this->gridLines)
            {
                imageline($imagen, $this->leftMargin, $xAxis, $this->width - $this->rightMargin, $xAxis, $gridLineColorRGB);
            }
            $xAxis -= $gridStep;
        }
        
        // Legend
        
        if ($this->legend)
        {
            $legendBGColorArray = $this->hexToRgb($this->legendBGColor);
            
            $legendBGColorRGB = imagecolorallocatealpha($imagen, $legendBGColorArray[0], $legendBGColorArray[1], $legendBGColorArray[2], 0);
            
            $legendFontColorArray = $this->hexToRgb($this->legendFontColor);
            
            $legendFontColorRGB = imagecolorallocatealpha($imagen, $legendFontColorArray[0], $legendFontColorArray[1], $legendFontColorArray[2], 0);
            
            // Draw BG
            
            $legendHeight = (imagefontheight($this->legendFontSize) * 1.5) * (count($this->series) + 1);
            
            $legendWidth = imagefontwidth($this->legendFontSize) * ($this->legendMaxLength() + 5);
            
            imagefilledrectangle($imagen, $this->width - $this->rightMargin + 10, ($this->height - $legendHeight) / 2, ($this->width - $this->rightMargin + 5) + $legendWidth, (($this->height - $legendHeight) / 2) + $legendHeight, $legendBGColorRGB);
            
            // Legend Border
            
            if ($this->legendBorder)
            {
                $legendBorderColorArray = $this->hexToRgb($this->legendBorderColor);
            
                $legendBorderRGB = imagecolorallocatealpha($imagen, $legendBorderColorArray[0], $legendBorderColorArray[1], $legendBorderColorArray[2], 0);
                
                imagerectangle($imagen, $this->width - $this->rightMargin + 10, ($this->height - $legendHeight) / 2, ($this->width - $this->rightMargin + 5) + $legendWidth, (($this->height - $legendHeight) / 2) + $legendHeight, $legendBorderRGB);
            }
            
            // Draw Labels
            
            $lmLeft = $this->width - $this->rightMargin + 10 + imagefontwidth($this->legendFontSize);
            
            $lmTop = (($this->height - $legendHeight) / 2) + imagefontheight($this->legendFontSize);
            
            $legendCount = 0;
            
            foreach($this->series as $s)
            {
                // Set Color Serie
                $sColorArray = $this->hexToRgb($s->getColor());
            
                $sColorRGB = imagecolorallocatealpha($imagen, $sColorArray[0], $sColorArray[1], $sColorArray[2], 0);
                
                imagefilledrectangle($imagen, $lmLeft, $lmTop + ($legendCount * imagefontheight($this->legendFontSize) * 1.5), $lmLeft + imagefontwidth($this->legendFontSize), $lmTop + ($legendCount * imagefontheight($this->legendFontSize) * 1.5) + imagefontheight($this->legendFontSize), $sColorRGB);
                
                imagestring($imagen, $this->legendFontSize, $lmLeft + (imagefontwidth($this->legendFontSize) * 2), $lmTop + ($legendCount * imagefontheight($this->legendFontSize) * 1.5),$s->getTitle(), $legendFontColorRGB);
                
                $legendCount ++;
            }
        }
        
        // Series
        
        foreach ($this->series as $s)
        {
            // Set Color Serie
            $sColorArray = $this->hexToRgb($s->getColor());
            
            $sColorRGB = imagecolorallocatealpha($imagen, $sColorArray[0], $sColorArray[1], $sColorArray[2], 0);
            
            // Set common colums parameters
            $sData = $s->getData();
            
            $columnWidth = ($this->width - $this->leftMargin - $this->rightMargin - ($separatorWidth * count($sData))) / count($sData);
            
            $columnCount = 0;
            
            // Draw bars
            $lxt = 0;
            
            $lyt = 0; 
            
            foreach ($sData as $barValue)
            {
                // Type selection ("BAR" OR "LINE") 
                if ($s->getType() == "BAR")
                    {
                    $cleft = $this->leftMargin + (($columnWidth + $separatorWidth) * $columnCount) + ($separatorWidth / 2);
                    $cright = $this->leftMargin + (($columnWidth + $separatorWidth) * $columnCount) + $columnWidth + ($separatorWidth / 2);
                    $ctop = $this->height - ((($barValue * ($this->height - ($this->topMargin + $this->bottomMargin))) / $sMax) + $this->bottomMargin);
                    $cbottom = $this->height - $this->bottomMargin;
                    imagefilledrectangle($imagen, $cleft, $ctop, $cright, $cbottom, $sColorRGB);
                    if ($s->getBorder())
                    {
                        $sbColorArray = $this->hexToRgb($s->getBorderColor());
            
                        $sbColorRGB = imagecolorallocatealpha($imagen, $sbColorArray[0], $sbColorArray[1], $sbColorArray[2], 0);
                        
                        imagerectangle($imagen, $cleft, $ctop, $cright, $cbottom, $sbColorRGB);
                    }
                } elseif ($s->getType() == "LINE") {
                    $lx = $this->leftMargin + (($columnWidth + $separatorWidth) * $columnCount) + ($columnWidth / 2) + ($separatorWidth / 2);
                    $ly = $this->height - ((($barValue * ($this->height - ($this->topMargin + $this->bottomMargin))) / $sMax) + $this->bottomMargin);
                    
                    if (!($lxt==0 && $lyt==0))
                    {
                        imageline($imagen, $lxt, $lyt, $lx, $ly, $sColorRGB);
                    }
                    
                    $lxt = $lx;
                    $lyt = $ly;
                    
                    imagefilledarc($imagen, $lx, $ly, 5, 5, 0, 360, $sColorRGB, IMG_ARC_PIE);
                    //imagestring($imagen, 3, $cleft + 2, $cbottom + 2, $barValue, $sColorRGB);
                }
                $columnCount ++;
            }
        }
        
        // Labels
        $labelColorArray = $this->hexToRgb($this->labelFontColor);
            
        $labelColorRGB = imagecolorallocatealpha($imagen, $labelColorArray[0], $labelColorArray[1], $labelColorArray[2], 0);
            
        $columnWidth = ($this->width - $this->leftMargin - $this->rightMargin - ($separatorWidth * count($this->labels))) / count($this->labels);
            
        $columnCount = 0;
        
        foreach ($this->labels as $l)
        {
            if ($this->labelOrientation == "H")
            {
                $posX = $this->leftMargin + (($columnWidth + $separatorWidth) * $columnCount);
                $posY = $this->height - $this->bottomMargin;
                imagestring($imagen, $this->labelFontSize, $posX, $posY + 2, $l, $labelColorRGB);
            } elseif ($this->labelOrientation == "V")
            {
                $posX = $this->leftMargin + (($columnWidth + $separatorWidth) * $columnCount) + (($columnWidth - imagefontheight($this->labelFontSize)) / 2);
                $posY = $this->height - $this->bottomMargin + (imagefontwidth($this->labelFontSize) * strlen($l));
                imagestringup($imagen, $this->labelFontSize, $posX, $posY + 2, $l, $labelColorRGB);
            }
            
            // verticalGrid
            if ($this->gridLines)
            {
                imageline($imagen, $this->leftMargin + (($columnWidth + $separatorWidth) * ($columnCount + 1)), $this->height - $this->bottomMargin,  $this->leftMargin + (($columnWidth + $separatorWidth) * ($columnCount + 1)), $this->topMargin, $gridLineColorRGB);
            }
            
            $columnCount ++;
        }
        
        // Draw X-Y Axis
        $xAxixColorArray = $this->hexToRgb($this->xAxisColor);
            
        $xAxisColorRGB = imagecolorallocatealpha($imagen, $xAxixColorArray[0], $xAxixColorArray[1], $xAxixColorArray[2], 0);
        
        $yAxixColorArray = $this->hexToRgb($this->yAxisColor);
            
        $yAxisColorRGB = imagecolorallocatealpha($imagen, $yAxixColorArray[0], $yAxixColorArray[1], $yAxixColorArray[2], 0);
        
        imageline($imagen, $this->leftMargin, $this->height - $this->bottomMargin, $this->width - $this->rightMargin, $this->height - $this->bottomMargin, $xAxisColorRGB);
        
        imageline($imagen, $this->leftMargin, $this->height - $this->bottomMargin, $this->leftMargin, $this->topMargin, $yAxisColorRGB);
        
        //Render image
        if (!$filename)
        {
            //echo "Pasa1";
            header('Content-Type: image/png');
            imagepng($imagen);
        } else {
            //echo "Pasa2";
            imagepng($imagen, $filename);
        }
        
        imagedestroy($imagen);
    }
    
    private function hexToRgb($hexaValue)
    {
        return sscanf($hexaValue, "#%02x%02x%02x");
    }
    
    private function globalMax()
    {
        $max = 0;
        foreach ($this->series as $s)
        {
            if (max($s->getData()) > $max)
            {
                $max = max($s->getData());
            }
        }
        
        if ($this->gridRound != 0)
            $max = $this->gridRound - ($max % $this->gridRound) + $max;
        return $max;
    }
    
    private function marginTag($tag, $lenMaxTag)
    {
        return ($lenMaxTag - strlen($tag)) * imagefontwidth($this->gridFontSize);
    }
    
    private function legendMaxLength()
    {
        $max = 0;
        foreach ($this->series as $s)
        {
            if (strlen($s->getTitle()) > $max)
            {
                $max = strlen($s->getTitle());
            }
        }
        
        return $max;
    }
}

?>
