<?php
namespace App\Controller;

class TestsController extends AppController
{
    public function foo()
    {
        echo 'Hello world !';
    }
    public function bar($bar)
    {
        echo $bar;
    }
    // A vous d'implémeter la fonction !
    public function redirection($arg){
        $this->redirect("testsBar",['param'=>$arg]);
    }
}