<?php
/**
 * Class Serie
 */

class serie
{
    private $type;
    
    private $color;
    
    private $data;
    
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
    
    public function setData($value)
    {
        $this->data = $value;
        return $this;
    }
    
    public function getType($value)
    {
        return $this->type;
    }
    
    public function getColor($value)
    {
        return $this->color;
    }
    
    public function getData($value)
    {
        return $this->data;
    }
}


?>