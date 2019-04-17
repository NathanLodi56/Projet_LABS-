<?php
class MgCustomizer
{

    // rajoute panel + section + setting ---> control 

    public static function rajout_section_about_bg($wp_customize)
    {
        //HOME PAGE 
        $wp_customize->add_panel('changer-contenu-site', [
            'title' => ('Changer le contenu du la page Home (text,img,...'),
            // 'Description' =>('Personnalisation de la section about')
        ]);

        //SECTION 1 
        $wp_customize->add_section('intro_sec', [
            'title' => 'Page Home section1 intro',
            'panel' => 'changer-contenu-site',

        ]);
        //SECTION 2

        $wp_customize->add_section('about_sec', [
            'title' => 'Page Home section 2 about',
            'panel' => 'changer-contenu-site',

        ]);
        //SECTION 3
        $wp_customize->add_section('testimonial_sec', [
            'title' => 'Page Home section 3 témoignage',
            'panel' => 'changer-contenu-site',

        ]);
        //SECTION 4
        $wp_customize->add_section('services_sec', [
            'title' => 'Page Home section 4 services',
            'panel' => 'changer-contenu-site',

        ]);
        //SECTION 5    
        $wp_customize->add_section('team_sec', [
            'title' => 'Page Home section 5 Team ( équipe)',
            'panel' => 'changer-contenu-site',

        ]);
        //SECTION 6 
        $wp_customize->add_section('promotion_sec', [
            'title' => 'Page Home section 6 promotion',
            'panel' => 'changer-contenu-site',

        ]);
        //SECTION 7
        $wp_customize->add_section('contact_section', [
            'title' => 'Page Home section 7 contact',
            'panel' => 'changer-contenu-site',

        ]);


        // Home-page Debut de la section 1 intro du début ( setting)

        $wp_customize->add_setting('intro_id_img', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);

        $wp_customize->add_setting('intro_id_text', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);

        $wp_customize->add_setting('intro_id_BG_1', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);

        $wp_customize->add_setting('intro_id_BG_2', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);
        
        // Home_page Fin de la section 1 intro du début ( setting)

        


        $wp_customize->add_setting('about_id_text', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);

        $wp_customize->add_setting('testi_id_text', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);
        $wp_customize->add_setting('services_id', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);
        $wp_customize->add_setting('team_id', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);
        $wp_customize->add_setting('promotion_id', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);
        $wp_customize->add_setting('contact_id', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);




        //Home-page Debut de la section intro du début ( control)



        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'intro_control_img',
                array(
                    'label'      => 'Changer le logo princpale ',
                    'section'    => 'intro_sec',
                    'settings'   => 'intro_id_img',
                )
            )
        );
        
        $wp_customize->add_control('intro_control_text', [
            'label' => 'Changer le text en dessus du Logo',
            'section' => 'intro_sec',
            'settings' => 'intro_id_text',

        ]);

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'intro_control_BG_1',
                array(
                    'label'      => "Changer l'arrière-plan 1 (background) ",
                    'section'    => 'intro_sec',
                    'settings'   => 'intro_id_BG_1',
                )
            )
        );


        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'intro_control_BG_2',
                array(
                    'label'      => "Changer l'arrière-plan 2 (background) ",
                    'section'    => 'intro_sec',
                    'settings'   => 'intro_id_BG_2',
                )
            )
        );


        //Home-page Fin de la section intro du début ( control)



        $wp_customize->add_control('about_control_text', [
            'label' => 'Changer titre section',
            'section' => 'about_sec',
            'settings' => 'about_id_text',

        ]);
        
        $wp_customize->add_control('testi_control_text', [
            'label' => 'Changer titre section',
            'section' => 'testimonial_sec',
            'settings' => 'testi_id_text',

        ]);

        $wp_customize->add_control('serv_control_text', [
            'label' => 'Changer titre section',
            'section' => 'services_sec',
            'settings' => 'services_id',

        ]);

        $wp_customize->add_control('team_control_text', [
            'label' => 'Changer titre section',
            'section' => 'team_sec',
            'settings' => 'team_id',

        ]);

        $wp_customize->add_control('promo_control_text', [
            'label' => 'Changer titre section',
            'section' => 'promotion_sec',
            'settings' => 'promotion_id',

        ]);

        $wp_customize->add_control('contact_control_text', [
            'label' => 'Changer titre section',
            'section' => 'contact_section',
            'settings' => 'contact_id',

        ]);


    }
}

add_action('customize_register', [MgCustomizer::class, 'rajout_section_about_bg']);


