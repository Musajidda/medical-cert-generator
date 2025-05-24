<?php

class CertificateGenerator {
    private $template;

    public function __construct($templatePath) {
        $this->template = $templatePath;
    }

    public function generateCertificate($data) {
        ob_start();
        include $this->template;
        $certificate = ob_get_clean();
        return $certificate;
    }
}