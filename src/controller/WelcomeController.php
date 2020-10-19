<?php
namespace src\controller;
use system\Controller;

class Welcome extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * url d'acces c'est : localhost/mesprojets/TD3HTMLCSSPHPNAMESPACEORM/welcome/index
     */

    public function index()
    {
        return $this->view->load("welcome/index");
    }
}

?>