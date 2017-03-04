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
