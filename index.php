<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Биржа недвижимости");
?>

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


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>