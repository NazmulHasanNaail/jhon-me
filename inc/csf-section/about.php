<?php
//
//==== About section ====
CSF::createSection( $prefix, array(
    'title'  => 'About Me',
    'icon'   =>'far fa-address-card',
    'fields' => array(
        // section Heading
        array(
            'type'    => 'heading',
            'content' => 'About Me Content',
        ),
        //Author Image
        array(
            'id'    => 'jhon-me-about-author-img',
            'type'  => 'media',
            'title' => 'Author Image',
            'default'=>['width' => 220,'height'=> 280],
            'desc' =>'For better output please insert 220x280 size image.'
          ),
          //about list item
          array(
            'id'     => 'jhon-me-about-list-item',
            'type'   => 'repeater',
            'title'  => 'List Item',
            'max'    => 4,
            'fields' => array(
              //title            
              array(
                'id'    => 'jhon-me-about-list-title',
                'type'  => 'text',
                'title' => 'title',
                'default'=>'Biography'
              ),
              //editor
              array(
                'id'    => 'jhon-me-about-list-desc',
                'type'  => 'wp_editor',
                'title' => 'description',
                'default'=>'Enter your description..'
              ),              
          
            ),
          ),
          //Resume link and Text
          array(
            'id'    => 'jhon-me-about-resume',
            'type'  => 'link',
            'title' => 'Resume Button',
            'desc'  => 'add your Resume link and Resume button text',
            'default'=>['url'=>'example.com', 'text'=>'Resume', 'target'=>'_blank']
          ),
          
          

    )
    ) );  