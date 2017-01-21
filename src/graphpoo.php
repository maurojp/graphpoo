<?php

include('styles.php');
include('serie.php');

class graphpoo
{
    private $borderColor;
    
    private $borderWidth;
    
    private $height;
    
    private $width;
    
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
    
    private $gridFontSize;
    
    private $gridFontColor;
    
    private $gridLineColor;
    
    private $labelFontColor;
    
    private $labelFontSize;
    
    private $labelOrientation;
    
    private $labels;
    
    protected $series;
    
    public function setBorderColor($value)
    {
        $this->borderColor = $value;
        
        return $this;
    }
    
    public function setBorderWidth($value)
    {
        $this->borderWidth = $value;
        
        return $this;
    }
    
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
    
    public function setGridFontSize($value)
    {
        $this->gridFontSize = $value;
        
        return $this;
    }
    
    public function setGridFontColor($value)
    {
        $this->gridFontColor = $value;
        
        return $this;
    }
    
    public function setGridLineColor($value)
    {
        $this->gridLineColor = $value;
        
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
    
    public function setLabels($value)
    {
        $this->labels = $value;
        
        return $this;
    }
    
    public function addSerie($serie)
    {
        $this->series[] = $serie;
        
        return $this;
    }
    
    public function renderToFile($filename)
    {
        
        $imagen = imagecreatetruecolor($this->width, $this->height);
        
        // Background
        
        $bgColorArray = $this->hexToRgb($this->BGColor);
        
        $bgColorRGB = imagecolorallocatealpha($imagen, $bgColorArray[0], $bgColorArray[1], $bgColorArray[2], 0);
        
        imagefill( $imagen, 0, 0, $bgColorRGB ); 
        
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
        
        $separatorWidth = 5; // Cambiar por una propiedad
        
        $sMax = $this->globalMax($this->series);
        
        // Grid and Grid lines
        
        $xAxis = $this->height - $this->bottomMargin;
        $gridStep = ($this->height - $this->bottomMargin - $this->topMargin) / $this->gridCount;
        
        for ($i = 0; $i <= $sMax; $i += ($sMax / $this->gridCount))
        {
            imagestring($imagen, $this->gridFontSize, ($this->leftMargin / 2) + $this->marginTag(number_format($i,$this->gridDecimals), strlen($sMax)), $xAxis - (imagefontheight($this->gridFontSize) / 2), number_format($i,$this->gridDecimals), $titleColorRGB);
            if ($this->gridLines)
            {
                imageline($imagen, $this->leftMargin, $xAxis, $this->width - $this->rightMargin, $xAxis, $sColorRGB);
            }
            $xAxis -= $gridStep;
        }
        
        // Series
        
        foreach ($this->series as $s)
        {
            // Set Color Serie
            $sColorArray = $this->hexToRgb($s->getColor());
            
            $sColorRGB = imagecolorallocatealpha($imagen, $sColorArray[0], $sColorArray[1], $sColorArray[2], 0);
            
            // Set common colums parameters
            
            $sData = $s->getData();
            
            //$sMax = max($sData);
            
            $columnWidth = ($this->width - $this->leftMargin - $this->rightMargin - ($separatorWidth * count($sData))) / count($sData);
            
            $columnCount = 0;
            
            // Draw bars
            
            $lxt = 0;
            
            $lyt = 0; 
            
            foreach ($sData as $barValue)
            {
                // Type selection ("BAR" OR "LINE")             $columnWidth = ($this->width - $this->leftMargin - $this->rightMargin) / (count($sData) - 1);
                if ($s->getType() == "BAR")
                    {
                    $cleft = $this->leftMargin + (($columnWidth + $separatorWidth) * $columnCount);
                    $cright = $this->leftMargin + (($columnWidth + $separatorWidth) * $columnCount) + $columnWidth;
                    $ctop = $this->height - ((($barValue * ($this->height - ($this->topMargin + $this->bottomMargin))) / $sMax) + $this->bottomMargin);
                    $cbottom = $this->height - $this->bottomMargin;
                    imagefilledrectangle($imagen, $cleft, $ctop, $cright, $cbottom, $sColorRGB);
                    //imagestring($imagen, 3, $cleft + 2, $cbottom + 2, $barValue, $sColorRGB);
                } elseif ($s->getType() == "LINE") {
                    $lx = $this->leftMargin + (($columnWidth + $separatorWidth) * $columnCount) + ($columnWidth / 2);
                    $ly = $this->height - ((($barValue * ($this->height - ($this->topMargin + $this->bottomMargin))) / $sMax) + $this->bottomMargin);
                    
                    IF (!($lxt==0 && $lyt==0))
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
            
            $columnCount ++;
        }
        
        return imagepng($imagen, $filename);
    }
    
    function __construct()
    {
        $this->style = new globalStyle;
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
}

?>