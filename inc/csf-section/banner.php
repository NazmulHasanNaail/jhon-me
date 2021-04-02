<?php
    //==== front page banner section ====
    CSF::createSection( $prefix, array(
      'title'  => 'Banner',
      'icon'   =>'far fa-window-maximize',
      'fields' => array(
  
        //
        // Section Heading
        array(
          'type'    => 'heading',
          'content' => 'Banner Content',
      ),
      //banner welcome
      array(
        'id'      => 'jhon-me-banner-wc',
        'type'    => 'text',
        'title'   => 'welcome Text',
        'default' => 'Hello, I’m'
      ),
      //name
      array(
        'id'      => 'jhon-me-banner-name',
        'type'    => 'text',
        'title'   => 'name',
        'default' => 'Jhon Smith'
      ),
      //description
      array(
        'id'      => 'jhon-me-banner-desc',
        'type'    => 'text',
        'title'   => 'description',
        'default' => 'A Freelance Designer & <br> Front-End Developer'
      ),
      //banner socila site
      array(
        'id'     => 'jhon-me-banner-social',
        'type'   => 'repeater',
        'title'  => 'Social Site',
        'max'    => 5,
        'fields' => array(
          //social link
          array(
            'id'    => 'jhon-me-banner-social-link',
            'type'  => 'link',
            'title' => 'Link',
          ),
          //socila icon
          array(
            'id'    => 'jhon-me-banner-social-icon',
            'type'  => 'icon',
            'title' => 'Icon',
          ),
          
      
        ),
        'default'=>array(
          //facebook
          array(
            'jhon-me-banner-social-icon'=>'fab fa-facebook-f',
            'jhon-me-banner-social-link'=>array(
                  'url'=> 'http://facebook.com/',
                  'text'   => 'facebook',
                  'target' => '_blank'
              )
          ),
          //twitter
          array(
            'jhon-me-banner-social-icon'=>'fab fa-twitter',
            'jhon-me-banner-social-link'=>array(
                  'url'=> 'http://twitter.com/',
                  'text'   => 'twitter',
                  'target' => '_blank'
              )
          ),
          //googleplus
          array(
            'jhon-me-banner-social-icon'=>'fab fa-google-plus-g',
            'jhon-me-banner-social-link'=>array(
                  'url'=> 'http://googleplus.com/',
                  'text'   => 'googleplus',
                  'target' => '_blank'
              )
          ),
          //behance
          array(
            'jhon-me-banner-social-icon'=>'fab fa-behance',
            'jhon-me-banner-social-link'=>array(
                  'url'=> 'http://behance.com/',
                  'text'   => 'behance',
                  'target' => '_blank'
              )
          ),
          //linkedin
          array(
            'jhon-me-banner-social-icon'=>'fab fa-linkedin-in',
            'jhon-me-banner-social-link'=>array(
                  'url'=> 'http://linkedin.com/',
                  'text'   => 'linkedin',
                  'target' => '_blank'
              )
          ),

          )
      ),
      //hire now button  link and text
      array(
        'id'    => 'jhon-me-banner-hire-button',
        'type'  => 'link',
        'title' => 'Hire Button',
        'default'  => array(
          'url'    => '#contact',
          'text'   => 'Hire Now',
          'target' => '_blank'
        ),
      ),
      //video button  link and text
      array(
        'id'    => 'jhon-me-banner-video-button',
        'type'  => 'link',
        'title' => 'video Button',
        'default'  => array(
          'url'    => 'https://vimeo.com/259411563',
          'text'   => 'PLAY INTRO',
          'target' => '_blank'
        ),
      ),
      //add another

      )
    ) );