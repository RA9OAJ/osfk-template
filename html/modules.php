<?php
defined('_JEXEC') or die;

/*function modChrome_no($module, &$params, &$attribs)
{
	if ($module->content)
	{
		echo $module->content;
	}
}*/

function modChrome_well($module, &$params, &$attribs)
{
	if($module->position !== 'left' && $module->position !== 'right')
	{
		echo $module->content;
		return;	
	}
	
	$moduleTag     = $params->get('module_tag', 'div');
	$bootstrapSize = (int) $params->get('bootstrap_size', 0);
	$moduleClass   = $bootstrapSize != 0 ? ' span' . $bootstrapSize : '';
	$headerTag     = htmlspecialchars($params->get('header_tag', 'h3'), ENT_COMPAT, 'UTF-8');
	$headerClass   = htmlspecialchars($params->get('header_class', 'page-header'), ENT_COMPAT, 'UTF-8');

	if ($module->content)
	{
		echo '<' . $moduleTag . ' class="well ' . htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8') . $moduleClass . '">';

			if ($module->showtitle)
			{
				echo '<' . $moduleTag . ' class="well-header">';
				echo '<' . $headerTag . ' class="' . $headerClass . '">' . $module->title . '</' . $headerTag . '>';
				echo '</' . $moduleTag . '>';
			}
			
			echo '<' . $moduleTag . ' class="well-body">';
			echo $module->content;
			echo '</' . $moduleTag . '>';
		echo '</' . $moduleTag . '>';
	}
}


?>