<?php

namespace Core;

class Request
{
    //ici sont disposés les parametre/ attribus inhérant à ma class

    private $post; //ceci est l'attribus privé (disponible que dans sa propre class) $post
    private $get;
    private $files;
    private $request;
    private $server;
    private $cookie;
    private $session;



    //ici sont disposées les methodes inhérentes à ma class
    //plusieurs type de methodes :
    // I.
    // les methodes magics (__construct(), __get(), etc..) sont des methodes préfabriquer dans php
    // II.
    // les method communes (get_call_class(), etc...) aussi des methodes préfabriquer dans php
    // infos sur chacune d'entre ele disponible sur PHP.net
    // III.
    // les method "PERSO"
    // deux types
    // la syntaxe type 1 : visibilité function nom_method(){
    //      les différentes actions de la methode
    //  }
    // type 2: visibilité function nom_method( Paramètres ($quelque_chose) ) {
    //      les diférentes actions de la methode
    //      le retour (return bla bla bla)
    //      }
    public function __construct($post, $get, $files, $request, $server, $cookie, $session)
    {
        $this->post = $post;
        $this->get = $get;
        $this->files = $files;
        $this->request = $request;
        $this->server = $server;
        $this->cookie = $cookie;
        $this->session = $session;
    }

    public static function createFromGlobals()
    {
        session_start();
        return new Request($_POST, $_GET, $_FILES, $_COOKIE, $_SESSION, $_REQUEST, $_SERVER);
    }
    public function getPost()
    {
        return $this->post;
    }
    public function getGet()
    {
        return $this->get;
    }
    public function getFiles()
    {
        return $this->files;
    }
    public function getCookie()
    {
        return $this->cookie;
    }
    public function getSession()
    {
        return $this->session;
    }
    public function getRequest()
    {
        return $this->request;
    }
    public function getServer()
    {
        return $this->server;
    }




}