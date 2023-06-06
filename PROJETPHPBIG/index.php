<?php

class HTMLPage
{
    private $title;
    private $logoImage;
    private $adminButtonLink;
    private $etudiantButtonLink;
    private $mainImage;

    public function __construct($title, $logoImage, $adminButtonLink, $etudiantButtonLink, $mainImage)
    {
        $this->title = $title;
        $this->logoImage = $logoImage;
        $this->adminButtonLink = $adminButtonLink;
        $this->etudiantButtonLink = $etudiantButtonLink;
        $this->mainImage = $mainImage;
    }

    public function generateHTML()
    {
        $html = "<!DOCTYPE html>\n";
        $html .= "<html lang='en'>\n";
        $html .= "<head>\n";
        $html .= "<meta charset='UTF-8'>\n";
        $html .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
        $html .= "<link href='asset/style/index.css' rel='stylesheet'>\n";
        $html .= "<title>{$this->title}</title>\n";
        $html .= "</head>\n";
        $html .= "<body>\n";
        $html .= "<div>\n";
        $html .= "<div id='logoiam'>\n";
        $html .= "<img src='{$this->logoImage}' width='300px' height='200'>\n";
        $html .= "</div>\n";
        $html .= "<div style='position:absolute;top:200px;width:1280px;z-index:2;font-size:xx-large;color:rgb(255,255,255);'>\n";
        $html .= "<center>\n";
        $html .= "<a href='{$this->adminButtonLink}'>\n";
        $html .= "<button id='Admin'>Administrateur</button>\n";
        $html .= "</a>\n";
        $html .= "</center>\n";
        $html .= "<center>\n";
        $html .= "<a href='{$this->etudiantButtonLink}'>\n";
        $html .= "<button id='Etudiant'>Etudiant</button>\n";
        $html .= "</a>\n";
        $html .= "</center>\n";
        $html .= "</div>\n";
        $html .= "<div>\n";
        $html .= "<img src='{$this->mainImage}' width='100%' height='600'>\n";
        $html .= "</div>\n";
        $html .= "</div>\n";
        $html .= "</body>\n";
        $html .= "</html>\n";

        return $html;
    }
}

// Usage example:
$page = new HTMLPage(
    "Document",
    "asset/image/logoiam.jpg",
    "views/ADMIN/pageadmin2.php",
    "views/ETUDIANT/pageconnexionetudiant.php",
    "asset/image/image1.jpg"
);
$htmlCode = $page->generateHTML();
echo $htmlCode;

?>
