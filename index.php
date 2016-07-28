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
$doc->addStyleSheet($this->baseurl . '/templates/system/css/system.css');
$doc->addStyleSheet($template_url . '/fonts.php');
$doc->addStyleSheet($template_url . '/css/general.css');


JHtml::_('bootstrap.framework');

?>

<html>
	<head>
		<jdoc:include type="head"/>
	</head>
	<body>
		<!--Start Header-->
		<div class="header">
			<div class="_osfk_hborder">	
				<div class="_osfk_logo"></div>
				<div class="_osfk_hbnr">
					<!--Start banner-->
					<div class="_osfk_hbanner"></div>
					<!--End banner-->
				</div>
				<div class="_osfk_hdr">
					<div class="_osfk_header">
						<jdoc:include type="modules" name="header" />
					</div>
				</div>				
			</div>
		</div>
		<!--End Header-->
		<!--Start containers-->
		<div class="right_back">
			<div class="content_back">
				<div class="left_back">
					<!--Start content container -->
					<div class="main_box">
						<div class="main_col">
						<div class="_osfk_hmenu">
							<jdoc:include type="modules" name="menu" style="well"/>
						</div>
							<jdoc:include type="message" />
							<jdoc:include type="component"/>
						</div>
						<!--Start Left column-->
						<div class="left_col">
							<jdoc:include type="modules" name="left" style="well"/>
						</div>
						<!--End Left column-->
						<!--Start Right column-->
						<div class="right_col">
							<jdoc:include type="modules" name="right" style="well"/>
						</div>
						<!--End Right column-->
					</div>
					<!--End content container-->
				</div>
			</div>
		</div>
		<!--End containers-->		
		<!--Start Footer-->
		<div class="footer">
			<jdoc:include type="modules" name="footer" style="well" />
		</div>
		<!--End Footer-->	
	</body>
</html>