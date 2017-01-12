<?php
/**
 * Styles Palettes 
 */

class globalStyle 
{
    protected $borderWidth;
    
    protected $borderColor;
    
    protected $backgroundColor;
    
    protected $fontColor;
    
    public function setParameters($tborderWidth, $tborderColor, $tbackgroundColor, $tfontColor)
    {
        $this->borderWidth = $tborderWidth;
        $this->borderColor = $tborderColor;
        $this->backgroundColor = $tbackgroundColor;
        $this->fontColor = $tfontColor;
        return $this;
    }
    
    public function getBorderColor()
    {
        return $this->borderColor;
    }
    
    public function getBorderWidth()
    {
        return $this->borderWidth;
    }
    
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }
    
    public function getFontColor()
    {
        return $this->fontColor;
    }
    
}

class serieStyle
{
    protected $graphType;
    
    protected $borderColor;
    
    protected $backgroundColor;
    
    protected $fontColor;
}
?>