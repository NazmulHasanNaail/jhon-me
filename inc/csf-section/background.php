<?php
//
//==== background section ====
CSF::createSection( $prefix, array(
    'title'  => 'background',
    'icon'   =>'fas fa-window-maximize',
    'fields' => array(

        array(
        'id'    => 'opt-textarea',
        'type'  => 'textarea',
        'title' => 'Simple Textarea',
        ),

    )
    ) );