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
    
    private $titleColor;
    
    private $HScale;
    
    private $VScale;
    
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
    
    public function setTitleColor($value)
    {
        $this->titleColor = $value;
        
        return $this;
    }
    
    public function setHScale($value)
    {
        $this->HScale = $value;
        
        return $this;
    }
    
    public function setVScale($value)
    {
        $this->VScale = $value;
        
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
        
        // Series
        
        $leftMargin = 20;
        
        $rightMargin = 20;
        
        $topMargin = 20;
        
        $bottomMargin = 20;
        
        $separatorWidth = 5;
        
        foreach ($this->series as $s)
        {
            // Set Color and Type Serie
            $sColorArray = $this->hexToRgb($s->getColor());
            
            $sColorRGB = imagecolorallocatealpha($imagen, $sColorArray[0], $sColorArray[1], $sColorArray[2], 0);
            
            // Set common colums parameters
            
            $sData = $s->getData();
            
            $sMax = max($sData);
            
            $columnWidth = ($this->width - $leftMargin - $rightMargin - ($separatorWidth * count($sData))) / count($sData);
            
            $columnCount = 0;
            
            // Draw bars
            
            foreach ($sData as $barValue)
            {
                $cleft = $leftMargin + (($columnWidth + $separatorWidth) * $columnCount);
                $cright = $leftMargin + (($columnWidth + $separatorWidth) * $columnCount) + $columnWidth;
                $ctop = $this->height - ((($barValue * ($this->height - ($topMargin + $bottomMargin))) / $sMax) + $bottomMargin);
                $cbottom = $this->height - $bottomMargin;
                imagefilledrectangle($imagen, $cleft, $ctop, $cright, $cbottom, $sColorRGB);
                imagestring($imagen, 12, $cleft + 2, $cbottom + 2, $barValue, $sColorRGB);
                $columnCount ++;

            }
        
            return imagepng($imagen, $filename);
        }
    }
    
    function __construct()
    {
        $this->style = new globalStyle;
    }
    
    private function hexToRgb($hexaValue)
    {
        return sscanf($hexaValue, "#%02x%02x%02x");
    }
}

?>