<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/manufacturers/([a-zA-Z_0-9-]+)/(\$|\\?.*)#",
		"RULE" => "ELEMENT_CODE=\$1",
		"ID" => "",
		"PATH" => "/manufacturers/detail.php",
	),
	array(
		"CONDITION" => "#^/services/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/services/index.php",
	),
	array(
		"CONDITION" => "#^/products/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/products/index.php",
	),
	array(
		"CONDITION" => "#^/catalog/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/tovar/index.php",
	),
	array(
		"CONDITION" => "#^/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/news/index.php",
	),
    array(
        "CONDITION" => "#^/catalog/#",
        "RULE" => "",
        "ID" => "bitrix:catalog",
        "PATH" => "/tovar/index.php",
    ),
);

?>