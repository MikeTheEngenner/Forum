<?php
// FROM HASH: f7765c8f1e39adeaa2a354b96b129ffb
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->formInfoRow('Резервный код может быть использован, если у Вас нет доступа к другим способам проверки. После того, как код будет введён, его нельзя будет использовать ещё раз. Вы получите письмо по электронной почте, с уведомлением о том, что был использован резервный код.', array(
	)) . '

' . $__templater->formTextBoxRow(array(
		'name' => 'code',
		'autofocus' => 'autofocus',
		'inputmode' => 'numeric',
		'pattern' => '[0-9]*',
	), array(
		'label' => 'Резервный код',
	));
	return $__finalCompiled;
}
);