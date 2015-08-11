<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_cart extends CI_Controller {
  
  function __construct()
  {
    parent::__construct();
	$this->load->helper('form');
	$this->load->helper('url');
    $this->load->library('cart');
	//$this->cart->destroy();
  }  
  
	public function index()
	{
	// Assuming this is the products from our database
		$data['products'] = array(
               array(
                       'id'      => 'sku_888',
                       'qty'     => 1,
                       'price'   => 39.95,
                       'name'    => 'T-Shirt'
                       
                    ),
               array(
                       'id'      => 'sku_777',
                       'qty'     => 1,
                       'price'   => 9.95,
                       'name'    => 'Coffee Mug'
                    ),
               array(
                       'id'      => 'sku_666',
                       'qty'     => 1,
                       'price'   => 29.95,
                       'name'    => 'Shot Glass'
                    )
            );
	
	// Insert the product to cart
	if ($this->input->get('id') != '')
	{
		for($i = 0;$i < 3;$i++)
		{
			$exist = 0;
			if($data["products"][$i]["id"] == $this->input->get('id'))
			{
				foreach($this->cart->contents() as $item):
					if($item["id"] == $data["products"][$i]["id"])
					{
						$exist = 1;
						break;
					}						
				endforeach;
				if($exist == 0) $this->cart->insert($data["products"][$i]);
			}
		}
	}
	
	// Lets update our cart
	if ($this->input->post('update_cart'))
	{
		unset($_POST['update_cart']);
		$contents = $this->input->post();
		
		foreach ($contents as $content)
		{
			$info = array(
				'rowid' => $content['rowid'],
				'qty'   => $content['qty']
			 );
			$this->cart->update($info);
		}
	}
    
	  $this->load->view('v_cart', $data);
	}
    
}