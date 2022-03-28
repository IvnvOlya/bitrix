
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/footer_about.php"
                    )
                );?>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/footer_nav.php"
                    )
                );?>
          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/footer_follow.php"
                    )
                );?>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
             <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/footer_text.php"
                    )
                );?>
          </div> 
        </div>
      </div>
    </footer>

  </body>
</html>