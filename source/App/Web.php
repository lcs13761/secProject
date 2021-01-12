<?php


namespace Source\App;

use Source\Core\Controller;

class Web extends Controller
{
    /**
     * __construct parent controller
     */
    public function __construct()
    {
        parent::__construct(__DIR__."/../../themes/");
    }
    /**
     * home
     * @return void
     */
    public function home():void
    {
        echo $this->view->render("home" , [
            
        ]);
    }
    /**
     * elements
     * @return void
     */
    public function elements():void
    {   
     echo $this->view->render("elements", []);
    }
    /**
     * generic
     * @return void
     */
    public function generic(): void 
    {
        echo $this->view->render("generic" , []);
    }
    /**
     * Terms
     * @return void
     */
    public function terms(): void
    {
        echo $this->view->render("terms" , []);
    }
    
    /**Error  */
    public function error(array $data): void
    {
        $error = new \stdClass();
        $error->code = $data['errcode'];
        $error->title = "Ooops. Conteúdo indispinível :/";
        $error->message = "Sentimos muito, mas o conteúdo que você tentou acessar não existe, 
        está   indiponivel no momento ou foi removido, mas caso precise nós envie um e-mail";
        $error->linkTitle = "Enviar Email";
        $error->link = "mailto:". CONF_MAIL_SUPPORT;
        
        echo $this->view->render("error" , [
            "error" => $error
        ]);
    }
}