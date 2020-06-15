<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login {
 
		function show($view, $login=array()){
 
			$CI = & get_instance();
 
			// Load header
            $CI->load->view('login_template/header',$login);
            
			$CI->load->view($view,$login);
 
			// Load footer
			$CI->load->view('login_template/footer',$login);

		}
}
 
/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */