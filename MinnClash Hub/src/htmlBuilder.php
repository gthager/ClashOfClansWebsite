<?php

class htmlBuilder {
    private $html;

    public function __construct() {
        $this->html = '';
    }

    public function addElement($tag, $content = '', $attributes = []) {
        $attributeStr = '';
        foreach ($attributes as $key => $value) {
            $attributeStr .= " $key=\"$value\"";
        }
        $this->html .= "<$tag$attributeStr>$content</$tag>";
    }

    public function getHTML() {
        return $this->html;
    }
}