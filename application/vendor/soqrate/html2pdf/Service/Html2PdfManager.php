<?php

namespace Soqrate\Html2PdfBundle\Service;

class Html2PdfManager
{

    private $_instance = null;
    private $_orientation = 'P';
    private $_format = 'A4';
    private $_language = 'fr';
    private $_unicode = true;
    private $_encoding = 'UTF-8';
    private $_marges = array(5, 5, 5, 8);

    public function __construct($orientation, $format, $language, $unicode, $encoding, $marges)
    {
        $this->_orientation = $orientation;
        $this->_format = $format;
        $this->_language = $language;
        $this->_unicode = $unicode;
        $this->_encoding = $encoding;
        $this->_marges = $marges;
    }

    public function getInstance()
    {
        if (is_null($this->_instance)) {
            $this->_instance = new \HTML2PDF(
                    $this->_orientation, $this->_format, $this->_language, $this->_unicode, $this->_encoding, $this->_marges
            );
        }

        return $this->_instance;
    }

}
