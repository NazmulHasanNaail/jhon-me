<?php
    //
    //==== Contact section ====
    CSF::createSection( $prefix, array(
        'title'  => 'Contact Form',
        'icon'   =>'fas fa-address-book',
        'fields' => array(
    
          array(
            'id'    => 'opt-textarea',
            'type'  => 'textarea',
            'title' => 'Simple Textarea',
          ),
    
        )
      ) );