
<!DOCTYPE html>

<?php
$message_sent=false;
if(isset($_POST['email'])&&$_POST['email']!=''){
   if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){


      $userName=$_POST['nom'];
      $userEmail=$_POST['email'];
      $tel=$_POST['tels'];
     
      $message=$_POST['message'];
      $to="houssam-osa@hotmail.fr";
      $body="";
      $body="From:".$userName."\r\n";
      $body.="Email:".$userEmail."\r\n";
      $body="Message:".$message."\r\n";
      mail($to,$message,$body);
      $message_sent=true;
   }



}


?>
<html lang="en-US" class="no-js scheme_default">
   
   <head>
      <title>Kawtar Print</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="format-detection" content="telephone=no">
      <style>
          .bigbigbig{width: 150px!important;
         height:70px !important;}
         
         </style>
      <style>
         .bbigbig{margin-top:auto!important;margin-bottom:auto!important;margin-left:auto!important;margin-right:auto!important;
         padding-top:auto!important;padding-bottom:auto!important;padding-right:auto!important;padding-left:auto!important;border-bottom:auto!important;
         border-top:auto!important;border-left:auto!important;border-right:auto!important;}
      </style>
      <style>.container-class-pvp {
         background-image: url(“bootstrap-5.2.0-beta1-dist\impression_plv.jpg”);
         background-repeat: no-repeat;
         background-position: center;
         background-size: 100% auto;
         width: 400px;
         height: 400px;
         border: 2px dashed #333;}
         </style>
      <link rel="stylesheet" href="1.CSS" type="text/css" media="all" />
      <link rel="stylesheet" href="2.CSS" type="text/css" media="all" />
      <link rel="stylesheet" href="3.CSS" type="text/css" media="all" />
      <link rel="stylesheet" href="4.CSS" type="text/css" media="all" />
      <link rel="stylesheet" href="5.CSS" type="text/css" media="all" />
      <link rel="stylesheet" href="6.CSS" type="text/css" media="all" />
      <link rel="stylesheet" href="7.CSS" type="text/css" media="all" />
      <link rel="stylesheet" href="8.CSS" type="text/css" media="all" />
      <link rel="stylesheet" href="9.CSS" type="text/css" media="all" />

      <link href="10.CSS" rel="stylesheet" type="text/css" media="all" />
      <link href="11.CSS" rel="stylesheet" type="text/css" media="all" />

      <link rel="stylesheet" href="12.CSS" type="text/css" media="all" />
      <link rel="stylesheet" href="13.CSS" type="text/css" media="all" />
      <link href="14.CSS" rel="stylesheet">

      <link rel="stylesheet" href="15.CSS" type="text/css" media="all" />
      <link rel="stylesheet" href="17.CSS" type="text/css" media="all" />
      <link rel="stylesheet" href="18.CSS" type="text/css" media="all" />
      <link rel="stylesheet" href="19.CSS" type="text/css" media="all" />
      <link rel="stylesheet" href="20.CSS" type="text/css" media="all" />
      <link rel="icon" href="kkkk-removebg-preview-poti.png" sizes="32x32" />
      <link rel="icon" href="kkkk-removebg-preview-poti.png" sizes="192x192" />
  
      <link rel="stylesheet" href="21.CSS" type="text/css" media="all" />

   </head>
   <body class="home page custom-background body_tag scheme_default body_style_wide blog_style_excerpt sidebar_hide expand_content remove_margins header_style_header-custom-18 header_position_default menu_style_top no_layout">
      <!-- Body wrap -->
      <?php
if($message_sent):
?>
   <h3>Merci, on va vous communiquer</h3>
<?php
else:
?>   
      <div class="body_wrap">
         <!-- Page wrap -->
         <div class="page_wrap">
       
         
            <header class="top_panel top_panel_custom top_panel_custom_18 without_bg_image scheme_default">
               <!-- Top panel -->
               <div class="top_panel_container sc_layouts_row sc_layouts_row_type_compact sc_layouts_row_delimiter sc_layouts_row_fixed">
                  <div class="sc_layouts_column sc_layouts_column_align_right sc_layouts_column_icons_position_left">
                     <!-- Logo -->
                     <div class="sc_content sc_content_default sc_float_left sc_align_left ">
                        <div class="sc_content_container ">
                           <div class="sc_layouts_item ">
                              <a href="acceuil.html" class="sc_layouts_logo sc_layouts_logo_default ">
                              <img class="logo_image container-fluid bigbigbig " src="kkkk-removebg-preview.png" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                     <!-- /Logo -->
                     <!-- Menu -->
                     <div class="sc_layouts_item">
                        <nav class="sc_layouts_menu sc_layouts_menu_default menu_hover_slide_line hide_on_mobile" data-animation-in="fadeInUpSmall" data-animation-out="fadeOutDownSmall">
                           <ul id="menu-main-menu" class="sc_layouts_menu_nav">
                              
                              <li class="menu-item    ">
                                 <a href="acceuil.html">
                                 <span>Accueil</span>
                                 </a>
                              </li>

                              <li class="menu-item   ">
                                 <a href="acceuil.html#jump">
                                 <span>A propos</span>
                                 </a>
                              </li>
                              
                              <li class="menu-item menu-item-has-children">
                                 <a href="#">
                                 <span>Services</span>
                                 </a>
                                 <ul class="sub-menu">
                                                                  <li class="menu-item">
                                       <a href="numerique.html">
                                       <span>IMPRESSION NUM&Eacute;RIQUE</span>
                                       </a>
                                    </li>

                                                                     <li class="menu-item">
                                       <a href="offset.html">
                                       <span>IMPRESSION OFFSET</span>
                                       </a>
                                    </li>

                                                                     <li class="menu-item">
                                       <a href="publicitaire.html">
                                       <span>IMPRESSION PUBLICITAIRE</span>
                                       </a>
                                    </li>

                                                                  </ul>
                              </li>
                              
                              <li class="menu-item   ">
                                 <a href=contact.php>
                                 <span>Contacts</span>
                                 </a>
                              </li>
                              <!-- Menu item : Contacts -->
                           </ul>
                        </nav>
                        <div class="sc_layouts_iconed_text sc_layouts_menu_mobile_button">
                           <a class="sc_layouts_item_link sc_layouts_iconed_text_link" href="#">
                           <span class="sc_layouts_item_icon sc_layouts_iconed_text_icon trx_addons_icon-menu">Menu</span>
                           </a>
                        </div>
                     </div>
                     <!-- /Menu -->
                     <div class="sc_layouts_item phone_header">
                        <span class="sc_form_info_data">
                          <a href="tel:+212 5 24 33 65 61">+212 6 66 66 66 66</a><br><a href="tel:+212 5 24 42 08 19">+212 6 66 66 66 66</a>
                         </span>
                     </div>
                     
                     <!-- Socials -->
                                          <!-- /Socials -->
                  </div>
               </div>
               <!-- /Top panel -->
                                <div class="breadcrumbs_container sc_layouts_row sc_layouts_row_type_normal sc_layouts_hide_on_frontpage scheme_dark" style="background: url('bg_cta.jpg') center center no-repeat !important; background-size: cover !important">
                        <div class="sc_layouts_column sc_layouts_column_align_center sc_layouts_column_icons_position_left">
                            <div class="sc_content sc_content_default">
                                <div class="sc_content_container">
                                    <div class="sc_layouts_item">
                                        <div class="sc_layouts_title">
                                            <div class="sc_layouts_title_title">
                                                <h2 class="sc_layouts_title_caption">Contactez nous</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            </header>
            <!-- /Header -->
            <div class="clearfix"></div>
            <!-- Menu mobile -->
            <div class="menu_mobile_overlay"></div>
            <div class="menu_mobile menu_mobile_fullscreen scheme_dark">
               <div class="menu_mobile_inner">
                  <a class="menu_mobile_close icon-cancel"></a>
                  <nav class="menu_mobile_nav_area">
                     <ul id="menu_mobile-main-menu" class="">
                        <li class="menu-item   ">
                           <a href="acceuil.html">
                           <span>Accueil</span>
                           </a>
                        </li>

                        <li class="menu-item  ">
                           <a href="acceuil.html#jump">
                           <span>À propos</span>
                           </a>
                        </li>
                        
                        <li class="menu-item menu-item-has-children">
                           <a href="#">
                           <span>Services</span>
                           </a>
                          <ul class="sub-menu">
                                                                  <li class="menu-item">
                                       <a href="numerique.html">
                                       <span>IMPRESSION NUM&Eacute;RIQUE</span>
                                       </a>
                                    </li>

                                                                     <li class="menu-item">
                                       <a href="offset.html">
                                       <span>IMPRESSION OFFSET</span>
                                       </a>
                                    </li>

                                                                     <li class="menu-item">
                                       <a href="publicitaire.html">
                                       <span>IMPRESSION PUBLICITAIRE</span>
                                       </a>
                                    </li>

                                                                  </ul>
                        </li>
                       
                        <li class="menu-item  ">
                           <a href="contact.php">
                           <span>Contacts</span>
                           </a>
                        </li>
                     </ul>
                  </nav>
              
                  <!-- Socials -->
                                     <!-- /Socials -->
               </div>
            </div>           
                <div class="page_content_wrap scheme_default">
                    <!-- Content -->
                    <div class="content">
                        <article class="post_item_single">
                            <div class="post_content">
                                <!-- Our Contacts -->
                                <div class="copypress-custom-bg-2">
                                    <div class="content_wrap sc_layouts_column_icons_position_left">
                                        <div class="empty_space height_9_4em"></div>
                                        <div id="sc_form_3" class="sc_form sc_form_detailed simple sc_align_default">
                                            <div class="trx_addons_columns_wrap">
                                                <div class="trx_addons_column-1_2">
                                                    <div class="sc_form_info">
                                                        <h2 class="sc_item_title sc_form_title sc_align_default sc_item_title_style_default">Coordonnées</h2>
                                                        <div class="sc_form_info_item sc_form_info_item_address">
                                                            <span class="sc_form_info_icon"></span>
                                                            <span class="sc_form_info_area">
                                                                <span class="sc_form_info_data">
                                                                    <span><b>Localisation :</b> <a href="https://www.google.com/maps/place/Kawtar+Print+%D9%83%D9%88%D8%AB%D8%B1+%D8%A8%D8%B1%D8%A7%D9%86%D8%AA%E2%80%AD/@34.0172661,-6.8462741,17z/data=!4m5!3m4!1s0xda76c64e82911c1:0xeda53a58955f0201!8m2!3d34.0173728!4d-6.8446433" target="_blank">271 Av. Hassan II, Rabat 10000, Maroc</a></span>
                                                                </span>
                                                                <div class="empty_space height_1em"></div>
                                                                <span class="sc_form_info_data">
                                                                    <span><b><a href="tel:+212 6 61 23 94 98"><i class="fa fa-phone-square c-ico" style="color: #ffffff"></i> +212 6 61 23 94 98</a></b></span>
                                                                    <span><b><a href="tel:+212 5 37 73 36 35"><i class="fa fa-phone-square c-ico" style="color: #ffffff"></i> 
                                                                    +212 5 37 73 36 35</a></b></span>
                                                                </span>
                                                            </span>
                                                        </div>

                                                        
                                                        <div class="sc_form_info_item sc_form_info_item_email">
                                                            <span class="sc_form_info_icon"></span>
                                                            <span class="sc_form_info_area">
                                                                <span class="sc_form_info_data">
                                                                    <a href="mailto:kawtarprint@gmail.com">kawtarprint@gmail.com</a>
                                                                </span>
                                                                <span class="sc_form_info_data">
                                                                  
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div><div class="trx_addons_column-1_2">
                                                    <form id="email_form" class="sc_form_form " method="post">
                                                        <h2 class="sc_item_title sc_form_title sc_align_default sc_item_title_style_default">Ecrivez-nous</h2>
                                                        <label class="sc_form_field sc_form_field_name required">
                                                            <span class="sc_form_field_wrap">
                                                                <input type="text" id="nom" name="nom" value="" aria-required="true" placeholder="Nom & Prénom">
                                                            </span>
                                                        </label>
                                                        <label class="sc_form_field sc_form_field_name required">
                                                            <span class="sc_form_field_wrap">
                                                                <input type="text" id="tels" nom="tels"  placeholder="Téléphone">
                                                            </span>
                                                        </label>
                                                        <label class="sc_form_field sc_form_field_email required">
                                                            <span class="sc_form_field_wrap">
                                                                <input type="text" name="email" id="email" value="" aria-required="true" placeholder="Email">
                                                            </span>
                                                        </label>
                                                        <label class="sc_form_field sc_form_field_message required">
                                                            <span class="sc_form_field_wrap">
                                                                <textarea name="message" id="message" aria-required="true" placeholder="Message"></textarea>
                                                            </span>
                                                        </label>
                                                        <div class="sc_form_field sc_form_field_button">
                                                            <button id="submit" name="submit"  class="sc_button_dark">Envoyer</button>
                                                        </div>
                                                        <div class="trx_addons_message_box sc_form_result"></div>
                                                             <div class="form-message-c"> </div>

                                                    </form>
                                                </div>
                                                <?php
endif;
?>
                                            </div>
                                        </div>
                                        <div class="empty_space height_9_4em"></div>
                                    </div>
                                </div>
                                <!-- /Our Contacts -->
                                <!-- Google Map -->
                                <div class="sc_layouts_column_icons_position_left">
                                    <div id="" class="sc_googlemap_wrap">
                                          <div id="map_place" style="width: 100%;height: 500px"></div>
                                            <!-- <div id="sc_googlemap_3_1" class="sc_googlemap_marker" data-latlng="" data-address="" data-description="" data-title="" data-icon="assets/images/marker.png"></div>

                                            <div id="sc_googlemap_3_2" class="sc_googlemap_marker" data-latlng="" data-address="" data-description="" data-title="" data-icon="assets/images/marker.png"></div> -->
                                    </div>
                                </div>
                                <!-- /Google Map -->
                            </div>
                        </article>
                    </div>
                    <!-- /Content -->
                </div>
                <!-- /Page content wrap -->
            
            
          <!-- Footer -->
          <footer class="footer_wrap footer_custom scheme_dark">
            <div class="sc_content sc_content_default sc_content_width_1_1">
               <div class="sc_content_container">
                  <!-- Button -->
                  <div>
                     <p>© 2022 Kawtar Print</p>
                  </div>
                  <div class="sc_layouts_item">
                     <div class="sc_item_button sc_button_wrap">
                        <a href="contact.php" class="sc_button sc_button_pink sc_button_size_normal sc_button_icon_left">
                        <span class="sc_button_text">
                        <span class="sc_button_title">Prise de RDV</span>
                        </span>
                        </a>
                     </div>
                  </div>
                 
               </div>
            </div>
         </footer>
         <!-- /Footer -->


   <script type="text/javascript" src="1.js"></script>
   <script type="text/javascript" src="2.js"></script>
   <script type="text/javascript" src="3.js"></script>
   <script type="text/javascript" src="4.js"></script>
   <script type="text/javascript" src="5.js"></script>
   <script type="text/javascript" src="6.js"></script>
   <script type="text/javascript" src="7.js"></script>
   <script type='text/javascript' src='8.js'></script>
   <script type="text/javascript" src="9.js"></script>
   <script type="text/javascript" src="10.js"></script>
   <script type="text/javascript" src="11.js"></script>
   <script type="text/javascript" src="12.js"></script>
   <script type="text/javascript" src="13.js"></script>
   <script type="text/javascript" src="14.js"></script>
   <script type="text/javascript" src="15.js"></script>
   <script type="text/javascript" src="16.js"></script>
   <script type="text/javascript" src="17.js"></script>
   <script type="text/javascript" src="18.js"></script>
   <script type="text/javascript" src="19.js"></script>
   <script type="text/javascript" src="20.js"></script>
   <script type="text/javascript" src="21.js"></script>
   <script type="text/javascript" src="bootstrap-5.2.0-beta1-dist\js"></script>
   
   

      
      <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>

      <script type="text/javascript">
         $(document).ready(function () {  
            $("#owl-demo").owlCarousel({  
         
                 navigation: true,
                 items:6,
                 slideSpeed: 300,
                 paginationSpeed: 400,
                 singleItem: true,
                 autoPlay: true
         
             });
       
         });
      </script>
   
         </div>
         <!-- /Page wrap -->
      </div>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>


 
<script>
  function initMap() { 
 var map = new google.maps.Map(document.getElementById('map_place'), { 
          center: { lat: 34.017541762811454, lng: -6.84464330002289},
          zoom: 12,
        });

       var image = 'marker.png';
        var beachMarker = new google.maps.Marker({ 
          position: { lat:34.017541762811454 , lng: -6.84464330002289},
          map: map,
          icon: image
        });

       
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiF0vj7XRGda-3Br6frthQomNI5dEjIzU&callback=initMap" type="text/javascript"></script>

   </body>
</html>