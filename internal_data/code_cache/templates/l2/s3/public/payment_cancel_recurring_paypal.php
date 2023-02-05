<?php
// FROM HASH: 7f1e17ce29f3f5071fbac2c3c66d3238
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<div>
	' . $__templater->button('
		' . 'Отменить' . '
	', array(
		'href' => $__vars['endpoint'] . '?cmd=_manage-paylist',
		'target' => '_blank',
	), '', array(
	)) . '
</div>';
	return $__finalCompiled;
}
);