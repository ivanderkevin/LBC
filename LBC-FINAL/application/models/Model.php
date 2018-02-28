<?php
	defined('BASEPATH') OR exit ('No direct script access allowed');

	class Model extends CI_Model{
		public function getBanner()
		{
			$this->db->select('id, image');
			$this->db->order_by('id', 'DESC');
			$this->db->limit(1); 
			return $query = $this->db->get('banner');
		}

		public function getEventKiri()
		{
			$this->db->select('id, image');
			$this->db->order_by('id', 'DESC');
			$this->db->limit(1);
			return $query = $this->db->get('event_kiri');
		}

		public function getEventKanan()
		{
			$this->db->select('id, image');
			$this->db->order_by('id', 'DESC');
			$this->db->limit(1);
			return $query = $this->db->get('event_kanan');
		}

		public function getEventTengah()
		{
			$this->db->select('id, image');
			$this->db->order_by('id', 'DESC');
			$this->db->limit(1);
			return $query = $this->db->get('event_tengah');
		}

		public function getUpcomingEvent()
		{
			$this->db->select('id, image');
			$this->db->order_by('id', 'DESC');
			$this->db->limit(1);
			return $query = $this->db->get('upcoming_event');
		}

		public function getPopularProduct()
		{
			$this->db->select('id, image');
			$this->db->order_by('id', 'DESC');
			$this->db->limit(4);
			return $query = $this->db->get('popular_product');
		}

		public function getProductGift()
		{
			$this->db->select('id, categories, image');
			$this->db->order_by('categories', 'ASC');
			return $query = $this->db->get('product_gift');
		}

		public function getProductGiftPrice()
		{
			$this->db->select('id, type, gram, size, quantity, description, bonus, price');
			return $query = $this->db->get('product_gift_price');
		}

		public function getProductWedding()
		{
			$this->db->select('id, image');
			return $query = $this->db->get('product_wedding');
		}

		public function getProductWeddingDescription()
		{
			$this->db->select('id, description, contact');
			$this->db->limit(1);
			return $query = $this->db->get('product_wedding_description');
		}

		public function getProductCompany()
		{
			$this->db->select('id, image');
			return $query = $this->db->get('product_company');
		}

		public function getProductCompanyDescription()
		{
			$this->db->select('id, description, contact');
			$this->db->limit(1);
			return $query = $this->db->get('product_company_description');
		}

		public function getMixMatchLetter()
		{
			$this->db->select('id, image');
			return $query = $this->db->get('mixmatch_letter');
		}

		public function getMixMatchIcon()
		{
			$this->db->select('id, image');
			return $query = $this->db->get('mixmatch_icon');
		}

		public function getMixMatchEvent()
		{
			$this->db->select('id, image');
			return $query = $this->db->get('mixmatch_event');
		}

		public function checkUser($username)
		{
			$this->db->select('username, password');			
			$this->db->where('username', $username);
			return $query = $this->db->get('users');
		}

		public function checkUser2()
		{
			$this->db->select('username, password');
			$this->db->limit(1);
			return $query = $this->db->get('users');
		}

		public function addNewsletter($email)
		{

			$data = array(
					'email' => $email);

			$this->db->insert('newsletter', $data);
		}

		public function getNewsletter()
		{
			$this->db->select('email');
			return $query = $this->db->get('newsletter');
		}


		/*public functionUser($username, $password, $name, $email, $phone_number)
		{
			$hashAndSalt = password_hash($password, PASSWORD_BCRYPT);

			$data = array(
					'username' => $username,
					'password' => $hashAndSalt,
					'name' => $name,
					'email' => $email,
					'phone_number' => $phone_number);

			$this->db->insert('users', $data);
		}

		public function editUser($user, $password, $name, $email, $phone_number)
		{
			$hashAndSalt = password_hash($password, PASSWORD_BCRYPT);

			$data = array(
					'password' => $hashAndSalt,
					'name' => $name,
					'email' => $email,
					'phone_number' => $phone_number);

			$this->db->where('username', $user);
			$this->db->update('users', $data); 
		}


		public function checkUser($username)
		{
			$this->db->select('username, password');			
			$this->db->where('username', $username);
			return $query = $this->db->get('users');
		}

		public function getUser($username)
		{
			$this->db->select('username, password, name, email, phone_number');			
			$this->db->where('username', $username);
			return $query = $this->db->get('users');
		}

		public function getShoesIndex()
		{
			$this->db->select('id, type, condition, name, brand, size, gender, color, thumbnails, image_right, quantity, price');
			$this->db->order_by('id', 'DESC');
			$this->db->limit(6); 
			return $query = $this->db->get('items');
		}

		public function getShoesSingle($id)
		{
			$this->db->select('id, type, condition, name, brand, size, gender, color, image_right, image_left, image_bottom, image_upper, image_back, image_front, quantity, price');			
			$this->db->where('id', $id);
			return $query = $this->db->get('items');
		}

		public function getSlideShow()
		{
			$this->db->select('id, image');
			$this->db->order_by('id', 'DESC');
			return $query = $this->db->get('slideshow');
		}

		public function getBrands()
		{
			$this->db->select('brand');
			$this->db->order_by('brand', 'ASC');
			return $query = $this->db->get('items_brand');
		}
		
		public function getItemsPerBrands($brand)
		{
			$this->db->select('id, type, condition, name, brand, size, gender, color, thumbnails, image_right, quantity, price');
			$this->db->where('brand', $brand);
			return $query = $this->db->get('items');
		}

		public function getItemsPerBrand($brand, $num, $offset)
		{
			$this->db->select('id, type, condition, name, brand, size, gender, color, thumbnails, image_right, quantity, price');
			$this->db->where('brand', $brand);
			return $query = $this->db->get('items', $num, $offset);
		}

		public function getSearchs($search)
		{
			$this->db->select('id, type, condition, name, brand, size, gender, color, thumbnails, image_right, quantity, price');
			$where = "name like '%".$search."%'";
			$this->db->where($where);
			return $query = $this->db->get('items');
		}

		public function getSearch($search, $num, $offset)
		{
			$this->db->select('id, type, condition, name, brand, size, gender, color, thumbnails, image_right, quantity, price');
			$where = "name like '%".$search."%'";
			$this->db->where($where);
			return $query = $this->db->get('items', $num, $offset);
		}

		public function getNewArrivals()
		{
			$this->db->select('id, type, condition, name, brand, size, gender, color, thumbnails, image_right, quantity, price');
			$this->db->where("date_added >= DATE_SUB(NOW(),INTERVAL 7 DAY)", NULL, FALSE);
			return $query = $this->db->get('items');
		}

		public function getNewArrival($num, $offset)
		{
			$this->db->select('id, type, condition, name, brand, size, gender, color, thumbnails, image_right, quantity, price');
			$this->db->where("date_added >= DATE_SUB(NOW(),INTERVAL 7 DAY)", NULL, FALSE);
			return $query = $this->db->get('items', $num, $offset);
		}

		public function getPreOwneds()
		{
			$this->db->select('id, type, condition, name, brand, size, gender, color, thumbnails, image_right, quantity, price');
			$this->db->where('condition', 'Pre-owned');
			return $query = $this->db->get('items');
		}

		public function getPreOwned($num, $offset)
		{
			$this->db->select('id, type, condition, name, brand, size, gender, color, thumbnails, image_right, quantity, price');
			$this->db->where('condition', 'Pre-owned');
			return $query = $this->db->get('items', $num, $offset);
		}

		public function getSneakers()
		{
			$this->db->select('id, type, condition, name, brand, size, gender, color, thumbnails, image_right, quantity, price');
			$this->db->where('type', 'Sneakers');
			return $query = $this->db->get('items');
		}

		public function getSneaker($num, $offset)
		{
			$this->db->select('id, type, condition, name, brand, size, gender, color, thumbnails, image_right, quantity, price');
			$this->db->where('type', 'Sneakers');
			return $query = $this->db->get('items', $num, $offset);
		}

		public function getSales()
		{
			$this->db->select('id, type, condition, name, brand, size, gender, color, thumbnails, image_right, quantity, price');
			$this->db->where('sale', 'Yes');
			return $query = $this->db->get('items');
		}

		public function getSale($num, $offset)
		{
			$this->db->select('id, type, condition, name, brand, size, gender, color, thumbnails, image_right, quantity, price');
			$this->db->where('sale', 'Yes');
			return $query = $this->db->get('items', $num, $offset);
		}

		public function addToCart($id, $quantity, $price, $name, $size, $color, $thumbnails, $brand)
		{
			$data = array(
		        'id'      => $id,
		        'qty'     => $quantity,
		        'price'   => $price,
		        'name'    => $name,
		        'size'    => $size,
		        'color'    => $color,
		        'thumbnails'	  => $thumbnails,
		        'brand'	  => $brand
			);

			$this->cart->insert($data);
		}

		public function updateBuy($id)
		{
			$data = array(
              		'quantity' => '-1'
              		);

			$this->db->where('id', $id);
			$this->db->update('items', $data); 
		}

		public function checkQuantity($id)
		{
			$this->db->select('quantity');			
			$this->db->where('id', $id);
			return $query = $this->db->get('items');
		}

		public function addnewsletter($email)
		{

			$data = array(
					'email' => $email);

			$this->db->insert('newsletter', $data);
		}

		public function getNewsletter()
		{
			$this->db->select('email');
			return $query = $this->db->get('newsletter');
		}

		public function addHistory($username, $history, $total, $deal)
		{
			$data = array(
		        'username'      => $username,
		        'history'     => $history,
		        'total'   => $total,
		        'deal'    => $deal
			);

			$this->db->insert('buy_history', $data);
		}*/
		
	}