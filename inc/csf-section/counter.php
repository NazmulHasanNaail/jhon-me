<?php
//
//==== Footer section ====
CSF::createSection( $prefix, array(
    'title'  => 'Counter',
    'icon'   =>'fas fa-tasks',
    'fields' => array(
        // A Heading
        array(
            'type'    => 'heading',
            'content' => 'Counter Content',
        ),
        //counter items
        array(
            'id'     => 'jhon-me-counter-items',
            'type'   => 'repeater',
            'title'  => 'Counter Items',
            'fields' => array(
            array(
                'id'    => 'jhon-me-counter-img',
                'type'  => 'media',
                'title' => 'Image',
                ),
                  
              array(
                'id'    => 'jhon-me-counter-title',
                'type'  => 'text',
                'title' => 'Title',
                'default'=>'PROJECT <small>COMPLETED</small>'
              ),
              array(
                'id'    => 'jhon-me-counter-number',
                'type'  => 'text',
                'title' => 'Number',
                'default'=> '20'
              ),
              
          
            ),
          ),
          

    )
    ) );