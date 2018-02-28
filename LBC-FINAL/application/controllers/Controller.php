<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->model('Model');
			
		$data["upcoming_event"] = $this->Model->getUpcomingEvent();

		$data["banner"] = $this->Model->getBanner();

		$data["popular_product"] = $this->Model->getPopularProduct();

		$data["event_kiri"] = $this->Model->getEventKiri();
		$data["event_kanan"] = $this->Model->getEventKanan();
		$data["event_tengah"] = $this->Model->getEventTengah();

		$data["location"] = 'index';

		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', $data, TRUE);


		$this->load->view('page/index', $data);
	}

	public function Subscribe($location)
	{
		$this->load->model('Model');

		if ($location == 'index' && $this->form_validation->run('newsletter') == FALSE)
       	{
        	$data["upcoming_event"] = $this->Model->getUpcomingEvent();
			$data["banner"] = $this->Model->getBanner();
			$data["popular_product"] = $this->Model->getPopularProduct();
			$data["event_kiri"] = $this->Model->getEventKiri();
			$data["event_kanan"] = $this->Model->getEventKanan();
			$data["event_tengah"] = $this->Model->getEventTengah();
			$data["location"] = 'index';
			$data['style'] = $this->load->view('include/style', NULL, TRUE);
			$data['script'] = $this->load->view('include/script', NULL, TRUE);
			$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
			$data['footer'] = $this->load->view('template/footer', $data, TRUE);

			$this->load->view('page/index', $data);
        }
        else if ($location == 'product' && $this->form_validation->run('newsletter') == FALSE)
       	{
       		$data["product_gift"] = $this->Model->getProductGift();
			$data["product_gift_price"] = $this->Model->getProductGiftPrice();
			$data["product_wedding"] = $this->Model->getProductWedding();
			$data["product_wedding_description"] = $this->Model->getProductWeddingDescription();
			$data["product_company"] = $this->Model->getProductCompany();
			$data["product_company_description"] = $this->Model->getProductCompanyDescription();
			$data["location"] = 'product';
			$data['style'] = $this->load->view('include/style', NULL, TRUE);
			$data['script'] = $this->load->view('include/script', NULL, TRUE);
			$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
			$data['footer'] = $this->load->view('template/footer', $data, TRUE);
			$this->load->view('page/product', $data);
       	}
       	else if ($location == 'mixmatch' && $this->form_validation->run('newsletter') == FALSE)
       	{
       		$data["location"] = 'mixmatch';
       		$data['style'] = $this->load->view('include/style', NULL, TRUE);
			$data['script'] = $this->load->view('include/script', NULL, TRUE);
			$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
			$data['footer'] = $this->load->view('template/footer', $data, TRUE);
       		$this->load->view('page/mix---match', $data);
       	}
		else if ($location == 'boxoptions' && $this->form_validation->run('newsletter') == FALSE)
       	{
       		$data["location"] = 'boxoptions';
       		$data['style'] = $this->load->view('include/style', NULL, TRUE);
			$data['script'] = $this->load->view('include/script', NULL, TRUE);
			$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
			$data['footer'] = $this->load->view('template/footer', $data, TRUE);
       		$this->load->view('page/boxoptions', $data);
       	}
       	else if ($location == 'contactus' && $this->form_validation->run('newsletter') == FALSE)
       	{
       		$data["location"] = 'contactus';
       		$data['style'] = $this->load->view('include/style', NULL, TRUE);
			$data['script'] = $this->load->view('include/script', NULL, TRUE);
			$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
			$data['footer'] = $this->load->view('template/footer', $data, TRUE);
       		$this->load->view('page/contact-us', $data);
       	}
       	else if ($location == 'aboutus' && $this->form_validation->run('newsletter') == FALSE)
       	{
       		$data["location"] = 'aboutus';
       		$data['style'] = $this->load->view('include/style', NULL, TRUE);
			$data['script'] = $this->load->view('include/script', NULL, TRUE);
			$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
			$data['footer'] = $this->load->view('template/footer', $data, TRUE);
       		$this->load->view('page/about-us', $data);
       	}
       	else if ($location == 'faq' && $this->form_validation->run('newsletter') == FALSE)
       	{
       		$data["location"] = 'faq';
       		$data['style'] = $this->load->view('include/style', NULL, TRUE);
			$data['script'] = $this->load->view('include/script', NULL, TRUE);
			$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
			$data['footer'] = $this->load->view('template/footer', $data, TRUE);
       		$this->load->view('page/faq', $data);
       	}
        else
        {
            $email			= $this->input->post('emailnewsletter');

            $this->Model->addNewsletter($email);
			echo '<script>alert("Thankyou! Your email will receive news from our website.");document.location.href = "'.base_url("index.php/Controller").'";</script>';	
        }
	}

	public function Product()
	{
		$this->load->model('Model');

		$data["location"] = 'product';

		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', $data, TRUE);

		$data["product_gift"] = $this->Model->getProductGift();
		$data["product_gift_price"] = $this->Model->getProductGiftPrice();

		$data["product_wedding"] = $this->Model->getProductWedding();
		$data["product_wedding_description"] = $this->Model->getProductWeddingDescription();

		$data["product_company"] = $this->Model->getProductCompany();
		$data["product_company_description"] = $this->Model->getProductCompanyDescription();

		$this->load->view('page/product', $data);
	}

	public function MixMatch()
	{
		$data["location"] = 'mixmatch';

		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', $data, TRUE);

		$this->load->view('page/mix---match', $data);
	}

	public function boxoptions()
	{
		$data["location"] = 'boxoptions';

		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', $data, TRUE);

		$this->load->view('page/boxoptions', $data);
	}

	public function MixMatch2x2()
	{
		$this->load->model('Model');

		$data["location"] = 'mixmatch2x2';

		$data["mixmatch_letter"] = $this->Model->getMixMatchLetter();
		$data["mixmatch_icon"] = $this->Model->getMixMatchIcon();
		$data["mixmatch_event"] = $this->Model->getMixMatchEvent();

		$this->load->view('page/mix-match-2x2', $data);
	}

	public function MixMatch3x3()
	{
		$this->load->model('Model');

		$data["location"] = 'mixmatch3x3';

		$data["mixmatch_letter"] = $this->Model->getMixMatchLetter();
		$data["mixmatch_icon"] = $this->Model->getMixMatchIcon();
		$data["mixmatch_event"] = $this->Model->getMixMatchEvent();

		$this->load->view('page/mix-match-3x3', $data);
	}

	public function MixMatch3x4()
	{
		$this->load->model('Model');

		$data["location"] = 'mixmatch3x4';

		$data["mixmatch_letter"] = $this->Model->getMixMatchLetter();
		$data["mixmatch_icon"] = $this->Model->getMixMatchIcon();
		$data["mixmatch_event"] = $this->Model->getMixMatchEvent();

		$this->load->view('page/mix-match-3x4', $data);
	}

	public function ContactUs()
	{
		$data["location"] = 'contactus';

		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', $data, TRUE);

		$this->load->view('page/contact-us', $data);
	}

	public function AboutUs()
	{
		$data["location"] = 'aboutus';

		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', $data, TRUE);

		$this->load->view('page/about-us', $data);
	}

	public function Faq()
	{
		$data["location"] = 'faq';

		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
		$data['footer'] = $this->load->view('template/footer', $data, TRUE);

		$this->load->view('page/faq', $data);
	}

	public function SentOrderEmail($location)
	{		

			if ($location == 'mixmatch2x2' && $this->form_validation->run('order1') == FALSE)
	        {
	        	//echo '<script>alert("1");document.location.href = "'.base_url("index.php/Controller/boxoptions").'";</script>';
	        	$data["location"] = 'mixmatch2x2';
	            $this->load->view('page/mix-match-2x2',$data);
	        }
	        else if ($location == 'mixmatch3x3' && $this->form_validation->run('order2') == FALSE)
	        {
	        	//echo '<script>alert("2");document.location.href = "'.base_url("index.php/Controller/boxoptions").'";</script>';
	        	$data["location"] = 'mixmatch3x3';
	            $this->load->view('page/mix-match-3x3',$data);
	        }
	        else if ($location == 'mixmatch3x4' && $this->form_validation->run('order3') == FALSE)
	        {
	        	//echo '<script>alert("3");document.location.href = "'.base_url("index.php/Controller/boxoptions").'";</script>';
	        	$data["location"] = 'mixmatch3x4';
	            $this->load->view('page/mix-match-3x4',$data);
	        }
	        else
	        {
	        	//echo '<script>alert("4");document.location.href = "'.base_url("index.php/Controller/boxoptions").'";</script>';
	        	require_once APPPATH.'libraries/swift_mailer/swift_required.php';

	        	if($location == 'mixmatch2x2'){
	        		$name			= $this->input->post('name');
					$email			= $this->input->post('email');
					$address		= $this->input->post('address');
					$phone			= $this->input->post('phone');
					$delivery		= $this->input->post('delivery');
					$deliverydate	= $this->input->post('deliverydate');
					$orderdata1		= $this->input->post('orderdata1');
					$orderdata2		= $this->input->post('orderdata2');
					$orderdata3		= $this->input->post('orderdata3');
					$orderdata4		= $this->input->post('orderdata4');

					 $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
			          ->setUsername('greetings.ambawani@gmail.com')
			          ->setPassword('ambawanihore');

			        $mailer = Swift_Mailer::newInstance($transport);   

			        $message = Swift_Message::newInstance('Pesanan oleh '.$name.' - '.$phone)
			          ->setFrom(array('greetings.ambawani@gmail.com' => 'Letterboxgift.co'))
			          //->setBody($messages, 'text/html')
			          ->setTo('michellejanicelie@gmail.com')
			          //->setTo('gegewuzhere@gmail.com')
			          ->attach(Swift_Attachment::fromPath($orderdata1)->setFilename('Atas 1 - '.$orderdata1.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata2)->setFilename('Atas 2 - '.$orderdata2.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata3)->setFilename('Bawah 1 - '.$orderdata3.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata4)->setFilename('Bawah 2 - '.$orderdata4.'.png'));

			         $message->setBody(
						'<html>' .
			                ' <head></head>' .
			                ' <body>' .
			                '<p>Nama : ' . $name .
							'<p>Email : ' . $email .
							'<p>Address : ' . $address .
							'<p>Phone : ' . $phone .
							'<p>Delivery : ' . $delivery .
							'<p>Deliverydate : ' . $deliverydate .
							'<p>2x2 - Atas 1 : ' . $orderdata1 .
							'<p>2x2 - Atas 2 : ' . $orderdata2 .
							'<p>2x2 - Bawah 1 : ' . $orderdata3 .
							'<p>2x2 - Bawah 2 : ' . $orderdata4 .
							'<p>Gambar box :  ' . '<br>' .
							'<img width="50%" src="' . $message->embed(Swift_Image::fromPath($orderdata1)) . '" alt="Image" />' .
							'<img width="50%" src="' . $message->embed(Swift_Image::fromPath($orderdata2)) . '" alt="Image" />' . '<br>' .
							'<img width="50%" src="' . $message->embed(Swift_Image::fromPath($orderdata3)) . '" alt="Image" />' .
							'<img width="50%" src="' . $message->embed(Swift_Image::fromPath($orderdata4)) . '" alt="Image" />' . '<br>' .
			                ' </body>' .
			                '</html>',
						  'text/html'
						);
	        	}
	        	else if($location == 'mixmatch3x3'){
	        		$name			= $this->input->post('name');
					$email			= $this->input->post('email');
					$address		= $this->input->post('address');
					$phone			= $this->input->post('phone');
					$delivery		= $this->input->post('delivery');
					$deliverydate	= $this->input->post('deliverydate');
					$orderdata1		= $this->input->post('orderdata1');
					$orderdata2		= $this->input->post('orderdata2');
					$orderdata3		= $this->input->post('orderdata3');
					$orderdata4		= $this->input->post('orderdata4');
					$orderdata5		= $this->input->post('orderdata5');
					$orderdata6		= $this->input->post('orderdata6');
					$orderdata7		= $this->input->post('orderdata7');
					$orderdata8		= $this->input->post('orderdata8');
					$orderdata9		= $this->input->post('orderdata9');


					 $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
			          ->setUsername('greetings.ambawani@gmail.com')
			          ->setPassword('ambawanihore');

			        $mailer = Swift_Mailer::newInstance($transport);	      

			        $message = Swift_Message::newInstance('Pesanan oleh '.$name.' - '.$phone)
			          ->setFrom(array('greetings.ambawani@gmail.com' => 'Letterboxgift.co'))
			          //->setBody($messages, 'text/html')
			          ->setTo('michellejanicelie@gmail.com')
			          //->setTo('gegewuzhere@gmail.com')
			          ->attach(Swift_Attachment::fromPath($orderdata1)->setFilename('Atas 1 - '.$orderdata1.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata2)->setFilename('Atas 2 - '.$orderdata2.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata3)->setFilename('Atas 3 - '.$orderdata3.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata4)->setFilename('Tengah 1 - '.$orderdata4.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata5)->setFilename('Tengah 2 - '.$orderdata5.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata6)->setFilename('Tengah 3 - '.$orderdata6.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata7)->setFilename('Bawah 1 - '.$orderdata7.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata8)->setFilename('Bawah 2 - '.$orderdata8.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata9)->setFilename('Bawah 3 - '.$orderdata9.'.png'));

			           $message->setBody(
						'<html>' .
			                ' <head></head>' .
			                ' <body>' .
			                '<p>Nama : ' . $name .
							'<p>Email : ' . $email .
							'<p>Address : ' . $address .
							'<p>Phone : ' . $phone .
							'<p>Delivery : ' . $delivery .
							'<p>Deliverydate : ' . $deliverydate .
							'<p>3x3 - Atas 1 : ' . $orderdata1 .
							'<p>3x3 - Atas 2 : ' . $orderdata2 .
							'<p>3x3 - Atas 3 : ' . $orderdata3 .
							'<p>3x3 - Tengah 1 : ' . $orderdata4 .
							'<p>3x3 - Tengah 2 : ' . $orderdata5 .
							'<p>3x3 - Tengah 3 : ' . $orderdata6 .
							'<p>3x3 - Bawah 1 : ' . $orderdata7 .
							'<p>3x3 - Bawah 2 : ' . $orderdata8 .
							'<p>3x3 - Bawah 3 : ' . $orderdata9 .
							'<p>Gambar box :  ' . '<br>' .
							'<img width="33%" src="' . $message->embed(Swift_Image::fromPath($orderdata1)) . '" alt="Image" />' .
							'<img width="33%" src="' . $message->embed(Swift_Image::fromPath($orderdata2)) . '" alt="Image" />' . 
							'<img width="33%" src="' . $message->embed(Swift_Image::fromPath($orderdata3)) . '" alt="Image" />' . '<br>' .
							'<img width="33%" src="' . $message->embed(Swift_Image::fromPath($orderdata4)) . '" alt="Image" />' .
							'<img width="33%" src="' . $message->embed(Swift_Image::fromPath($orderdata5)) . '" alt="Image" />' . 
							'<img width="33%" src="' . $message->embed(Swift_Image::fromPath($orderdata6)) . '" alt="Image" />' . '<br>' .
							'<img width="33%" src="' . $message->embed(Swift_Image::fromPath($orderdata7)) . '" alt="Image" />' .
							'<img width="33%" src="' . $message->embed(Swift_Image::fromPath($orderdata8)) . '" alt="Image" />' . 
							'<img width="33%" src="' . $message->embed(Swift_Image::fromPath($orderdata9)) . '" alt="Image" />' .
			                ' </body>' .
			                '</html>',
						  'text/html'
						);
	        	}
	        	else if($location == 'mixmatch3x4'){
	        		$name			= $this->input->post('name');
					$email			= $this->input->post('email');
					$address		= $this->input->post('address');
					$phone			= $this->input->post('phone');
					$delivery		= $this->input->post('delivery');
					$deliverydate	= $this->input->post('deliverydate');
					$orderdata1		= $this->input->post('orderdata1');
					$orderdata2		= $this->input->post('orderdata2');
					$orderdata3		= $this->input->post('orderdata3');
					$orderdata4		= $this->input->post('orderdata4');
					$orderdata5		= $this->input->post('orderdata5');
					$orderdata6		= $this->input->post('orderdata6');
					$orderdata7		= $this->input->post('orderdata7');
					$orderdata8		= $this->input->post('orderdata8');
					$orderdata9		= $this->input->post('orderdata9');
					$orderdata10	= $this->input->post('orderdata10');
					$orderdata11	= $this->input->post('orderdata11');
					$orderdata12	= $this->input->post('orderdata12');


					 $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
			          ->setUsername('greetings.ambawani@gmail.com')
			          ->setPassword('ambawanihore');

			        $mailer = Swift_Mailer::newInstance($transport);	       

			        $message = Swift_Message::newInstance('Pesanan oleh '.$name.' - '.$phone)
			          ->setFrom(array('greetings.ambawani@gmail.com' => 'Letterboxgift.co'))
			          //->setBody($messages, 'text/html')
			          ->setTo('michellejanicelie@gmail.com')
			          //->setTo('gegewuzhere@gmail.com')
			          ->attach(Swift_Attachment::fromPath($orderdata1)->setFilename('Atas 1 - '.$orderdata1.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata2)->setFilename('Atas 2 - '.$orderdata2.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata3)->setFilename('Atas 3 - '.$orderdata3.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata3)->setFilename('Atas 4 - '.$orderdata4.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata4)->setFilename('Tengah 1 - '.$orderdata5.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata5)->setFilename('Tengah 2 - '.$orderdata6.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata6)->setFilename('Tengah 3 - '.$orderdata7.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata6)->setFilename('Tengah 4 - '.$orderdata8.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata7)->setFilename('Bawah 1 - '.$orderdata9.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata8)->setFilename('Bawah 2 - '.$orderdata10.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata9)->setFilename('Bawah 3 - '.$orderdata11.'.png'))
			          ->attach(Swift_Attachment::fromPath($orderdata9)->setFilename('Bawah 4 - '.$orderdata12.'.png'));

			          $message->setBody(
						'<html>' .
			                ' <head></head>' .
			                ' <body>' .
			                '<p>Nama : ' . $name .
							'<p>Email : ' . $email .
							'<p>Address : ' . $address .
							'<p>Phone : ' . $phone .
							'<p>Delivery : ' . $delivery .
							'<p>Deliverydate : ' . $deliverydate .
							'<p>3x4 - Atas 1 : ' . $orderdata1 .
							'<p>3x4 - Atas 2 : ' . $orderdata2 .
							'<p>3x4 - Atas 3 : ' . $orderdata3 .
							'<p>3x4 - Atas 4 : ' . $orderdata4 .
							'<p>3x4 - Tengah 1 : ' . $orderdata5 .
							'<p>3x4 - Tengah 2 : ' . $orderdata6 .
							'<p>3x4 - Tengah 3 : ' . $orderdata7 .
							'<p>3x4 - Tengah 4 : ' . $orderdata8 .
							'<p>3x4 - Bawah 1 : ' . $orderdata9 .
							'<p>3x4 - Bawah 2 : ' . $orderdata10 .
							'<p>3x4 - Bawah 3 : ' . $orderdata11 .
							'<p>3x4 - Bawah 4 : ' . $orderdata12 .
							'<p>Gambar box :  ' . '<br>' .
							'<img width="25%" src="' . $message->embed(Swift_Image::fromPath($orderdata1)) . '" alt="Image" />' .
							'<img width="25%" src="' . $message->embed(Swift_Image::fromPath($orderdata2)) . '" alt="Image" />' . 
							'<img width="25%" src="' . $message->embed(Swift_Image::fromPath($orderdata3)) . '" alt="Image" />' .
							'<img width="25%" src="' . $message->embed(Swift_Image::fromPath($orderdata4)) . '" alt="Image" />' . '<br>' .
							'<img width="25%" src="' . $message->embed(Swift_Image::fromPath($orderdata5)) . '" alt="Image" />' . 
							'<img width="25%" src="' . $message->embed(Swift_Image::fromPath($orderdata6)) . '" alt="Image" />' .
							'<img width="25%" src="' . $message->embed(Swift_Image::fromPath($orderdata7)) . '" alt="Image" />' .
							'<img width="25%" src="' . $message->embed(Swift_Image::fromPath($orderdata8)) . '" alt="Image" />' . '<br>' . 
							'<img width="25%" src="' . $message->embed(Swift_Image::fromPath($orderdata9)) . '" alt="Image" />' .
							'<img width="25%" src="' . $message->embed(Swift_Image::fromPath($orderdata10)) . '" alt="Image" />' .
							'<img width="25%" src="' . $message->embed(Swift_Image::fromPath($orderdata11)) . '" alt="Image" />' .
							'<img width="25%" src="' . $message->embed(Swift_Image::fromPath($orderdata12)) . '" alt="Image" />' .
			                ' </body>' .
			                '</html>',
						  'text/html'
						);
	        	}
	       		
					  $result += $mailer->send($message);

			        if ($result == 1) 
			        {
			            echo '<script>alert("Your order has been sent to Letterboxgift.co! Confirmation will be sent to your email or your phone. Thankyou for your cooperation.");document.location.href = "'.base_url("index.php/Controller/boxoptions").'";</script>';
			        }
			        else{
			        	echo '<script>alert("Failed to make an order. Please try again");document.location.href = "'.base_url("index.php/Controller/boxoptions").'";</script>';
			        }
	        }   				
	}

	public function logout()
	{
		session_destroy();

		echo '<script>alert("Logout successful!");document.location.href = "'.base_url("index.php/Controller/adminBanner").'";</script>';
	}

	public function admin()
	{
		$this->load->model('Model');
		if (isset($_SESSION['username']))
		{
			echo '<script>alert("Admin already login!");document.location.href = "'.base_url("index.php/Controller/adminBanner").'";</script>';
		}
		else
		{
			if ($this->form_validation->run('signin') == FALSE)
	        {
	        	$this->load->view('page/login');
	        }
	        else
	        {
	        	$username			= $this->input->post('username');
				$password			= $this->input->post('password');

				$query = $this->Model->checkUser($username);
				$row = $query->row();
				$result = $query->num_rows();
				if($result == 0)
				{
					echo '<script>alert("Username or Password wrong!");document.location.href = "'.base_url("index.php/Controller/admin").'";</script>';
				}
				else
				{
					if (isset($row))
					{
						if (strcmp($password, $row->password) == 0)
						{
					        $_SESSION['username'] = $username;

							echo '<script>alert("Login successful!");document.location.href = "'.base_url("index.php/Controller/adminBanner").'";</script>';
						}
						else
						{
						    echo '<script>alert("Username or Password wrong!");document.location.href = "'.base_url("index.php/Controller/admin").'";</script>';
						}
						
					}
				}
				
	        }
		}
        
	}

	public function adminBanner()
	{
		if (isset($_SESSION['username']))
		{
       		$crud = new grocery_CRUD();
       		$crud->set_table('banner')
       			->columns('image')
       			->set_field_upload('image', 'assets/img')
       			->unset_add()
       			->unset_delete()
       			->display_as('image','Banner (2580x837)');
       		$output = $crud->render();
       		$data["crud"] = get_object_vars($output);

			$data["tag"] = 'Banner';

			$this->load->view('page/crud', $data);	       
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function adminEventTengah()
	{
		if (isset($_SESSION['username']))
		{
       		$crud = new grocery_CRUD();
       		$crud->set_table('event_tengah')
       			->columns('image')
       			->set_field_upload('image', 'assets/img')
       			->unset_add()
       			->unset_delete()
       			->display_as('image','Event Bawah (1102x342)');
       		$output = $crud->render();
       		$data["crud"] = get_object_vars($output);

			$data["tag"] = 'Event Bawah';

			$this->load->view('page/crud', $data);	       
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function adminEventKanan()
	{
		if (isset($_SESSION['username']))
		{
       		$crud = new grocery_CRUD();
       		$crud->set_table('event_kanan')
       			->columns('image')
       			->set_field_upload('image', 'assets/img')
       			->unset_add()
       			->unset_delete()
       			->display_as('image','Event kanan (471x515)');
       		$output = $crud->render();
       		$data["crud"] = get_object_vars($output);

			$data["tag"] = 'Event Kanan';

			$this->load->view('page/crud', $data);	       
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function adminEventKiri()
	{
		if (isset($_SESSION['username']))
		{
       		$crud = new grocery_CRUD();
       		$crud->set_table('event_kiri')
       			->columns('image')
       			->set_field_upload('image', 'assets/img')
       			->unset_add()
       			->unset_delete()
       			->display_as('image','Event kiri (801x801)');
       		$output = $crud->render();
       		$data["crud"] = get_object_vars($output);

			$data["tag"] = 'Event Kiri';

			$this->load->view('page/crud', $data);	       
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function adminPopularProduct()
	{
		if (isset($_SESSION['username']))
		{
       		$crud = new grocery_CRUD();
       		$crud->set_table('popular_product')
       			->columns('id', 'image')
       			->set_field_upload('image', 'assets/img')
       			->display_as('image','Popular product (629x629)');
       		$output = $crud->render();
       		$data["crud"] = get_object_vars($output);

			$data["tag"] = 'Popular Product';

			$this->load->view('page/crud', $data);	       
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function adminUpcomingEvent()
	{
		if (isset($_SESSION['username']))
		{
       		$crud = new grocery_CRUD();
       		$crud->set_table('upcoming_event')
       			->columns('image')
       			->set_field_upload('image', 'assets/img')
       			->unset_add()
       			->unset_delete()
       			->display_as('image','Upcoming event (2580x558)');
       		$output = $crud->render();
       		$data["crud"] = get_object_vars($output);

			$data["tag"] = 'Upcoming Event';

			$this->load->view('page/crud', $data);	       
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function adminProductGift()
	{
		if (isset($_SESSION['username']))
		{
       		$crud = new grocery_CRUD();
       		$crud->set_table('product_gift')
       			->columns('id', 'categories', 'image')
       			->set_field_upload('image', 'assets/img')
       			->display_as('image','Product gift (3264x3264)');
       		$output = $crud->render();
       		$data["crud"] = get_object_vars($output);

			$data["tag"] = 'Product Gift';

			$this->load->view('page/crud', $data);	       
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function adminProductGiftPrice()
	{
		if (isset($_SESSION['username']))
		{
       		$crud = new grocery_CRUD();
       		$crud->set_table('product_gift_price')
       			->columns('id', 'type', 'gram', 'size', 'quantity', 'description', 'bonus', 'price')
       			->display_as('bonus','Bonus (boleh tidak ada)');
       		$output = $crud->render();
       		$data["crud"] = get_object_vars($output);

			$data["tag"] = 'Product Gift Price';

			$this->load->view('page/crud', $data);	       
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function adminProductWedding()
	{
		if (isset($_SESSION['username']))
		{
       		$crud = new grocery_CRUD();
       		$crud->set_table('product_wedding')
       			->columns('id', 'image')
       			->set_field_upload('image', 'assets/img')
       			->display_as('image','Product wedding (3264x3264)');
       		$output = $crud->render();
       		$data["crud"] = get_object_vars($output);

			$data["tag"] = 'Product Wedding';

			$this->load->view('page/crud', $data);	       
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function adminProductWeddingDescription()
	{
		if (isset($_SESSION['username']))
		{
       		$crud = new grocery_CRUD();
       		$crud->set_table('product_wedding_description')
       			->unset_add()
       			->unset_delete()
       			->columns('description', 'contact');
       		$output = $crud->render();
       		$data["crud"] = get_object_vars($output);

			$data["tag"] = 'Product Wedding Description';

			$this->load->view('page/crud', $data);	       
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function adminProductCompany()
	{
		if (isset($_SESSION['username']))
		{
       		$crud = new grocery_CRUD();
       		$crud->set_table('product_company')
       			->columns('id', 'image')
       			->set_field_upload('image', 'assets/img')
       			->display_as('image','Product company (3264x3264)');
       		$output = $crud->render();
       		$data["crud"] = get_object_vars($output);

			$data["tag"] = 'Product Company';

			$this->load->view('page/crud', $data);	       
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function adminProductCompanyDescription()
	{
		if (isset($_SESSION['username']))
		{
       		$crud = new grocery_CRUD();
       		$crud->set_table('product_company_description')
       		    ->unset_add()
       			->unset_delete()
       			->columns('description', 'contact');
       		$output = $crud->render();
       		$data["crud"] = get_object_vars($output);

			$data["tag"] = 'Product Company Description';

			$this->load->view('page/crud', $data);	       
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function adminMixMatchEvent()
	{
		if (isset($_SESSION['username']))
		{
       		$crud = new grocery_CRUD();
       		$crud->set_table('mixmatch_event')
       			->columns('id', 'image')
       			->set_field_upload('image', 'assets')
       			->display_as('image','MixMatch Event (1742x1742)');
       		$output = $crud->render();
       		$data["crud"] = get_object_vars($output);

			$data["tag"] = 'MixMatch Event';

			$this->load->view('page/crud', $data);	       
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function adminMixMatchIcon()
	{
		if (isset($_SESSION['username']))
		{
       		$crud = new grocery_CRUD();
       		$crud->set_table('mixmatch_icon')
       			->columns('id', 'image')
       			->set_field_upload('image', 'assets')
       			->display_as('image','MixMatch Icon (1742x1742)');
       		$output = $crud->render();
       		$data["crud"] = get_object_vars($output);

			$data["tag"] = 'MixMatch Icon';

			$this->load->view('page/crud', $data);	       
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function adminMixMatchLetter()
	{
		if (isset($_SESSION['username']))
		{
       		$crud = new grocery_CRUD();
       		$crud->set_table('mixmatch_letter')
       			->columns('id', 'image')
       			->set_field_upload('image', 'assets')
       			->display_as('image','MixMatch Letter (1742x1742)');
       		$output = $crud->render();
       		$data["crud"] = get_object_vars($output);

			$data["tag"] = 'MixMatch Letter';

			$this->load->view('page/crud', $data);	       
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function adminUsers()
	{
		if (isset($_SESSION['username']))
		{
       		$crud = new grocery_CRUD();
       		$crud->set_table('users')
       			->unset_add()
       			->unset_delete()
       			->columns('username', 'password');
       		$output = $crud->render();
       		$data["crud"] = get_object_vars($output);

			$data["tag"] = 'Admin Username & Password';

			$this->load->view('page/crud', $data);	       
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function adminNewsletter()
	{
		if (isset($_SESSION['username']))
		{
       		$crud = new grocery_CRUD();
       		$crud->set_table('newsletter')
       			->unset_add()
       			->columns('id', 'email');
       		$output = $crud->render();
       		$data["crud"] = get_object_vars($output);

			$data["tag"] = 'Newsletter';

			$this->load->view('page/crud', $data);	       
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function sentNewsletter()
	{
		if (isset($_SESSION['username']))
		{
	       		require_once APPPATH.'libraries/swift_mailer/swift_required.php';

	       		$title			= $this->input->post('title');
				$isimessage		= $this->input->post('message');

				  $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
			          ->setUsername('greetings.ambawani@gmail.com')
			          ->setPassword('ambawanihore');

		        $mailer = Swift_Mailer::newInstance($transport);

		            $messages = 
		                '<html>' .
		                ' <head></head>' .
		                ' <body>' .
		                nl2br($isimessage) .
		                ' </body>' .
		                '</html>';
		       	       

		        $message = Swift_Message::newInstance(''.$title.'')
		          ->setFrom(array('greetings.ambawani@gmail.com' => 'Letterboxgift.co'))
		          ->setBody($messages, 'text/html');

		        $this->load->model('Model');
		       	$query = $this->Model->getNewsletter();
		       	$failedRecipients = array();
		       	$numSent = 0;
		       	$failedString = "";

		        foreach ($query->result() as $line)
				{
				    $message->setTo($line->email);
					$numSent += $mailer->send($message, $failedRecipients);
				}

				echo '<script>alert("'.$numSent.' email sent.");</script>';

				foreach ($failedRecipients as $failed)
				{
					$failedString .= $failed . ", ";
				}

				echo '<script>alert("Failed to sent to : '.$failedString.'");document.location.href = "'.base_url("index.php/Controller/adminNewsletter").'";</script>';
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}
	}

	public function sentContactUs()
	{
		if ($this->form_validation->run('contactus') == FALSE)
       	{
       		$data["location"] = 'contactus';
       		$data['style'] = $this->load->view('include/style', NULL, TRUE);
			$data['script'] = $this->load->view('include/script', NULL, TRUE);
			$data['navbar'] = $this->load->view('template/navbar', NULL, TRUE);
			$data['footer'] = $this->load->view('template/footer', $data, TRUE);
       		$this->load->view('page/contact-us', $data);
       	}
       	else
       	{
       		require_once APPPATH.'libraries/swift_mailer/swift_required.php';

       		$name			= $this->input->post('name');
       		$email			= $this->input->post('email');
			$message		= $this->input->post('message');

			  $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
		          ->setUsername('greetings.ambawani@gmail.com')
		          ->setPassword('ambawanihore');

	        $mailer = Swift_Mailer::newInstance($transport);

	            $messages = 
	                '<html>' .
	                ' <head></head>' .
	                ' <body>' .
	                '<p>Name : ' . $name .
					'<p>Email : ' . $email .
					'<p>Message : <p>' . nl2br($message).
	                ' </body>' .
	                '</html>';
	       	       

	        $message = Swift_Message::newInstance('Letterbox - ContactUs - by '.$name.'')
	          ->setFrom(array('greetings.ambawani@gmail.com' => 'Letterboxgift.co'))
	          ->setTo('michellejanicelie@gmail.com')
	          //->setTo('gegewuzhere@gmail.com')
	          ->setBody($messages, 'text/html');

	          $result += $mailer->send($message);

			        if ($result == 1) 
			        {
			            echo '<script>alert("Your request has been sent to Letterboxgift.co! Next information will be sent to your email as soon as possible. Thankyou for your cooperation.");document.location.href = "'.base_url("index.php/Controller/ContactUs").'";</script>';
			        }
			        else{
			        	echo '<script>alert("Failed to send a request. Please try again");document.location.href = "'.base_url("index.php/Controller/ContactUs").'";</script>';
			        }
       	}
	       		
	}


	/*public function showItems($brands, $id=NULL)
	{
		$brand = urldecode($brands);
		$this->load->model('Model');

		$query = $this->Model->getItemsPerBrands($brand);
		$jml = $query->num_rows();

		//pengaturan pagination
		 $config['base_url'] = base_url().'index.php/Controller/showItems/'.$brand;
		 $config['total_rows'] = $jml;
		 $config['per_page'] = '9';
		 $config['first_page'] = 'First';
		 $config['last_page'] = 'Last';
		 $config['next_page'] = '&laquo;';
		 $config['prev_page'] = '&raquo;';

		 $config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";

		 $this->pagination->initialize($config);

		 $data['halaman'] = $this->pagination->create_links();

		$data["results"] = $this->Model->getItemsPerBrand($brand, $config['per_page'], $id);

		$data["brands"] = $this->Model->getBrands();

		$data["tag"] = $brand;

		$data["location"] = 'showItems';

		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);
		
		$this->load->view('page/products', $data);
	}

	public function showNewArrivals($id=NULL)
	{
		$this->load->model('Model');

		$query = $this->Model->getNewArrivals();
		$jml = $query->num_rows();

		//pengaturan pagination
		 $config['base_url'] = base_url().'index.php/Controller/showNewArrivals';
		 $config['total_rows'] = $jml;
		 $config['per_page'] = '9';
		 $config['first_page'] = 'First';
		 $config['last_page'] = 'Last';
		 $config['next_page'] = '&laquo;';
		 $config['prev_page'] = '&raquo;';

		 $config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";

		 $this->pagination->initialize($config);

		 $data['halaman'] = $this->pagination->create_links();

		$data["results"] = $this->Model->getNewArrival($config['per_page'], $id);

		$data["brands"] = $this->Model->getBrands();

		$data["tag"] = 'New Arrivals';

		$data["location"] = 'showNewArrivals';

		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);
		
		$this->load->view('page/products', $data);
	}

	public function showPreOwneds($id=NULL)
	{
		$this->load->model('Model');

		$query = $this->Model->getPreOwneds();
		$jml = $query->num_rows();

		//pengaturan pagination
		 $config['base_url'] = base_url().'index.php/Controller/showPreOwneds';
		 $config['total_rows'] = $jml;
		 $config['per_page'] = '9';
		 $config['first_page'] = 'First';
		 $config['last_page'] = 'Last';
		 $config['next_page'] = '&laquo;';
		 $config['prev_page'] = '&raquo;';

		 $config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";

		 $this->pagination->initialize($config);

		 $data['halaman'] = $this->pagination->create_links();

		$data["results"] = $this->Model->getPreOwned($config['per_page'], $id);

		$data["brands"] = $this->Model->getBrands();

		$data["tag"] = 'Pre-Owned';

		$data["location"] = 'showPreOwneds';

		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);
		
		$this->load->view('page/products', $data);
	}

	public function showSneakers($id=NULL)
	{
		$this->load->model('Model');

		$query = $this->Model->getSneakers();
		$jml = $query->num_rows();

		//pengaturan pagination
		 $config['base_url'] = base_url().'index.php/Controller/showSneakers';
		 $config['total_rows'] = $jml;
		 $config['per_page'] = '9';
		 $config['first_page'] = 'First';
		 $config['last_page'] = 'Last';
		 $config['next_page'] = '&laquo;';
		 $config['prev_page'] = '&raquo;';

		 $config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";

		 $this->pagination->initialize($config);

		 $data['halaman'] = $this->pagination->create_links();

		$data["results"] = $this->Model->getSneaker($config['per_page'], $id);

		$data["brands"] = $this->Model->getBrands();

		$data["tag"] = 'Sneakers';

		$data["location"] = 'showSneakers';

		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);
		
		$this->load->view('page/products', $data);
	}

	public function showSales($id=NULL)
	{
		$this->load->model('Model');

		$query = $this->Model->getSales();
		$jml = $query->num_rows();

		//pengaturan pagination
		 $config['base_url'] = base_url().'index.php/Controller/showSales';
		 $config['total_rows'] = $jml;
		 $config['per_page'] = '9';
		 $config['first_page'] = 'First';
		 $config['last_page'] = 'Last';
		 $config['next_page'] = '&laquo;';
		 $config['prev_page'] = '&raquo;';

		 $config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";

		 $this->pagination->initialize($config);

		 $data['halaman'] = $this->pagination->create_links();

		$data["results"] = $this->Model->getSale($config['per_page'], $id);

		$data["brands"] = $this->Model->getBrands();

		$data["tag"] = 'Sales';

		$data["location"] = 'showSales';

		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);
		
		$this->load->view('page/products', $data);
	}

	public function filterSearch()
	{
		$this->load->model('Model');

		$data["brands"] = $this->Model->getBrands();

		$data["tag"] = 'Search';

		$data["location"] = 'filterSearch';
		
		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);

		if ($this->form_validation->run('search') == FALSE)
        {
            $this->load->view('page/products',$data);
        }
        else
        {
            $search			= $this->input->post('search');
			echo '<script>document.location.href = "'.base_url("index.php/Controller/showSearch/$search").'";</script>';	
        }
	}

	public function showSearch($searchs, $id=NULL)
	{
		$search = urldecode($searchs);
		if (!preg_match("/^[a-zA-Z ]*$/",$search))
		{
      		echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
    	}
    	else
    	{
    		
			$this->load->model('Model');

			$query = $this->Model->getSearchs($search);
			$jml = $query->num_rows();

			//pengaturan pagination
			 $config['base_url'] = base_url().'index.php/Controller/showSearch/'.$search;
			 $config['total_rows'] = $jml;
			 $config['per_page'] = '9';
			 $config['first_page'] = 'First';
			 $config['last_page'] = 'Last';
			 $config['next_page'] = '&laquo;';
			 $config['prev_page'] = '&raquo;';

			 $config['full_tag_open'] = "<ul class='pagination'>";
			$config['full_tag_close'] ="</ul>";
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
			$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			$config['next_tag_open'] = "<li>";
			$config['next_tagl_close'] = "</li>";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tagl_close'] = "</li>";
			$config['first_tag_open'] = "<li>";
			$config['first_tagl_close'] = "</li>";
			$config['last_tag_open'] = "<li>";
			$config['last_tagl_close'] = "</li>";

			 $this->pagination->initialize($config);

			 $data['halaman'] = $this->pagination->create_links();

			$data["results"] = $this->Model->getSearch($search, $config['per_page'], $id);

			$data["brands"] = $this->Model->getBrands();

			$data["tag"] = $search;

			$data["location"] = 'showSearch';

			$data['style'] = $this->load->view('include/style', NULL, TRUE);
			$data['script'] = $this->load->view('include/script', NULL, TRUE);
			$data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
			$data['footer'] = $this->load->view('template/footer', NULL, TRUE);
			
			$this->load->view('page/products', $data);
    	}
	}

	public function showSingle($id, $locations, $tags)
	{
		$location = urldecode($locations);
		$tag = urldecode($tags);

		$this->load->model('Model');
		$data["results"] = $this->Model->getShoesSingle($id);

		$data["brands"] = $this->Model->getBrands();

		$data["tag"] = $tag;

		$data["location"] = $location;

		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);
		
		$this->load->view('page/single', $data);
	}

	public function showTC()
	{
		$this->load->model('Model');

		$data["brands"] = $this->Model->getBrands();

		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);
		
		$this->load->view('page/termcondition', $data);
	}

	public function showRegisterPage()
	{
        $this->load->model('Model');

        $data["brands"] = $this->Model->getBrands();
        
        $data['style'] = $this->load->view('include/style', NULL, TRUE);
        $data['script'] = $this->load->view('include/script', NULL, TRUE);
        $data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
        $data['footer'] = $this->load->view('template/footer', NULL, TRUE);

        if ($this->form_validation->run('signup') == FALSE)
        {
            $this->load->view('page/register',$data);
        }
        else
        {
            $username			= $this->input->post('username');
			$password			= $this->input->post('password');
			$reenterpassword	= $this->input->post('reenterpassword');
			$name				= $this->input->post('name');
			$email				= $this->input->post('email');
			$phone_number		= $this->input->post('phone_number');

			$this->Model->addUser($username, $password, $name, $email, $phone_number);
			echo '<script>alert("User Registered!");document.location.href = "'.base_url("index.php/Controller/showRegisterPage").'";</script>';	
        }
	}

	public function showContact()
	{
        $this->load->model('Model');

        $data["brands"] = $this->Model->getBrands();
        
        $data['style'] = $this->load->view('include/style', NULL, TRUE);
        $data['script'] = $this->load->view('include/script', NULL, TRUE);
        $data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
        $data['footer'] = $this->load->view('template/footer', NULL, TRUE);

        if ($this->form_validation->run('contact') == FALSE)
        {
            $this->load->view('page/contact',$data);
        }
        else
        {
			$name				= $this->input->post('name');
			$email				= $this->input->post('email');
			$isimessage			= $this->input->post('message');

			echo '<script>alert("'.$isimessage.'");document.location.href = "'.base_url("index.php/Controller/showContact").'";</script>';	
        }
	}

	public function showEditPage($user)
	{
		if (isset($_SESSION['username']))
        {
           $salt = 'S;LDKFSDKVPVKSKOpskfkmsdvopkskm123012-9v;v;[].,/-=-=9324fhdfajc';
           $key = substr(hash('sha256', $salt."jeremyANJINGjulio12348765".$salt), 0, 32);
           $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
           $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
           $decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($_SESSION['username']), MCRYPT_MODE_ECB, $iv);
           $decrypted = rtrim($decrypted, "\0");

           $username = $decrypted;

           if($username != $user)
           {
           		echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
           }
           else
           {
           		$this->load->model('Model');

		        $data["brands"] = $this->Model->getBrands();
		        
		        $data['style'] = $this->load->view('include/style', NULL, TRUE);
		        $data['script'] = $this->load->view('include/script', NULL, TRUE);
		        $data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
		        $data['footer'] = $this->load->view('template/footer', NULL, TRUE);

		        $data["users"] = $this->Model->getUser($user);

		         if ($this->form_validation->run('edit') == FALSE)
		        {
		            $this->load->view('page/edit',$data);
		        }
		        else
		        {
					$password			= $this->input->post('password');
					$reenterpassword	= $this->input->post('reenterpassword');
					$name				= $this->input->post('name');
					$email				= $this->input->post('email');
					$phone_number		= $this->input->post('phone_number');

					$this->Model->editUser($user, $password, $name, $email, $phone_number);
					echo '<script>alert("User data updated!");document.location.href = "'.base_url("index.php/Controller").'";</script>';	
		        }
           }
        }
        else
        {
        	echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
        }
	}

	public function showLoginPage()
	{
		$this->load->model('Model');

        $data["brands"] = $this->Model->getBrands();
        
        $data['style'] = $this->load->view('include/style', NULL, TRUE);
        $data['script'] = $this->load->view('include/script', NULL, TRUE);
        $data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
        $data['footer'] = $this->load->view('template/footer', NULL, TRUE);

        if ($this->form_validation->run('signin') == FALSE)
        {
        	$this->load->view('page/signup',$data);
        }
        else
        {
        	$username			= $this->input->post('username');
			$password			= $this->input->post('password');

			$query = $this->Model->checkUser($username);
			$row = $query->row();
			if (isset($row))
			{
				if (password_verify($password, $row->password))
				{
					$salt = 'S;LDKFSDKVPVKSKOpskfkmsdvopkskm123012-9v;v;[].,/-=-=9324fhdfajc';
					$key2 = substr(hash('sha256', $salt."jeremyANJINGjulio12348765".$salt), 0, 32);
					$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
					$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
					$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key2, $row->username, MCRYPT_MODE_ECB, $iv));

			        $_SESSION['username'] = $encrypted;

					echo '<script>alert("Login sucessfull!");document.location.href = "'.base_url("index.php/Controller").'";</script>';
				}
			}
        }
	}

	public function logout()
	{
		session_destroy();

		$this->cart->destroy();

		$this->load->model('Model');
			
		$data["results"] = $this->Model->getShoesIndex();

		$data["slideshow"] = $this->Model->getSlideShow();

		$data["brands"] = $this->Model->getBrands();
		
		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['script'] = $this->load->view('include/script', NULL, TRUE);
		$data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
		$data['footer'] = $this->load->view('template/footer', NULL, TRUE);

		redirect($this->load->view('page/index', $data));
	}

	public function addCart($location, $tag, $id, $quantity, $price, $name, $size, $color, $image_right, $brand)
	{
		if ($location == 'showItems')
        {
        	$location = $location.'/'.$tag;
        }
        else if ($location == 'showSearch')
        {
            $location = $location.'/'.$tag;
        }

		$flag = 0;
		foreach ($this->cart->contents() as $items)
		{
			if($items['id'] == $id) $flag = 1;
			else $flag = 0;
		}

		if($flag == 0)
		{
			$this->load->model('Model');
			$query = $this->Model->checkQuantity($id);
			$row = $query->row();
			if (isset($row))
			{
				if($row->quantity == -1 || $row->quantity == 0)
				{
					echo '<script>alert("You cannot add this item to cart because the items have been sold or booked");document.location.href = "'.base_url("index.php/Controller/$location").'";</script>';
				}
				else
				{
					$name2 = urldecode($name);
					$color2 = urldecode($color);
					$image_right2 = urldecode($image_right);
					$brand2 = urldecode($brand);
					$size2 = urldecode($size);

					if ($location == 'showItems') $location = 'showItems/'.$brand;
					else if ($location == 'showSingle') $location = 'showSingle/'.$id;

					$this->load->model('Model');

					$data["brands"] = $this->Model->getBrands();
					
					$data['style'] = $this->load->view('include/style', NULL, TRUE);
					$data['script'] = $this->load->view('include/script', NULL, TRUE);
					$data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
					$data['footer'] = $this->load->view('template/footer', NULL, TRUE);

					if (isset($_SESSION['username']))
					{
						$counter = $this->cart->total_items();

						if ($counter < 20)
						{
							$this->Model->addToCart($id, $quantity, $price, $name2, $size2, $color2, $image_right2, $brand2);

							echo '<script>alert("'.$name2.' added to cart!");document.location.href = "'.base_url("index.php/Controller/$location").'";</script>';
						}
						else
						{
							echo '<script>alert("Your cart is full, already have 20 items!");document.location.href = "'.base_url("index.php/Controller/$location").'";</script>';
						}
					}
					else
					{
						echo '<script>alert("You must login first!");document.location.href = "'.base_url("index.php/Controller/showLoginPage").'";</script>';
					}
				}			
			}
		}
		else
		{
			echo '<script>alert("This item has already in your cart!");document.location.href = "'.base_url("index.php/Controller/$location").'";</script>';
		}
	}

	public function addCart2($location, $location2, $tag, $id, $quantity, $price, $name, $size, $color, $image_right, $brand)
	{

        if ($location == 'showSingle')
        {
        	$location = $location.'/'.$id.'/'.$location2.'/'.$tag;
        }

		$flag = 0;
		foreach ($this->cart->contents() as $items)
		{
			if($items['id'] == $id) $flag = 1;
			else $flag = 0;
		}

		if($flag == 0)
		{
			$this->load->model('Model');
			$query = $this->Model->checkQuantity($id);
			$row = $query->row();
			if (isset($row))
			{
				if($row->quantity == -1 || $row->quantity == 0)
				{
					echo '<script>alert("You cannot add this item to cart because the items have been sold or booked");document.location.href = "'.base_url("index.php/Controller/$location").'";</script>';
				}
				else
				{
					$name2 = urldecode($name);
					$color2 = urldecode($color);
					$image_right2 = urldecode($image_right);
					$brand2 = urldecode($brand);
					$size2 = urldecode($size);

					if ($location == 'showItems') $location = 'showItems/'.$brand;
					else if ($location == 'showSingle') $location = 'showSingle/'.$id;

					$this->load->model('Model');

					$data["brands"] = $this->Model->getBrands();
					
					$data['style'] = $this->load->view('include/style', NULL, TRUE);
					$data['script'] = $this->load->view('include/script', NULL, TRUE);
					$data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
					$data['footer'] = $this->load->view('template/footer', NULL, TRUE);

					if (isset($_SESSION['username']))
					{
						$counter = $this->cart->total_items();

						if ($counter < 20)
						{
							$this->Model->addToCart($id, $quantity, $price, $name2, $size2, $color2, $image_right2, $brand2);

							echo '<script>alert("'.$name2.' added to cart!");document.location.href = "'.base_url("index.php/Controller/$location").'";</script>';
						}
						else
						{
							echo '<script>alert("Your cart is full, already have 20 items!");document.location.href = "'.base_url("index.php/Controller/$location").'";</script>';
						}
					}
					else
					{
						echo '<script>alert("You must login first!");document.location.href = "'.base_url("index.php/Controller/showLoginPage").'";</script>';
					}
				}			
			}
		}
		else
		{
			echo '<script>alert("This item has already in your cart!");document.location.href = "'.base_url("index.php/Controller/$location").'";</script>';
		}
	}

	public function showCartPage()
	{
		if (isset($_SESSION['username']))
		{
			$this->load->model('Model');

			$data["brands"] = $this->Model->getBrands();
			
			$data['style'] = $this->load->view('include/style', NULL, TRUE);
			$data['script'] = $this->load->view('include/script', NULL, TRUE);
			$data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
			$data['footer'] = $this->load->view('template/footer', NULL, TRUE);

			$this->load->view('page/checkout', $data);
		}
		else
		{
			echo '<script>alert("You must login first!");document.location.href = "'.base_url("index.php/Controller/showLoginPage").'";</script>';
		}
		
	}

	public function removeFromCart($rowid)
	{
		$this->cart->remove($rowid);

		echo '<script>alert("Item deleted!");document.location.href = "'.base_url("index.php/Controller/showCartPage").'";</script>';
	}

	public function buy()
	{
		if (isset($_SESSION['username']))
		{
			if($this->cart->total_items() == 0)
			{
				echo '<script>alert("Your cart is empty!");document.location.href = "'.base_url("index.php/Controller/showCartPage").'";</script>';
			}
			else
			{
				$this->load->model('Model');
				$counter = 0;
				$flag = 0;

				foreach ($this->cart->contents() as $items)
				{
					$query = $this->Model->checkQuantity($items['id']);
					$row = $query->row();
					if (isset($row))
					{
						if ($row->quantity == -1 || $row->quantity == 0)
						{
							$flag = 1;
							$name = $items['name'];
							$this->cart->remove($items['rowid']);
							echo '<script>alert("You cannot buy '.$name.' because its already sold or booked before this deal is done, item automatically removed. Please try again.");document.location.href = "'.base_url("index.php/Controller/showCartPage").'";</script>';
						}
					}
				}

				if ($flag == 0)
				{
					require_once APPPATH.'libraries/swift_mailer/swift_required.php';

					 $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
			          ->setUsername('pys.idn@gmail.com')
			          ->setPassword('YeezyGang350');

			        $mailer = Swift_Mailer::newInstance($transport);

			           $salt = 'S;LDKFSDKVPVKSKOpskfkmsdvopkskm123012-9v;v;[].,/-=-=9324fhdfajc';
			           $key = substr(hash('sha256', $salt."jeremyANJINGjulio12348765".$salt), 0, 32);
			           $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
			           $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
			           $decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($_SESSION['username']), MCRYPT_MODE_ECB, $iv);
			           $decrypted = rtrim($decrypted, "\0");

			        $username = $decrypted;

			        $query = $this->Model->getUser($username);
			        $row = $query->row();
			        if (isset($row))
			        {
			            $email_to = $row->email;
			            $list = '';
			            $counter2 = 1;
			            $history = '';
			            
			            $total = number_format($this->cart->total(),2,',','.');

			            foreach ($this->cart->contents() as $items)
			            {
			                $price = number_format($items['price'],2,',','.');
			                $list .= $counter2.'. '.$items['name'].' - '.$items['brand'].' - '.$items['size'].' - '.$items['color'].' - Rp '.$price.'<br>';
			                $counter2 = $counter2 + 1;
			                $history .= $items['id'] . ", ";
			            }

			            $messages = 
			                '<html>' .
			                ' <head></head>' .
			                ' <body>' .
			                '  To : ' . $row->name . ' - ' . $row->email . ' - ' . $row->phone_number . '<br>' .
			                '  Below is a list of items that you ordered :<br><br>' .
			                    $list . '<br>Total : Rp ' . $total . '<br><br>' .
			                '  Please transfer to this BCA Account : 8100774888 on behalf of Jeremy Julio Halim in 24 hour.<br>' .
			                '  IF you do not transfer within 24 hours, then the items you ordered will be available again for others to order. Thankyou.' .
			                ' </body>' .
			                '</html>';
			        }
			        

			        $message = Swift_Message::newInstance('Thankyou for your order - '.$username.'')
			          ->setFrom(array('pys.idn@gmail.com' => 'Pickyourstuff Indonesia'))
			          ->setBody($messages, 'text/html');

			          $result = 0;
			          $message->setTo($email_to);
					  $result += $mailer->send($message);
					  $message->setTo('pys.idn@gmail.com');
					  $result += $mailer->send($message);

			        if ($result == 2) {
			        	$this->Model->addHistory($username, $history, $this->cart->total(), 'No');

			        	foreach ($this->cart->contents() as $items)
						{
							$this->Model->updateBuy($items['id']);
							$this->cart->remove($items['rowid']);
							$counter = $counter + 1;	
						}

			            echo '<script>alert("'.$counter.' Item(s) have successfully being held for 1 day! Please open your email for transaction detail. Thankyou for your cooperation.");document.location.href = "'.base_url("index.php/Controller/showCartPage").'";</script>';
			        } else {
			            echo '<script>alert("process cannot be done, please try again and make sure your connection is stable. if this problem continues, please contact admin");document.location.href = "'.base_url("index.php/Controller/showCartPage").'";</script>';
			        }
				}
			}
		}
		else
		{
			echo '<script>alert("You must login first!");document.location.href = "'.base_url("index.php/Controller/showLoginPage").'";</script>';
		}
		
	}
	

	public function adminItems()
	{
		if (isset($_SESSION['username']))
		{
			$salt = 'S;LDKFSDKVPVKSKOpskfkmsdvopkskm123012-9v;v;[].,/-=-=9324fhdfajc';
	       $key = substr(hash('sha256', $salt."jeremyANJINGjulio12348765".$salt), 0, 32);
	       $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
	       $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
	       $decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($_SESSION['username']), MCRYPT_MODE_ECB, $iv);
	       $decrypted = rtrim($decrypted, "\0");

	       $user = $decrypted;

	       if($user == "adminPickYourStuff_ID")
	       {
	       		$crud = new grocery_CRUD();
	       		$crud->set_table('items')
	       			->columns('id', 'name', 'type', 'condition', 'brand', 'size', 'gender', 'color', 'price', 'sale', 'quantity', 'thumbnails', 'image_right', 'image_left', 'image_bottom', 'image_upper', 'image_back', 'image_front')
	       			->unset_fields('date_added')
	       			->set_field_upload('thumbnails', 'assets/images/thumbnails')
	       			->set_field_upload('image_right', 'assets/images/items')
	       			->set_field_upload('image_left', 'assets/images/items')
	       			->set_field_upload('image_bottom', 'assets/images/items')
	       			->set_field_upload('image_upper', 'assets/images/items')
	       			->set_field_upload('image_back', 'assets/images/items')
	       			->set_field_upload('image_front', 'assets/images/items')
	       			->callback_after_upload(array($this,'callback_after_upload'))
	       			->display_as('thumbnails','Thumbnails (300x200)')
	       			->display_as('image_right','Image right (850x618)')
	       			->set_relation('gender', 'items_gender', 'gender')
	       			->set_primary_key('type', 'items_type')
	       			->set_relation('type', 'items_type', 'type')
	       			->set_relation('sale', 'items_sale', 'sale')
	       			->set_relation('condition', 'items_condition', 'condition')
	       			->set_primary_key('brand', 'items_brand')
	       			->set_relation('brand', 'items_brand', 'brand');
	       		$output = $crud->render();
	       		$data["crud"] = get_object_vars($output);


	            $this->load->model('Model');

				$data["brands"] = $this->Model->getBrands();
				$data["tag"] = 'Items';
			
				$data['style'] = $this->load->view('include/style', NULL, TRUE);
				$data['script'] = $this->load->view('include/script', NULL, TRUE);
				$data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
				$data['footer'] = $this->load->view('template/footer', NULL, TRUE);

				$this->load->view('page/crud', $data);
	       }
	       else
	       {
	       		echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
	       }
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	function callback_after_upload($uploader_response, $field_info, $files_to_upload) 
	{
	    $this -> load -> library('image_moo');
	    switch ($field_info->field_name) {  
	        case 'thumbnails':
	            $file_uploaded = $field_info -> upload_path . '/' . $uploader_response[0] -> name;
	            $this -> image_moo -> load($file_uploaded) -> resize_crop(300, 200) -> save($file_uploaded, true);
	            return true;
	            break;  
	        case 'image_right':
	            $file_uploaded = $field_info -> upload_path . '/' . $uploader_response[0] -> name;
	            $this -> image_moo -> load($file_uploaded) -> resize_crop(850, 618) -> save($file_uploaded, true);
	            return true;
	            break;  
	        case 'image_left':
	            $file_uploaded = $field_info -> upload_path . '/' . $uploader_response[0] -> name;
	            $this -> image_moo -> load($file_uploaded) -> resize_crop(850, 618) -> save($file_uploaded, true);
	            return true;
	            break;  
	        case 'image_bottom':
	            $file_uploaded = $field_info -> upload_path . '/' . $uploader_response[0] -> name;
	            $this -> image_moo -> load($file_uploaded) -> resize_crop(850, 618) -> save($file_uploaded, true);
	            return true;
	            break;
	        case 'image_upper':
	            $file_uploaded = $field_info -> upload_path . '/' . $uploader_response[0] -> name;
	            $this -> image_moo -> load($file_uploaded) -> resize_crop(850, 618) -> save($file_uploaded, true);
	            return true;
	            break;    
	        case 'image_back':
	            $file_uploaded = $field_info -> upload_path . '/' . $uploader_response[0] -> name;
	            $this -> image_moo -> load($file_uploaded) -> resize_crop(850, 618) -> save($file_uploaded, true);
	            return true;
	            break;          
	        case 'image_front':
	            $file_uploaded = $field_info -> upload_path . '/' . $uploader_response[0] -> name;
	            $this -> image_moo -> load($file_uploaded) -> resize_crop(850, 618) -> save($file_uploaded, true);
	            return true;
	        break;  
	        default:
	            return false;
	            break;
	    }
	}

	public function adminItemBrands()
	{
		if (isset($_SESSION['username']))
		{
			$salt = 'S;LDKFSDKVPVKSKOpskfkmsdvopkskm123012-9v;v;[].,/-=-=9324fhdfajc';
	       $key = substr(hash('sha256', $salt."jeremyANJINGjulio12348765".$salt), 0, 32);
	       $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
	       $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
	       $decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($_SESSION['username']), MCRYPT_MODE_ECB, $iv);
	       $decrypted = rtrim($decrypted, "\0");

	       $user = $decrypted;

	       if($user == "adminPickYourStuff_ID")
	       {
	       		$crud = new grocery_CRUD();
	       		$crud->set_table('items_brand');
	       		$output = $crud->render();
	       		$data["crud"] = get_object_vars($output);


	            $this->load->model('Model');

				$data["brands"] = $this->Model->getBrands();
				$data["tag"] = 'Item Brands';
			
				$data['style'] = $this->load->view('include/style', NULL, TRUE);
				$data['script'] = $this->load->view('include/script', NULL, TRUE);
				$data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
				$data['footer'] = $this->load->view('template/footer', NULL, TRUE);

				$this->load->view('page/crud', $data);
	       }
	       else
	       {
	       		echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
	       }
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function adminItemTypes()
	{
		if (isset($_SESSION['username']))
		{
			$salt = 'S;LDKFSDKVPVKSKOpskfkmsdvopkskm123012-9v;v;[].,/-=-=9324fhdfajc';
	       $key = substr(hash('sha256', $salt."jeremyANJINGjulio12348765".$salt), 0, 32);
	       $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
	       $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
	       $decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($_SESSION['username']), MCRYPT_MODE_ECB, $iv);
	       $decrypted = rtrim($decrypted, "\0");

	       $user = $decrypted;

	       if($user == "adminPickYourStuff_ID")
	       {
	       		$crud = new grocery_CRUD();
	       		$crud->set_table('items_type');
	       		$output = $crud->render();
	       		$data["crud"] = get_object_vars($output);


	            $this->load->model('Model');

				$data["brands"] = $this->Model->getBrands();
				$data["tag"] = 'Item Brands';
			
				$data['style'] = $this->load->view('include/style', NULL, TRUE);
				$data['script'] = $this->load->view('include/script', NULL, TRUE);
				$data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
				$data['footer'] = $this->load->view('template/footer', NULL, TRUE);

				$this->load->view('page/crud', $data);
	       }
	       else
	       {
	       		echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
	       }
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function adminSlideshow()
	{
		if (isset($_SESSION['username']))
		{
			$salt = 'S;LDKFSDKVPVKSKOpskfkmsdvopkskm123012-9v;v;[].,/-=-=9324fhdfajc';
	       $key = substr(hash('sha256', $salt."jeremyANJINGjulio12348765".$salt), 0, 32);
	       $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
	       $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
	       $decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($_SESSION['username']), MCRYPT_MODE_ECB, $iv);
	       $decrypted = rtrim($decrypted, "\0");

	       $user = $decrypted;

	       if($user == "adminPickYourStuff_ID")
	       {
	       		$crud = new grocery_CRUD();
	       		$crud->set_table('slideshow')
	       			->set_field_upload('image', 'assets/images/slideshow')
	       			->display_as('image','Image (1286x408)');
	       			//->callback_after_upload(array($this,'slideshow_callback_after_upload'));
	       		$output = $crud->render();
	       		$data["crud"] = get_object_vars($output);


	            $this->load->model('Model');

				$data["brands"] = $this->Model->getBrands();
				$data["tag"] = 'Slideshow';
			
				$data['style'] = $this->load->view('include/style', NULL, TRUE);
				$data['script'] = $this->load->view('include/script', NULL, TRUE);
				$data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
				$data['footer'] = $this->load->view('template/footer', NULL, TRUE);

				$this->load->view('page/crud', $data);
	       }
	       else
	       {
	       		echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
	       }
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	function slideshow_callback_after_upload($uploader_response,$field_info, $files_to_upload)
	{
	    $this->load->library('image_moo');
	 
	    //Is only one file uploaded so it ok to use it with $uploader_response[0].
	    $file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name; 
	 
	    $this->image_moo->load($file_uploaded)->resize_crop(1286,408)->save($file_uploaded,true);
	 
	    return true;
	}

	public function adminUsers()
	{
		if (isset($_SESSION['username']))
		{
			$salt = 'S;LDKFSDKVPVKSKOpskfkmsdvopkskm123012-9v;v;[].,/-=-=9324fhdfajc';
	       $key = substr(hash('sha256', $salt."jeremyANJINGjulio12348765".$salt), 0, 32);
	       $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
	       $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
	       $decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($_SESSION['username']), MCRYPT_MODE_ECB, $iv);
	       $decrypted = rtrim($decrypted, "\0");

	       $user = $decrypted;

	       if($user == "adminPickYourStuff_ID")
	       {
	       		$crud = new grocery_CRUD();
	       		$crud->set_table('users')
	       			->columns('username', 'name', 'email', 'phone_number')
	       			->unset_fields('password')
	       			->unset_add()
	       			->unset_edit()
	       			->unset_delete();
	       		$output = $crud->render();
	       		$data["crud"] = get_object_vars($output);


	            $this->load->model('Model');

				$data["brands"] = $this->Model->getBrands();
				$data["tag"] = 'Users';
			
				$data['style'] = $this->load->view('include/style', NULL, TRUE);
				$data['script'] = $this->load->view('include/script', NULL, TRUE);
				$data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
				$data['footer'] = $this->load->view('template/footer', NULL, TRUE);

				$this->load->view('page/crud', $data);
	       }
	       else
	       {
	       		echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
	       }
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function adminHistory()
	{
		if (isset($_SESSION['username']))
		{
			$salt = 'S;LDKFSDKVPVKSKOpskfkmsdvopkskm123012-9v;v;[].,/-=-=9324fhdfajc';
	       $key = substr(hash('sha256', $salt."jeremyANJINGjulio12348765".$salt), 0, 32);
	       $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
	       $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
	       $decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($_SESSION['username']), MCRYPT_MODE_ECB, $iv);
	       $decrypted = rtrim($decrypted, "\0");

	       $user = $decrypted;

	       if($user == "adminPickYourStuff_ID")
	       {
	       		$crud = new grocery_CRUD();
	       		$crud->set_table('buy_history')
	       			->set_relation('deal', 'items_sale', 'sale')
	       			->unset_edit_fields('username', 'history', 'total', 'date')
	       			->unset_add()
	       			->unset_delete();
	       		$output = $crud->render();
	       		$data["crud"] = get_object_vars($output);


	            $this->load->model('Model');

				$data["brands"] = $this->Model->getBrands();
				$data["tag"] = 'History';
			
				$data['style'] = $this->load->view('include/style', NULL, TRUE);
				$data['script'] = $this->load->view('include/script', NULL, TRUE);
				$data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
				$data['footer'] = $this->load->view('template/footer', NULL, TRUE);

				$this->load->view('page/crud', $data);
	       }
	       else
	       {
	       		echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
	       }
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function adminNewsletter()
	{
		if (isset($_SESSION['username']))
		{
			$salt = 'S;LDKFSDKVPVKSKOpskfkmsdvopkskm123012-9v;v;[].,/-=-=9324fhdfajc';
	       $key = substr(hash('sha256', $salt."jeremyANJINGjulio12348765".$salt), 0, 32);
	       $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
	       $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
	       $decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($_SESSION['username']), MCRYPT_MODE_ECB, $iv);
	       $decrypted = rtrim($decrypted, "\0");

	       $user = $decrypted;

	       if($user == "adminPickYourStuff_ID")
	       {
	       		$crud = new grocery_CRUD();
	       		$crud->set_table('newsletter')
	       			->unset_add()
	       			->unset_edit();
	       		$output = $crud->render();
	       		$data["crud"] = get_object_vars($output);


	            $this->load->model('Model');

				$data["brands"] = $this->Model->getBrands();
				$data["tag"] = 'Newsletter';
			
				$data['style'] = $this->load->view('include/style', NULL, TRUE);
				$data['script'] = $this->load->view('include/script', NULL, TRUE);
				$data['navbar'] = $this->load->view('template/navbar', $data, TRUE);
				$data['footer'] = $this->load->view('template/footer', NULL, TRUE);

				$this->load->view('page/crud', $data);
	       }
	       else
	       {
	       		echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
	       }
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}

	public function sentNewsletter()
	{
		if (isset($_SESSION['username']))
		{
			$salt = 'S;LDKFSDKVPVKSKOpskfkmsdvopkskm123012-9v;v;[].,/-=-=9324fhdfajc';
	       $key = substr(hash('sha256', $salt."jeremyANJINGjulio12348765".$salt), 0, 32);
	       $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
	       $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
	       $decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($_SESSION['username']), MCRYPT_MODE_ECB, $iv);
	       $decrypted = rtrim($decrypted, "\0");

	       $user = $decrypted;

	       if($user == "adminPickYourStuff_ID")
	       {
	       		require_once APPPATH.'libraries/swift_mailer/swift_required.php';

	       		$title			= $this->input->post('title');
				$isimessage		= $this->input->post('message');

				 $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
		          ->setUsername('pys.idn@gmail.com')
		          ->setPassword('YeezyGang350');

		        $mailer = Swift_Mailer::newInstance($transport);

		            $messages = 
		                '<html>' .
		                ' <head></head>' .
		                ' <body>' .
		                $isimessage .
		                ' </body>' .
		                '</html>';
		        

		        $message = Swift_Message::newInstance(''.$title.'')
		          ->setFrom(array('pys.idn@gmail.com' => 'Pickyourstuff Indonesia'))
		          ->setBody($messages, 'text/html');

		        $this->load->model('Model');
		       	$query = $this->Model->getNewsletter();
		       	$failedRecipients = array();
		       	$numSent = 0;
		       	$failedString = "";

		        foreach ($query->result() as $line)
				{
				    $message->setTo($line->email);
					$numSent += $mailer->send($message, $failedRecipients);
				}

				echo '<script>alert("'.$numSent.' email sent.");</script>';

				foreach ($failedRecipients as $failed)
				{
					$failedString .= $failed . ", ";
				}

				echo '<script>alert("Failed to sent to : '.$failedString.'");document.location.href = "'.base_url("index.php/Controller/adminNewsletter").'";</script>';
			}
			else
			{
				echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
			}
		}
		else
		{
			echo '<script>document.location.href = "'.base_url("index.php/Controller").'";</script>';
		}	
	}*/

}
