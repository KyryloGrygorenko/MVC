<?php

class DefaultController extends Controller
{
    public function indexAction($route)
    {
        //return $this->render('index.phtml',);    old version using non static render() 
        
        //using static method. Providing parameter $route to static method
        return $this->render('index.phtml',$route);
        
        
    }
    
    public function feedbackAction($route)
    {
        return $this->render('feedback.phtml',$route);
    }
}