<?php
//
//==== my-work section ====
CSF::createSection( $prefix, array(
    'title'  => 'Portfolio',
    'icon'   =>'fas fa-th',
    'fields' => array(
        //work-items
        array(
            'id'     => 'jhon-me-work-items',
            'type'   => 'repeater',
            'title'  => 'Work items',
            'fields' => array(
              //title
              array(
                'id'    => 'jhon-me-work-title',
                'type'  => 'text',
                'title' => 'Title',
                'desc'  =>'insert your work title'
              ),
            //category
              array(
                'id'    => 'jhon-me-work-cat',
                'type'  => 'text',
                'title' => 'Category',
                'desc'  =>'inesrt your work cetagory'
              ),
             //description
              array(
                'id'    => 'jhon-me-work-desc',
                'type'  => 'textarea',
                'title' => 'Description',
                'desc'  =>'inesrt your work description'
              ),
              //image
              array(
                'id'    => 'jhon-me-work-media',
                'type'  => 'media',
                'title' => 'Media',
                'desc'  => 'insert your work'
              ),
              
          
            ),
          ),
          

    )
    ) );