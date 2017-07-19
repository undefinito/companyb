<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller{

	private $page_config;

	public function __construct()
	{
		parent::__construct();
		$this->page_config = $this->config->item('page_render_params');
		$this->load->library('render');
	}

	public function index()
	{
		$this->page_config['default']['view_params'] = [
				'current_page' => 'home'
			];
		$this->render->page($this->page_config['default']);
	}

	public function getByID($id=null)
	{
		if( ! $this->input->is_ajax_request())
		{
			redirect('error/404','location');
			return;
		}

		if(empty($id))
		{
			echo json_encode(['error'=>1,'msg'=>'ID not found']);
			return;
		}

		// load model
		$this->load->model('product_model','prod');

		$item_data = $this->prod->getOne($id);
		if(empty($item_data) OR ! is_array($item_data))
		{
			echo json_encode(['error'=>1,'msg'=>'Item not found']);
			return;
		}

		$frag_data = array(
				'item' => $item_data,
				'src'  => asset_url("img/products/lg/{$item_data['image']}"),
			);
		// render fragment
		$html = $this->load->view('fragments/thumb_html',$frag_data,true);

		$response = array(
				'id' 	=> $id,
				'html'  => $html,
			);
		echo json_encode($response);
	}

	public function getProducts($category=null,$limit=4,$offset=0)
	{
		if( ! $this->input->is_ajax_request())
		{
			redirect('error/404','location');
			return;
		}

		$category = is_string($category) ? strtoupper($category) : null;


		switch ($category)
		{
			case 'SEARCH':
			case 'ALL':
			case 'M':
			case 'F':
			case 'C':
				// search term if for searching
				$search_term = $this->input->post('term');
				// load model
				$this->load->model('product_model','prod');
				// get products data
				$products = $this->prod->getSome($category,$limit,$offset,$search_term);
				// count products
				$prod_count = $this->prod->count($category,$search_term);

				// get html response or just data
				$get_html = $this->input->post('html') === 'true';

				if ($get_html===true)
				{
					$html = empty($products) ? '<span class="label label-danger center-block">No items found</span>'
								: $this->load->view('fragments/products_html',array('products' => empty($products) ? array() : $products),true);

					$response = array(
							'html' => empty($html) ? '' : $html,
						);
				}
				else
				{
					$response = array(
							'data' 		=> empty($products) ? array() : $products,
							'category'  => $category,
						);
				}

				$response['category'] = $category;

				$response['total'] = @intval($prod_count);
				$response['limit'] = @intval($limit);
				$response['offset'] = @intval($offset);
				$response['next_offset'] = @intval($offset) + @intval($limit);

				// if there are previous items
				$response['more_prev'] = $response['offset'] > 0;
				// if there are next items
				$response['more_next'] = $response['total'] - $response['next_offset'] >= 0;
				echo json_encode($response);
				return;
			

			default:
				redirect('error/404','location');
				return;
		}
	}
}
