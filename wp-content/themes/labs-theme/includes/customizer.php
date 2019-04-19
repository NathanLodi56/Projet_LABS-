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

        


        // Home_page Debut de la section 2 about du début ( setting)
        $wp_customize->add_setting('about_id_text', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);

        $wp_customize->add_setting('about_id_colonne1', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);

        $wp_customize->add_setting('about_id_colonne2', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);

        $wp_customize->add_setting('about_id_vignette_video', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);

        $wp_customize->add_setting('about_id_video', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);
        // Home_page fin de la section 2 about du début ( setting)


        // Home_page Debut de la section 3 about du début ( setting)


        $wp_customize->add_setting('testi_id_text', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);

         // Home_page  de la section 3 about du début ( setting)

        
        // Home_page Début de la section 4 services  du début (setting)

        $wp_customize->add_setting('services_id', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);
        // Home_page Début de la section 4 services  du début (setting)


        // Home_page Début de la section 5 Team  du début (setting)

        $wp_customize->add_setting('team_id', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);
        // Home_page Début de la section 5 Team  du fin (setting)


        // Home_page Début de la section 6 Promo  du début (setting)

        $wp_customize->add_setting('promotion_id_titre', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);

        $wp_customize->add_setting('promotion_id_textarea', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);


        // Home_page Début de la section 6 Promo  du fin (setting)
        

        // Home_page Début de la section 7 Contanct  du début (setting)

        $wp_customize->add_setting('contact_id_titre', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);

        $wp_customize->add_setting('contact_id_textarea', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);

        $wp_customize->add_setting('contact_id_titre_2', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);

        $wp_customize->add_setting('contact_id_lieu_1_2', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);


        $wp_customize->add_setting('contact_id_numero_3', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);

        $wp_customize->add_setting('contact_id_mail_4', [
            'type' => 'theme_mod',
            // 'sanitize_callback' => 'sanitize_hex_color'
        ]);
        // Home_page Début de la section 7 Contanct  du fin (setting)

        


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


        // Home_page Debut de la section 2 about du début (control)

        $wp_customize->add_control('about_control_text', [
            'label' => 'Changer le titre haut dessus des colonnes',
            'section' => 'about_sec',
            'settings' => 'about_id_text',

        ]);

        $wp_customize->add_control('about_control_col_1', [
            'label' => 'Changer texte colonne 1',
            'section' => 'about_sec',
            'settings' => 'about_id_colonne1',
            'type' => 'textarea'
        ]);

        $wp_customize->add_control('about_control_col_2', [
            'label' => 'Changer texte colonne 2',
            'section' => 'about_sec',
            'settings' => 'about_id_colonne2',
            'type' => 'textarea'

        ]);

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'about_control_vignette_video',
                array(
                    'label'      => "Changer l'image de la vignette_video ",
                    'section'    => 'about_sec',
                    'settings'   => 'about_id_vignette_video',
                )
            )
        );

        $wp_customize->add_control('about_control_video', [
            'label' => 'Changer url de la video',
            'section' => 'about_sec',
            'settings' => 'about_id_video',
            'type' => 'url'
        ]);

        //Home-page Début de la section 2 about du début ( control)


        // Home_page Début de la section 3 testimonial testimonial du début (control)

        $wp_customize->add_control('testi_control_text', [
            'label' => 'Changer le titre principal ',
            'section' => 'testimonial_sec',
            'settings' => 'testi_id_text',
C
        ]);
        // Home_page Début de la section 3 testimonial testimonial du fin (control)


        // Home_page Début de la section 4 services  du début (control)


        $wp_customize->add_control('serv_control_text', [
            'label' => 'Changer le titre principal',
            'section' => 'services_sec',
            'settings' => 'services_id',

        ]);

        // Home_page Début de la section 4 services  du début (control)



        // Home_page Début de la section 5 Team  du début (control)

        $wp_customize->add_control('team_control_text', [
            'label' => 'Changer le titre Princpal',
            'section' => 'team_sec',
            'settings' => 'team_id',

        ]);

        // Home_page Début de la section 5 Team  du fin (control)


        // Home_page Début de la section 6 promo  du début (control)

        $wp_customize->add_control('promo_control_titre', [
            'label' => 'Changer le titre principal',
            'section' => 'promotion_sec',
            'settings' => 'promotion_id_titre',

        ]);

        $wp_customize->add_control('promo_control_text', [
            'label' => 'Changer le text',
            'section' => 'promotion_sec',
            'settings' => 'promotion_id_text',

        ]);


        // Home_page Début de la section 6 promo  du fin (control)




        // Home_page Début de la section 7 promo  du début (control)

        $wp_customize->add_control('contact_control_titre', [
            'label' => 'Changer le titre principal 1',
            'section' => 'contact_section',
            'settings' => 'contact_id_titre',

        ]);


        $wp_customize->add_control('contact_control_text', [
            'label' => 'Changer le text',
            'section' => 'contact_section',
            'settings' => 'contact_id_textarea',
            'type' => 'textarea'

        ]);

        $wp_customize->add_control('contact_control_titre2', [
            'label' => 'Changer le titre princpal 2',
            'section' => 'contact_section',
            'settings' => 'contact_id_titre_2',

        ]);

        $wp_customize->add_control('contact_control_lieu_1_2', [
            'label' => 'Changer le lieu + adress ( mettre / pour passer à la ligne en dessous) ',
            'section' => 'contact_section',
            'settings' => 'contact_id_lieu_1_2',

        ]);



        $wp_customize->add_control('contact_control_numero_3', [
            'label' => 'Changer le numero',
            'section' => 'contact_section',
            'settings' => 'contact_id_numero_3',

        ]);

        $wp_customize->add_control('contact_control_mail_4', [
            'label' => 'Changer le mail',
            'section' => 'contact_section',
            'settings' => 'contact_id_mail_4',

        ]);

        // Home_page Début de la section 7 promo  du fin (control)


    }
}

add_action('customize_register', [MgCustomizer::class, 'rajout_section_about_bg']);

