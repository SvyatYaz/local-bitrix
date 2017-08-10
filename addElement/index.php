<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Добавление элемента"); ?>


    <form action="" method="post" enctype="multipart/form-data">


            <label for="user-name">Название<sup>*</sup></label>
         <input type="text" name="name" value="">

        <p>Описание: <input type="text" name="description" value=""></p>
        <p>Город: <input type="text" name="city" value=""></p>
        <p>Дата: <input type="date" name="date" value=""></p>
        <p>Добавить файл: <input type="file" name="file"></p>
        <input type="submit" value="Отправить данные">
        <input type="reset" value="Очистить данные">

    </form>

    <?php
echo "<pre>";
print_r($_POST["date"]);
 //if (isset($_POST["name"])) {
    $el = new CIBlockElement;
    $date = new DateTime($_POST["date"]);

    $PROP = array();
//    $PROP['NAME'] = $_POST['name']; //Свойство Строка
//    //$PROP['DESCRIPTION'] = $_POST['description']; //Свойство список
       $PROP['CITY'] = $_POST['city']; //Свойство чекбокс
       $PROP['YEAR'] = $date->format('d.m.Y'); //$_POST["date"];

    $NewFields = Array(
       // "MODIFIED_BY" => $USER->GetID(), // элемент изменен текущим пользователем
       // "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
        "IBLOCK_ID" => 5,
        "PROPERTY_VALUES" => $PROP,
        "CODE" => $_POST["name"],
        "NAME" => strip_tags($_REQUEST['name']),
        "PREVIEW_PICTURE" => $_FILES['file'],
        // "ACTIVE"         => "Y",            // активен
        "PREVIEW_TEXT"   => $_POST["description"]
        //"DETAIL_TEXT"    => "текст для детального просмотра",
        //    "DETAIL_PICTURE" => CFile::MakeFileArray($_SERVER["DOCUMENT_ROOT"]."/image.gif")
    );



  echo '<pre>';
print_r($NewFields);

    if ($PRODUCT_ID = $el->Add($NewFields))
        echo "New ID: " . $PRODUCT_ID;
    else
        echo "Error: " . $el->LAST_ERROR;
//}
?>





<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>