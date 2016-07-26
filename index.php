<?php
defined('_JEXEC') or die;

//Определяем необходимые переменные
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$lang = JFactory::getLanguage();
$menu = $app->getMenu();

//$thise = new JDocumentHtml();
$template_url = $this->baseurl . '/templates/' . $this->template;

//Добавляем таблицы стилей
$doc->addStyleSheet($template_url . '/fonts.php');
$doc->addStyleSheet($template_url . '/css/general.css');

?>

<html>
	<head>
		<jdoc:include type="head"/>
	</head>
	<body>
		<div class="global_box">
			<div class="header">
				<div class="_osfk_hborder">
					
				</div>
				<jdoc:include type="modules" name="header" />
			</div>
			<div class="main_box">
				<div class="main_col">
					<div class="_osfk_hmenu">
						<jdoc:include type="modules" name="menu"/>
					</div>
					<jdoc:include type="component"/>
				</div>
				<div class="left_col">
					<jdoc:include type="modules" name="left"/>
				</div>
				<div class="right_col">
					<jdoc:include type="modules" name="right"/>
				</div>
			</div>
			<div class="footer">
				<jdoc:include type="modules" name="footer" />
			</div>
		</div>			
	</body>
</html>