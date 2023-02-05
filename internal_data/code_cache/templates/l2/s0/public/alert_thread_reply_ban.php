<?php
// FROM HASH: 6510dc1e694a02d51c94ec793b4499a0
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__vars['extra']['expiry']) {
		$__finalCompiled .= '
	' . 'Вы не сможете отвечать в теме ' . ((((('<a href="' . $__templater->func('link', array('threads', $__vars['content'], ), true)) . '" class="fauxBlockLink-blockLink">') . $__templater->func('prefix', array('thread', $__vars['thread'], ), true)) . $__templater->escape($__vars['content']['title'])) . '</a>') . ' до ' . $__templater->func('date', array($__vars['extra']['expiry'], ), true) . '.' . '
';
	} else {
		$__finalCompiled .= '
	' . 'Вы больше не сможете отвечать в теме ' . ((((('<a href="' . $__templater->func('link', array('threads', $__vars['content'], ), true)) . '" class="fauxBlockLink-blockLink">') . $__templater->func('prefix', array('thread', $__vars['thread'], ), true)) . $__templater->escape($__vars['content']['title'])) . '</a>') . '.' . '
';
	}
	$__finalCompiled .= '
';
	if ($__vars['extra']['reason']) {
		$__finalCompiled .= 'Причина' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['extra']['reason']);
	}
	return $__finalCompiled;
}
);