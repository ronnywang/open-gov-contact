<?php

class ErrorController extends Pix_Controller
{
    public function errorAction()
    {
        if ($this->view->exception instanceof Pix_Controller_Dispatcher_Exception) {
            header('404 Not Found', true, 404);
            echo '404';
            return $this->noview();
        } else {
            header('500', true, 500);
            trigger_error(strval($this->view->exception), E_USER_WARNING);
            return $this->noview();
        }
    }
}
