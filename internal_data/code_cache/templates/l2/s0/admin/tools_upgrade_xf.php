<?php
// FROM HASH: 4d2630090318e239b2764726c6e2a988
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Обновление XenForo');
	$__finalCompiled .= '

' . $__templater->form('
	<div class="block-container">
		<div class="block-body block-row">
			' . 'Версия XenForo, доступная для обновления: ' . $__templater->escape($__vars['availableUpdate']['version_string']) . '<br />
<br />
Вы можете выполнить обновление до этой версии из панели управления. Если Вы продолжите, новая версия будет загружена, файлы скопированы, и обновление будет выполнено автоматически.<br />
<br />
Обратите внимание, что если рекомендуется делать обновление определённой версии через консоль (с помощью CLI), то Вам будет предоставлена возможность использовать этот вариант, вместо обновления в браузере.' . '

			<div class="block-rowMessage block-rowMessage--important">
				<b>' . 'Примечание' . $__vars['xf']['language']['label_separator'] . '</b>
				' . 'Прежде чем продолжить, настоятельно рекомендуется создать резервную копию базы данных и файлов. Это не делается автоматически.' . '
			</div>
		</div>
		' . $__templater->formSubmitRow(array(
		'icon' => 'download',
		'submit' => 'Загрузить и обновить' . $__vars['xf']['language']['ellipsis'],
	), array(
		'rowtype' => 'simple',
	)) . '
	</div>
	' . $__templater->formHiddenVal('confirm_version_id', $__vars['availableUpdate']['version_id'], array(
	)) . '
', array(
		'action' => $__templater->func('link', array('tools/upgrade-xf', ), false),
		'class' => 'block',
	));
	return $__finalCompiled;
}
);