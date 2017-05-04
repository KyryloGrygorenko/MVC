<?php

class BookController extends Controller
{
    public function indexAction()
    {
        return $this->render('index.phtml');    
    }
    
    public function showAction()
    {
        return 'showAction';  
    }
    
    public function editAction()
    {
        
    }
}