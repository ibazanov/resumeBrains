<?php

class resumeGenerator
{
    private $head;
    private $bodyResume;
    private $footer;

    public function __construct($head, $bodyResume, $footer)
    {
        $this->head = $head;
        $this->bodyResume = $bodyResume;
        $this->footer = $footer;
    }

    private function generateHeader($head)
    {
        $result = '';
        $result .= '<header>';
        $result .= '<div class="headerLeft">';
        foreach ($head['left'] as $key => $value) {
            $result .= "<b>$key:</b><br>";
            if (is_array($value)) {
                foreach ($value as $vkey => $item) {
                    $result .= $vkey . ": " . $item . '<br>';
                }
            } else {
                $result .= "$value<br>";
            }
        }
        $result .= '</div>';
        $result .= '<div class="headerPhoto">';
        $result .= '<img src = "' . $head['right']['photo'] . '">';
        $result .= '</div>';
        $result .= '</header>';

        return $result;
    }

    private function generateBody($bodyResume)
    {
        $result = '';
        $result .= '<div class=".bodyResume">';
        foreach ($bodyResume as $key => $value) {
            $result .= "<b>$key:</b><br>";
            if (is_array($value)) {
                $result .= '<ul class="zebra">';
                foreach ($value as $item) {
                    $result .= "<li>$item</li>";
                }
                $result .= '</ul>';
            } else {
                $result .= '<ul class="zebra">';
                $result .= "<li>$value</li>";
                $result .= '</ul>';
            }
        }
        $result .= '</div>';
        return $result;
    }

    private function generateFooter($footer){
        $result = '';
        $result .= '<footer>';
        foreach ($footer as $key => $value) {
            $result .= "<b>$key</b><br>";
                $result .= "$value<br>";
        }
        $result .= '</footer>';
        return $result;
    }

    public function generateResume()
    {
        $result = '';
        $result .= $this->generateHeader($this->head);
        $result .= $this->generateBody($this->bodyResume);
        $result .= '<hr>';
        $result .= $this->generateFooter($this->footer);
        return $result;
    }

}