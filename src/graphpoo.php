<?php

include('styles.php');
include('serie.php');

class graphpoo
{
    private $width;
    
    private $height;
    
    public $style;
    
    protected $series;
    
    public function setWidth($value)
    {
        $this->width = $value;
        
        return $this;
    }
    
    public function setHeight($value)
    {
        $this->height = $value;
        
        return $this;
    }
    
    public function setStyle($borderWidth, $borderColor, $backgroundColor, $fontColor)
    {
        $this->style->setParameters($borderWidth, $borderColor, $backgroundColor, $fontColor);
        
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
        
        $bgColorArray = $this->hexToRgb($this->style->getBackgroundColor());
        
        $bgColorRGB = imagecolorallocatealpha($imagen, $bgColorArray[0], $bgColorArray[1], $bgColorArray[2], 0);
        
        imagefill( $imagen, 0, 0, $bgColorRGB ); 
        
        // Series
        
        $leftMargin = 20;
        
        $bottomMargin = 20;
        
        $separatorWidth = 5;
        
        foreach ($this->series as $s)
        {
            // Set Color and Type Serie
            $sColorArray = $this->hexToRgb($s->getColor());
            
            $sColorRGB = imagecolorallocatealpha($imagen, $sColorArray[0], $sColorArray[1], $sColorArray[2], 0);
            
            $sData = $s->getData();
            
            $columnWidth = $this->width - $leftMargin - ($separatorWidth * count($sData));
            
            
            
            
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
}

?>