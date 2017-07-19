<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Render {

	protected $CI;

	public function __construct()
	{
		$this->CI = &get_instance();
	}

	public function page($params=null)
	{
		if(empty($params) OR empty($params['page']))
		{
			redirect('error/404');
			return;
		}

		// if required parameters do not exist then set as NULL
		$_required_params = array('view_params','js_paths');
		foreach ($_required_params as $key)
		{
			if(empty($params[$key]))
			{
				$params[$key] = null;	
			}
		}

		$_page_parts = array(
				'header' 	 => null,
				'body'   	 => null,
				'footer' 	 => null,
				'js'	 	 => null,
				'body_class' => empty($params['body_class'])?'':$params['body_class'],
			);

		// load header <head>
		if(file_exists(views_path("page_builder/header.php")))
		{
			$_page_parts['header'] = $this->CI->load->view('page_builder/header',$params['view_params'],true);
		}

		// load js files
		if(file_exists(views_path("includes/js_files.php")))
		{
			$_js_params = array_merge($params['view_params'],array('js_paths'=>$params['js_paths']));
			$_page_parts['js'] = $this->CI->load->view('includes/js_files',$_js_params,true);
		}

		// load footer <footer>
		if(file_exists(views_path("page_builder/footer.php")))
		{
			$_page_parts['footer'] = $this->CI->load->view('page_builder/footer',$params['view_params'],true);
		}

		// determine first the actual view format/layout
		switch ($params['page'])
		{				
			default:
				if(file_exists(views_path("{$params['page']}.php")))
				{
					// load actual view
					$_page_parts['body'] = $this->CI->load->view("{$params['page']}",$params['view_params'],true);
				}
				else
				{
					// show failed msg
					$this->CI->load->view('failed',array('view_name'=>$params['page']));
					return;
				}
				break;
		}


		// load page to contain everything
		if(file_exists(views_path("page_builder/body.php")))
		{
			$this->CI->load->view('page_builder/body',$_page_parts);
		}
		else
		{
			// show failed msg
			$this->CI->load->view('failed',array('view_name'=>$params['page']));
			return;
		}
	}
}