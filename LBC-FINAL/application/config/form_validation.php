<?php

$config = array(
		'order1' => array(
	                array(
	                        'field' => 'name',
	                        'label' => 'Name',
	                        'rules' => 'required|regex_match[/^[a-zA-Z ]*$/]|max_length[200]',
	                        'errors' => array(
		                        'regex_match' => '%s can only contain alphabet characters and spaces'
		                	)
	                ),
	                array(
	                        'field' => 'email',
	                        'label' => 'Email',
	                        'rules' => 'required|valid_email|max_length[100]'
	                ),
	                array(
	                        'field' => 'address',
	                        'label' => 'Address',
	                        'rules' => "required|regex_match[/^[a-zA-Z0-9_.,' ]*$/]|max_length[500]",
	                        'errors' => array(
		                        'regex_match' => '%s can only contain alphanumeric, spaces, period, comma, apostrophe, and underscore characters'
		                	)
	                ),
	                array(
	                        'field' => 'phone',
	                        'label' => 'Phone Number',
	                        'rules' => 'required|numeric|max_length[20]'
	                ),
	                array(
	                        'field' => 'delivery',
	                        'label' => 'Delivery Service',
	                        'rules' => 'required|alpha_numeric_spaces|max_length[50]'
	                ),
	                array(
	                        'field' => 'deliverydate',
	                        'label' => 'Delivery Date',
	                        'rules' => 'required|alpha_numeric_spaces|max_length[50]'
	                ),
	                 array(
	                        'field' => 'orderdata1',
	                        'label' => 'Box 1',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                 array(
	                        'field' => 'orderdata2',
	                        'label' => 'Box 2',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                 array(
	                        'field' => 'orderdata3',
	                        'label' => 'Box 3',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                  array(
	                        'field' => 'orderdata4',
	                        'label' => 'Box 4',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                )
	        ),
		'order2' => array(
	                array(
	                        'field' => 'name',
	                        'label' => 'Name',
	                        'rules' => 'required|regex_match[/^[a-zA-Z ]*$/]|max_length[200]',
	                        'errors' => array(
		                        'regex_match' => '%s can only contain alphabet characters and spaces'
		                	)
	                ),
	                array(
	                        'field' => 'email',
	                        'label' => 'Email',
	                        'rules' => 'required|valid_email|max_length[100]'
	                ),
	                array(
	                        'field' => 'address',
	                        'label' => 'Address',
	                        'rules' => "required|regex_match[/^[a-zA-Z0-9_.,' ]*$/]|max_length[500]",
	                        'errors' => array(
		                        'regex_match' => '%s can only contain alphanumeric, space, period, comma, apostrophe, and underscore characters'
		                	)
	                ),
	                array(
	                        'field' => 'phone',
	                        'label' => 'Phone Number',
	                        'rules' => 'required|numeric|max_length[20]'
	                ),
	                array(
	                        'field' => 'delivery',
	                        'label' => 'Delivery Service',
	                        'rules' => 'required|alpha_numeric_spaces|max_length[50]'
	                ),
	                array(
	                        'field' => 'deliverydate',
	                        'label' => 'Delivery Date',
	                        'rules' => 'required|alpha_numeric_spaces|max_length[50]'
	                ),
	                 array(
	                        'field' => 'orderdata1',
	                        'label' => 'Box 1',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                 array(
	                        'field' => 'orderdata2',
	                        'label' => 'Box 2',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                 array(
	                        'field' => 'orderdata3',
	                        'label' => 'Box 3',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                  array(
	                        'field' => 'orderdata4',
	                        'label' => 'Box 4',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                  array(
	                        'field' => 'orderdata5',
	                        'label' => 'Box 5',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                  array(
	                        'field' => 'orderdata6',
	                        'label' => 'Box 6',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                  array(
	                        'field' => 'orderdata7',
	                        'label' => 'Box 7',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                  array(
	                        'field' => 'orderdata8',
	                        'label' => 'Box 8',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                  array(
	                        'field' => 'orderdata9',
	                        'label' => 'Box 9',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                )
	        ),
		'order3' => array(
	                array(
	                        'field' => 'name',
	                        'label' => 'Name',
	                        'rules' => 'required|regex_match[/^[a-zA-Z ]*$/]|max_length[200]',
	                        'errors' => array(
		                        'regex_match' => '%s can only contain alphabet characters and spaces'
		                	)
	                ),
	                array(
	                        'field' => 'email',
	                        'label' => 'Email',
	                        'rules' => 'required|valid_email|max_length[100]'
	                ),
	                array(
	                        'field' => 'address',
	                        'label' => 'Address',
	                        'rules' => "required|regex_match[/^[a-zA-Z0-9_.,' ]*$/]|max_length[500]",
	                        'errors' => array(
		                        'regex_match' => '%s can only contain alphanumeric, space, period, comma, apostrophe, and underscore characters'
		                	)
	                ),
	                array(
	                        'field' => 'phone',
	                        'label' => 'Phone Number',
	                        'rules' => 'required|numeric|max_length[20]'
	                ),
	                array(
	                        'field' => 'delivery',
	                        'label' => 'Delivery Service',
	                        'rules' => 'required|alpha_numeric_spaces|max_length[50]'
	                ),
	                array(
	                        'field' => 'deliverydate',
	                        'label' => 'Delivery Date',
	                        'rules' => 'required|alpha_numeric_spaces|max_length[50]'
	                ),
	                 array(
	                        'field' => 'orderdata1',
	                        'label' => 'Box 1',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                 array(
	                        'field' => 'orderdata2',
	                        'label' => 'Box 2',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                 array(
	                        'field' => 'orderdata3',
	                        'label' => 'Box 3',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                  array(
	                        'field' => 'orderdata4',
	                        'label' => 'Box 4',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                  array(
	                        'field' => 'orderdata5',
	                        'label' => 'Box 5',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                  array(
	                        'field' => 'orderdata6',
	                        'label' => 'Box 6',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                  array(
	                        'field' => 'orderdata7',
	                        'label' => 'Box 7',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                  array(
	                        'field' => 'orderdata8',
	                        'label' => 'Box 8',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                  array(
	                        'field' => 'orderdata9',
	                        'label' => 'Box 9',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                  array(
	                        'field' => 'orderdata10',
	                        'label' => 'Box 10',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                  array(
	                        'field' => 'orderdata11',
	                        'label' => 'Box 11',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                ),
	                  array(
	                        'field' => 'orderdata12',
	                        'label' => 'Box 12',
	                        'rules' => 'required',
	                        'errors' => array(
		                        'required' => 'Custom Gift %s field cannot be empty'
		                	)
	                )
	        ),
			'signup' => array(
	                array(
	                        'field' => 'username',
	                        'label' => 'Username',
	                        'rules' => 'required|min_length[5]|max_length[12]|is_unique[users.username]|alpha_numeric',
	                        'errors' => array(
	                                'is_unique'     => 'This %s already exists.'
	                        ),
	                ),
	                array(
	                        'field' => 'password',
	                        'label' => 'Password',
	                        'rules' => 'required|regex_match[/(?=.*\d)(?=.*[a-z])/]|min_length[6]|max_length[50]',
	                        'errors' => array(
	                                'regex_match' => '%s must contain at least one number and one lowercase letter, and at least 6 or more characters.'
	                        ),
	                ),
	                array(
	                        'field' => 'reenterpassword',
	                        'label' => 'Password Confirmation',
	                        'rules' => 'required|matches[password]',
	                        'errors' => array(
	                                'matches'     => '%s does not match with password.'
	                        ),
	                ),
	                array(
	                        'field' => 'name',
	                        'label' => 'Name',
	                        'rules' => 'required|alpha|max_length[50]'
	                ),
	                array(
	                        'field' => 'email',
	                        'label' => 'Email',
	                        'rules' => 'required|valid_email|max_length[50]'
	                ),
	                array(
	                        'field' => 'phone_number',
	                        'label' => 'Phone Number',
	                        'rules' => 'required|numeric|max_length[20]'
	                )
	        ),
	        'edit' => array(
	                array(
	                        'field' => 'password',
	                        'label' => 'Password',
	                        'rules' => 'required|regex_match[/(?=.*\d)(?=.*[a-z])/]|min_length[6]|max_length[50]',
	                        'errors' => array(
	                                'regex_match' => '%s must contain at least one number and one lowercase letter, and at least 6 or more characters.'
	                        ),
	                ),
	                array(
	                        'field' => 'reenterpassword',
	                        'label' => 'Password Confirmation',
	                        'rules' => 'required|matches[password]',
	                        'errors' => array(
	                                'matches'     => '%s does not match with password.'
	                        ),
	                ),
	                array(
	                        'field' => 'name',
	                        'label' => 'Name',
	                        'rules' => 'required|alpha|max_length[50]'
	                ),
	                array(
	                        'field' => 'email',
	                        'label' => 'Email',
	                        'rules' => 'required|valid_email|max_length[50]'
	                ),
	                array(
	                        'field' => 'phone_number',
	                        'label' => 'Phone Number',
	                        'rules' => 'required|numeric|max_length[20]'
	                )
	        ),
	        'search' => array(
	                array(
	                        'field' => 'search',
	                        'label' => 'Search',
	                        'rules' => 'trim|required|alpha_numeric_spaces|max_length[20]'
	                )
	        ),
	        'newsletter' => array(
	                array(
	                        'field' => 'emailnewsletter',
	                        'label' => 'Email',
	                        'rules' => 'required|valid_email|max_length[100]|is_unique[newsletter.email]',
	                        'errors' => array(
	                                'is_unique'     => 'This %s already exists in our newsletter list.'
	                        ),
	                )
	        ),
	        'contactus' => array(
	                array(
	                        'field' => 'name',
	                        'label' => 'Name',
	                        'rules' => 'required|alpha|max_length[100]'
	                ),
	                array(
	                        'field' => 'email',
	                        'label' => 'Email',
	                        'rules' => 'required|valid_email|max_length[100]'
	                ),
	                array(
	                        'field' => 'message',
	                        'label' => 'Message',
	                        'rules' => "required|max_length[500]"
	                )
	        ),
		'signin' => array(
	                array(
	                        'field' => 'username',
	                        'label' => 'Username',
	                        'rules' => array(
					                'required',
					                'alpha_numeric_spaces'
					        ),
	                        'errors' => array(
	                                'alpha_numeric_spaces'     	=> 'Username or Password wrong!!!!',
	                                'required'     			=> 'Username or Password wrong!!!'
	                        ),
	                ),
	                array(
	                        'field' => 'password',
	                        'label' => 'Password',
	                        'rules' => array(
					                'required',
					                'alpha_numeric_spaces'
					        ),
	                        'errors' => array(
	                                'alpha_numeric_spaces' 			=> 'Username or Password wrong!!',
	                                'required'     			=> 'Username or Password wrong!'
	                        ),
	                )
	        )
        );

$config['error_prefix'] = '<div class="error_form"><p>';
$config['error_suffix'] = '</p></div>';
