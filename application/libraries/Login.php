<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login {
 
		function show($view, $data=array()){
 
			$CI = & get_instance();
 
			// Load header
            $CI->load->view('login/header',$data);
            
			$CI->load->view($view,$data);
 
			// Load footer
			$CI->load->view('login/footer',$data);

		}
}
 
/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */