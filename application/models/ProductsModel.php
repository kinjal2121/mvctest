<?php
class ProductsModel extends CI_Model
{
	function productsList()
	{
		$this->db->select("*");
		$this->db->from("products");
		$this->db->where('status ', 'ACTIVE');
		$q = $this->db->get();
		return $q->result();
	}
	
	function saveProduct()
	{
		$data = array(
			'name' 			=> $this->input->post('name'),
			'type' 			=> $this->input->post('type'),
			'options_type' 	=> $this->input->post('options_type'),
			'cost' 		=> $this->input->post('cost'),
			'option_hours' 		=> $this->input->post('option_hours'),
			'shopping_site_content' 		=> $this->input->post('shopping_site_content'),
			'tech_talk' 		=> $this->input->post('tech_talk'),
		);
		return $this->db->insert('products', $data);
	}

	function updateProduct($id)
	{
		$name = $this->input->post('name');
		$type = $this->input->post('type');
		$options_type = $this->input->post('options_type');
		$cost = $this->input->post('cost');
		$option_hours = $this->input->post('option_hours');
		$shopping_site_content = $this->input->post('shopping_site_content');
		$tech_talk = $this->input->post('tech_talk');

		$this->db->set('name', $name);
		$this->db->set('type', $type);
		$this->db->set('options_type', $options_type);
		$this->db->set('cost', $cost);
		$this->db->set('option_hours', $option_hours);
		$this->db->set('shopping_site_content', $shopping_site_content);
		$this->db->set('tech_talk', $tech_talk);
		$this->db->where('id', $id);
		$result = $this->db->update('products');
		return $result;
	}

	function deleteProduct($id)
	{
		$this->db->set('status', 'INACTIVE');
		$this->db->where('id', $id);
		return $this->db->update('products');
	}
	
	function activeProduct($id)
	{
		$this->db->set('status', 'ACTIVE');
		$this->db->where('id', $id);
		return $this->db->update('products');
	}
	

	function productsInfo($id)
	{
		$this->db->select("*");
		$this->db->from("products");
		$this->db->where('id ', $id);
		$q = $this->db->get();
		return $q->row();
	}

	function productsListInactive()
	{
		$this->db->select("*");
		$this->db->from("products");
		$this->db->where('status ', 'INACTIVE');
		$q = $this->db->get();
		return $q->result();
	}
}
