<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
require APPPATH."third_party/MX/Loader.php";

//class MY_Loader extends MX_Loader {}

class MY_Loader extends MX_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
        $content  = $this->view('core/template/header', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('core/template/footer', $vars, $return);

        return $content;
    else:
        $this->view('core/template/header', $vars);
        $this->view($template_name, $vars);
        $this->view('core/template/footer', $vars);
    endif;
    }

        public function template2($template_name, $vars = array(), $return = FALSE)
    {
        
        $this->view('core/template/header2', $vars);
        $this->view($template_name, $vars);
        $this->view('core/template/footer', $vars);
    }

        public function template2b($template_name, $vars = array(), $return = FALSE)
    {
        
        $this->view('core/template/header2b', $vars);
        $this->view($template_name, $vars);
        $this->view('core/template/footer', $vars);
    }


        public function template_rarmy($template_name, $vars = array(), $return = FALSE)
    {      
        $this->view('core/template/header_rarmy', $vars);
        $this->view($template_name, $vars);
        $this->view('core/template/footer', $vars);
    }

       public function template_rarmy2($template_name, $vars = array(), $return = FALSE)
    {      
        $this->view('core/template/header_rarmy2', $vars);
        $this->view($template_name, $vars);
        $this->view('core/template/footer', $vars);
    }

       public function template_rarmy3($template_name, $vars = array(), $return = FALSE)
    {      
        $this->view('core/template/header_rarmy3', $vars);
        $this->view($template_name, $vars);
        $this->view('core/template/footer', $vars);
    }
}