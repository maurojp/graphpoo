<?php
/**
 * Class Serie
 */

class serie
{
    private $title;
    
    private $type;
    
    private $color;
    
    private $border;
    
    private $borderColor;
    
    private $data;
    
    public function setTitle($value)
    {
        $this->title = $value;
        return $this;
    }
    
    public function setType($value)
    {
        $this->type = $value;
        return $this;
    }
    
    public function setColor($value)
    {
        $this->color = $value;
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
    
    public function setData($value)
    {
        $this->data = $value;
        return $this;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function getType()
    {
        return $this->type;
    }
    
    public function getColor()
    {
        return $this->color;
    }
    
    public function getBorder()
    {
        return $this->border;
    }
    
    public function getBorderColor()
    {
        return $this->borderColor;
    }
    
    public function getData()
    {
        return $this->data;
    }
}

?>