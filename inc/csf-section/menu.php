<?php
    //
    //==== Menu section ====
    CSF::createSection( $prefix, array(
        'title'  => 'Menu',
        'icon'   =>'fas fa-bars',
        'fields' => array(
  
              //
              // Section Heading
              array(
                'type'    => 'heading',
                'content' => 'Menu Options',
            ),  
            //hamburger menu color
            array(
              'id'    => 'jhon-me-hamburger-menu',
              'type'  => 'background',
              'title' => 'Hamburger Menu',
              'background_image'=>false,
              'background_position'=>false,
              'background_repeat'=>false,
              'background_attachment'=>false,
              'background_size'=>false,
              'default'=>array('background-color'=>'#fff'),
              'output'=>array('.menu__icon:before', '.menu__icon:after', '.menu__icon span'),
              'desc'=>'Control the hamburger menu color.'
            ),
            //hamburger menu hover color
            array(
              'id'    => 'jhon-me-hamburger-menu-hover',
              'type'  => 'background',
              'title' => 'Hamburger Menu hover',
              'background_image'=>false,
              'background_position'=>false,
              'background_repeat'=>false,
              'background_attachment'=>false,
              'background_size'=>false,
              'default'=>array('background-color'=>'#ffce71'),
              'output'=>array('.menu__icon:hover::after', '.menu__icon:hover::before', '.menu__icon:hover span'),
              'desc'=>'Control the hamburger menu hover color.'
            ),
    
        )
      ) );