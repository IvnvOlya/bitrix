<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>

    <?
    use Bitrix\Main\Page\Asset;
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css");
    Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500' rel='stylesheet' type='text/css'>");

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/jquery-ui.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap-datepicker.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/mediaelementplayer.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/animate.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/flaticon/font/flaticon.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/fl-bigmug-line.csss");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/aos.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");

  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-migrate-3.0.1.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-ui.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/popper.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/mediaelement-and-player.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.stellar.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.countdown.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap-datepicker.min.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/aos.js");
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
    ?>

  </head>
  <body>
  <?$APPLICATION->ShowPanel();?>

  <div class="site-loader"></div>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <?$APPLICATION->IncludeComponent(
	      "bitrix:main.include",
	      "",
	      Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/phone.php"
	      )
              );?>

              <?$APPLICATION->IncludeComponent(
	      "bitrix:main.include",
	      "",
	      Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/email.php"
	      )
              );?>
            </p>  
          </div>
          
            <?$APPLICATION->IncludeComponent(
	      "bitrix:main.include",
	      "",
	      Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/icons.php"
	      )
              );?>
          
        </div>
      </div>
      
    </div>
    <div class="site-navbar">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/title.php"
                    )
                );?>
              </h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/nav.php"
                    )
              );?>
              </nav>
            </div>
          </div>
        </div>
      </div>
  </div>

    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/slides.php"
        )
    );?>

    <div class="py-5">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
            <div class="feature d-flex align-items-start">
              <span class="icon mr-3 flaticon-house"></span>
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/cell_1.php"
                )
            );?>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
            <div class="feature d-flex align-items-start">
              <span class="icon mr-3 flaticon-rent"></span>
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/cell_2.php"
                )
            );?>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
            <div class="feature d-flex align-items-start">
              <span class="icon mr-3 flaticon-location"></span>
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/cell_3.php"
                )
            );?>
            </div>
          </div>
        </div>
      </div>
    </div>
 
    <div class="site-section site-section-sm bg-light">
        <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/properties.php"
                )
            );?>
    </div>

    <div class="site-section">
        <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/services.php"
                )
            );?>
    </div>

    <div class="site-section bg-light">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/blog.php"
                )
            );?>
    </div>
    
    <div class="site-section">
    <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/agents.php"
                )
            );?>
    </div>
