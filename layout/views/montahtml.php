<?php

class MontaHtml {

    function Cabecalho() {
        $html = NULL;
        $html .= "<html>";
        $html .= "<meta charset = 'UTF-8' />";

        return $html;
    }

    function Head() {
        $html = NULL;

        $html = "<head>";
        $html .= "<meta charset='UTF-8'/>";
        $html .= "<title>Html Modularizado</title>";
        $html .= "</head>";

        return $html;
    }

    function Body() {
        $html = NULL;

        $html .= "<body>";
        $html .= "<h2>";
        $html .= "Html Modularizado";
        $html .= "</h2>";
        $html .= "</body>";

        return $html;
    }

    function Fim() {
        $html = NULL;

        $html .= "</html>";

        return $html;
    }

}
