<?php

class BookController extends Controller
{
    public function indexAction($route)
    {
        //return $this->render('index.phtml',);    old version using non static render() 
        
        
        //using static method. Providing parameter $route to static method
        return $this->render('index.phtml',$route);
    }
    
    public function showAction()
    {
        return 'showAction';  
    }
    
    public function editAction()
    {
        
    }
}