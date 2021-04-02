<?php
//
//====Services section ====
CSF::createSection( $prefix, array(
    'title'  => 'Services',
    'icon'   =>'fab fa-servicestack',
    'fields' => array(
        // A Heading
        array(
            'type'    => 'heading',
            'content' => 'Services Content',
        ),
        //services item
        array(
            'id'     => 'jhon-me-service-items',
            'type'   => 'repeater',
            'title'  => 'Service items',
            'max'    => 6,
            'fields' => array(
                //iamge
                array(
                    'id'    => 'jhon-me-service-img',
                    'type'  => 'media',
                    'title' => 'Image',
                    'desc'  =>'Please ensure your image size is under 80px'
                ),
                //title
              array(
                'id'    => 'jhon-me-service-title',
                'type'  => 'text',
                'title' => 'Title',
                'desc'  => 'write your service item title'
              ),
              //description                  
              array(
                'id'    => 'jhon-me-service-desc',
                'type'  => 'textarea',
                'title' => 'Description',
                'desc'  => 'write your service item description.'
              ),
          
            ),
          ),
          
    )
    ) );