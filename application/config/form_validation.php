<?php
$config = array(
        'location_form' => array(
                array(
                        'field' => 'location_name',
                        'label' => 'Location Name',
                        'rules' => 'required'
                )
        ),
        'login_form' => array(
                array(
                        'field' => 'Login',
                        'label' => 'Username or Email',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'Password',
                        'label' => 'Password',
                        'rules' => 'required|min_length[6]'
                )
        ),
       'category_form' => array(
                array(
                        'field' => 'category_name',
                        'label' => 'Category Name',
                        'rules' => 'required'
                )
        ),
       'facility_form' => array(
                array(
                        'field' => 'facility_name',
                        'label' => 'Facility Name',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'price',
                        'label' => 'Price',
                        'rules' => 'required|is_natural_no_zero'
                ),
                array(
                        'field' => 'location_id',
                        'label' => 'Location',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'category_id',
                        'label' => 'Category',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'description',
                        'label' => 'Description',
                        'rules' => 'required'
                )
        )
        
);



  ?>