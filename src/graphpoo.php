<?php

include('styles.php');

class graphpoo
{
    private $width;
    
    private $height;
    
    public $style;
    
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
    
    public function renderToFile($filename)
    {
        
        $imagen = imagecreatetruecolor($this->width, $this->height);
        
        // Color de fondo
        
        $bgColorArray = $this->hexToRgb($this->style->getBackgroundColor());
        
        $bgColorRGB = imagecolorallocatealpha( $imagen, $bgColorArray[0], $bgColorArray[1], $bgColorArray[2], 0);
        
        imagefill( $imagen, 0, 0, $bgColorRGB ); 
        
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