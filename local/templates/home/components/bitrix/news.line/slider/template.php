<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="slide-one-item home-slider owl-carousel">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <div 
        class="site-blocks-cover" 
        style="background-image: url(/local/templates/home/images/hero_bg_1.jpg
);" 
        data-aos="fade" 
        data-stellar-background-ratio="0.5">
        <div class="text">
          <h2><?echo $arItem["NAME"]?></h2>
          <p class="location"><span class="property-icon icon-room"></span> <?echo $arItem["PREVIEW_TEXT"]?></p>
          <p class="mb-2"><strong>1150 руб</strong></p>
          <p class="mb-0"><a href="#" class="text-uppercase small letter-spacing-1 font-weight-bold">Подбронее</a></p>
        </div>
      </div>
    <?endforeach;?>
</div>