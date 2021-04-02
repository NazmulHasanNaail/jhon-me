<?php
    //
    //==== Header section ====
    CSF::createSection( $prefix, array(
        'title'  => 'Header',
        'icon'   =>'fas fa-angle-double-up',
        'fields' => array(
  
          //
          // Section Heading
          array(
              'type'    => 'heading',
              'content' => 'Header Options',
          ),
          //header Background
          array(
              'id'    => 'jhon-me-header-bg',
              'type'  => 'background',
              'title' => 'Background',
              'background_image'=>false,
              'background_position'=>false,
              'background_repeat'=>false,
              'background_attachment'=>false,
              'background_size'=>false,
              'output'=>'header',
              'desc'=>'Control the header background color.'
            ),
            //header spacing
            array(
              'id'    => 'jhon-me-header-spacing',
              'type'  => 'spacing',
              'title' => 'padding',
              'right' => false,
              'left' => false,
              'default'=> array('top'=> 1, 'bottom'=>1, 'unit'=>'em'),
              'output'=>'header',
              'desc'=>'Control the header top bottom padding.(default top:1em, bottom:1em)'
            ),
          //
          // Section Heading
          array(
              'type'    => 'heading',
              'content' => 'Sticky Header',
          ),          
            //sticky Header
            array(
              'id'    => 'jhon-me-sticky-header-switcher',
              'type'  => 'switcher',
              'title' => 'Sticky Header',
              'default'=> true,
              'desc' => 'Control the sticky header. If you turn on the switch then sticky header will be appearing',
            ),
          //Sticky header Background
          array(
              'id'    => 'jhon-me-sticky-header-bg',
              'type'  => 'background',
              'title' => 'Background',
              'background_image'=>false,
              'background_position'=>false,
              'background_repeat'=>false,
              'background_attachment'=>false,
              'background_size'=>false,
              'default'=>array('background-color' =>'#0e489f'),
              'output'=>'header.sticky-on.sticky',
              'desc'=>'Control the header background color.',
              'dependency'=>array('jhon-me-sticky-header-switcher','==','true')
            ),
            //Sticky header spacing
            array(
              'id'    => 'jhon-me-sticky-header-spacing',
              'type'  => 'spacing',
              'title' => 'padding',
              'right' => false,
              'left' => false,
              'default'=> array('top'=> 0.5, 'bottom'=>0.5, 'unit'=>'em'),
              'output'=>'header.sticky-on.sticky',
              'desc'=>'Control the Sticky header top bottom padding.(default top:0.5em, bottom:0.5em)',
              'dependency'=>array('jhon-me-sticky-header-switcher','==','true')
            ),
            
            
    
        )
      ) );