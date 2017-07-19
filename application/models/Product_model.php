<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model{

	private $pm;

	public function __construct()
	{
		parent::__construct();
		$this->pm = $this->load->database('default',true);
	}

	/**
	 * getAll - get all products
	 * @param  string $type
	 * @return array
	 */
	public function getAll($type=null)
	{
		if(empty($type))
		{
			$result = $this->pm->get('product'); 
		}
		else if(is_string($type))
		{
			$result = $this->pm->get_where('product',['category'=>$type]);
		}
		else
		{
			return false;
		}
		return $result->result_array();
	}

	/**
	 * getSome - get products data
	 * @param  string   $type
	 * @param  int 	 	$limit
	 * @param  int 		$offset
	 * @param  int 		$term
	 * @return array
	 */
	public function getSome($type=null,$limit=4,$offset=0,$term=null)
	{
		$type = strtolower($type)=='all' ? null : $type;

		$this->pm->limit(@intval($limit));
		$this->pm->offset(@intval($offset));
		
		if(empty($type))
		{
			$result = $this->pm->get('product'); 
		}
		else if(is_string($type) && strtolower($type) !== 'search')
		{
			$result = $this->pm->get_where('product',['category'=>$type]);
		}
		else if(is_string($type) && is_string($term) && strtolower($type) === 'search')
		{
			$this->pm->like('LOWER(name)',strtolower($term),'both',false); 
			$result = $this->pm->get('product'); 
		}
		else
		{
			return false;
		}
		return $result->result_array();
	}

	/**
	 * count - count products depending on type
	 * @param  string $type
	 * @param  string $term
	 * @return int
	 */
	public function count($type=null,$term=null)
	{
		$type = strtolower($type)=='all' ? null : $type;
		
		$this->pm->select('COUNT(*) c'); 
		$this->pm->from('product'); 

		if(is_string($type) && strtolower($type) !== 'search')
		{
			$this->pm->where('category',$type); 
		}
		else if(is_string($term))
		{
			$this->pm->like('LOWER(name)',strtolower($term),'both',false); 
		}

		$result = $this->pm->get(); 

		$data = $result->row_array();
		return empty($data['c']) ? 0 : @intval($data['c']);
	}

	/**
	 * getOne - get data of a single item
	 * @param  int $id
	 * @return array
	 */
	public function getOne($id=null)
	{
		if(empty(@intval($id)))
		{
			return false;
		}

		$result = $this->pm->get_where('product',['id'=>@intval($id)]);
		return $result->row_array();
	}
}