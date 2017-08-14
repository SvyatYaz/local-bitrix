<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<//?die(print_r($arResult));?>
<!--<style>-->
<!--    .float {-->
<!--        float: left;-->
<!--          }-->
<!---->
<!--</style>-->


<div>
    <? foreach($arResult["ITEMS"] as $arItem):?>

     <div class="float">   <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" style="float:left" /> <br> </div>
<!--        <img src="--><?//=$arSection["PICTURE"]["SRC"]?><!--" title="--><?//=$arSection["NAME"]?><!--" style="float:left"/>-->
    <div><h3><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></h3>
        <?echo $arItem["PREVIEW_TEXT"];?>

       <p><?=$arItem['PROPERTIES']['CITY']['VALUE'];?></p>
        <p><?=$arItem['TIMESTAMP_X']=date("d.m.y")?></p>

        </div>
    <?endforeach;?>
    <pre> <? print_r($arResult);?>
</div>

