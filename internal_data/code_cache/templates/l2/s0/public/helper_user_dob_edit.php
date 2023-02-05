<?php
// FROM HASH: f450071d34f4e9749622d127f92bf419
return array(
'macros' => array('dob_edit' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'dobData' => array(),
		'row' => true,
		'required' => false,
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	';
	$__vars['inputGroup'] = $__templater->preEscaped('
		<div class="inputGroup inputGroup--auto">
			' . $__templater->formSelect(array(
		'name' => 'dob_month',
		'value' => ($__vars['dobData']['dob_month'] ?: 0),
	), array(array(
		'value' => '0',
		'_type' => 'option',
	),
	array(
		'value' => '1',
		'label' => 'Январь',
		'_type' => 'option',
	),
	array(
		'value' => '2',
		'label' => 'Февраль',
		'_type' => 'option',
	),
	array(
		'value' => '3',
		'label' => 'Март',
		'_type' => 'option',
	),
	array(
		'value' => '4',
		'label' => 'Апрель',
		'_type' => 'option',
	),
	array(
		'value' => '5',
		'label' => 'Май',
		'_type' => 'option',
	),
	array(
		'value' => '6',
		'label' => 'Июнь',
		'_type' => 'option',
	),
	array(
		'value' => '7',
		'label' => 'Июль',
		'_type' => 'option',
	),
	array(
		'value' => '8',
		'label' => 'Август',
		'_type' => 'option',
	),
	array(
		'value' => '9',
		'label' => 'Сентябрь',
		'_type' => 'option',
	),
	array(
		'value' => '10',
		'label' => 'Октябрь',
		'_type' => 'option',
	),
	array(
		'value' => '11',
		'label' => 'Ноябрь',
		'_type' => 'option',
	),
	array(
		'value' => '12',
		'label' => 'Декабрь',
		'_type' => 'option',
	))) . '
			<span class="inputGroup-splitter"></span>
			' . $__templater->formTextBox(array(
		'name' => 'dob_day',
		'value' => ($__vars['dobData']['dob_day'] ?: ''),
		'pattern' => '\\d*',
		'size' => '4',
		'maxlength' => '2',
		'placeholder' => 'День',
	)) . '
			<span class="inputGroup-splitter"></span>
			' . $__templater->formTextBox(array(
		'name' => 'dob_year',
		'value' => ($__vars['dobData']['dob_year'] ?: ''),
		'pattern' => '\\d*',
		'size' => '6',
		'maxlength' => '4',
		'placeholder' => 'Год',
	)) . '
		</div>
	');
	$__finalCompiled .= '
	';
	if ($__vars['row']) {
		$__finalCompiled .= '
		' . $__templater->formRow('

			' . $__templater->filter($__vars['inputGroup'], array(array('raw', array()),), true) . '
		', array(
			'rowtype' => 'input',
			'label' => 'Дата рождения',
			'hint' => ($__vars['required'] ? 'Обязательное поле' : ''),
		)) . '
		';
	} else {
		$__finalCompiled .= '
		' . $__templater->filter($__vars['inputGroup'], array(array('raw', array()),), true) . '
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';

	return $__finalCompiled;
}
);