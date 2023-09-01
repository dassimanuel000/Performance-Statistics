<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */


if ( ! function_exists('get_phrase'))
{
	function get_phrase($phrase = '') {
		$CI	=&	get_instance();
		$CI->load->database();
		if($current_language = $CI->session->userdata('language')){} else {
		$current_language	=	$CI->db->get_where('settings' , array('type' => 'language'))->row()->description;
		}
		if ($current_language == 'french') {
			
			$file_path = base_url().'lang/fr.json';
		
			// Charger le contenu JSON existant (tableau associatif)
			$data = json_decode(file_get_contents($file_path), true);
		
			// Ajouter le mot et sa traduction au tableau des données
			$translate_phrase = $data[$phrase];
			if (strlen($translate_phrase) > 1) {
				return ($translate_phrase);
			} else {
				return ($phrase);
			}
			
		}				
		

		/*
		if ( $current_language	==	'') {
			$current_language	=	'english';
			$CI->session->set_userdata('current_language' , $current_language);
		}


		/** insert blank phrases initially and populating the language db 
		$check_phrase	=	$CI->db->get_where('language' , array('phrase' => $phrase))->row()->phrase;
		if ( $check_phrase	!=	$phrase)
			$CI->db->insert('language' , array('phrase' => $phrase)); ***
			
			
			
			/** delete already phrases  
			//$check_phrase	=	$CI->db->get_where('language' , array('phrase' => $phrase))->row()->phrase;
			//if ( $check_phrase	==	'Teachers')
			//$CI->db->delete('language' , array('phrase' => $phrase)); ***
				
			
			// query for finding the phrase from `language` table
			$query	=	$CI->db->get_where('language' , array('phrase' => $phrase));
			$row   	=	$query->row();	
			
			// return the current sessioned language field of according phrase, else return uppercase spaced word
			if (isset($row->$current_language) && $row->$current_language !="")
				return $row->$current_language;
			else 
				return ucwords(str_replace('_',' ',$phrase));
			*/
	}
}

// ------------------------------------------------------------------------
/* End of file language_helper.php */
/* Location: ./system/helpers/language_helper.php */