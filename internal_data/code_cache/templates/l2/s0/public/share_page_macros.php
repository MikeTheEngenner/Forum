<?php
// FROM HASH: ad3b5a96d7a00622d7562e7bd0f7eee8
return array(
'macros' => array('buttons' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'iconic' => false,
		'hideLink' => false,
		'label' => '',
		'pageUrl' => '',
		'pageTitle' => '',
		'pageDesc' => '',
		'pageImage' => '',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

	';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
					';
	if ($__vars['xf']['options']['facebookLike']) {
		$__compilerTemp1 .= '
						<a class="shareButtons-button shareButtons-button--brand shareButtons-button--facebook" data-href="https://www.facebook.com/sharer.php?u={url}">
							<i aria-hidden="true"></i>
							<span>' . 'Facebook' . '</span>
						</a>
					';
	}
	$__compilerTemp1 .= '

					';
	if ($__vars['xf']['options']['tweet']['enabled']) {
		$__compilerTemp1 .= '
						<a class="shareButtons-button shareButtons-button--brand shareButtons-button--twitter" data-href="https://twitter.com/intent/tweet?url={url}&amp;text={title}' . ($__vars['xf']['options']['tweet']['via'] ? ('&amp;via=' . $__templater->escape($__vars['xf']['options']['tweet']['via'])) : '') . ($__vars['xf']['options']['tweet']['related'] ? ('&amp;related=' . $__templater->escape($__vars['xf']['options']['tweet']['related'])) : '') . '">
							<i aria-hidden="true"></i>
							<span>' . 'Twitter' . '</span>
						</a>
					';
	}
	$__compilerTemp1 .= '

					';
	if ($__vars['xf']['options']['redditShare']) {
		$__compilerTemp1 .= '
						<a class="shareButtons-button shareButtons-button--brand shareButtons-button--reddit" data-href="https://reddit.com/submit?url={url}&amp;title={title}">
							<i aria-hidden="true"></i>
							<span>' . 'Reddit' . '</span>
						</a>
					';
	}
	$__compilerTemp1 .= '

					';
	if ($__vars['xf']['options']['pinterestShare']) {
		$__compilerTemp1 .= '
						<a class="shareButtons-button shareButtons-button--brand shareButtons-button--pinterest" data-href="https://pinterest.com/pin/create/bookmarklet/?url={url}&amp;description={title}&amp;media={image}">
							<i aria-hidden="true"></i>
							<span>' . 'Pinterest' . '</span>
						</a>
					';
	}
	$__compilerTemp1 .= '

					';
	if ($__vars['xf']['options']['tumblrShare']) {
		$__compilerTemp1 .= '
						<a class="shareButtons-button shareButtons-button--brand shareButtons-button--tumblr" data-href="https://www.tumblr.com/widgets/share/tool?canonicalUrl={url}&amp;title={title}">
							<i aria-hidden="true"></i>
							<span>' . 'Tumblr' . '</span>
						</a>
					';
	}
	$__compilerTemp1 .= '

					';
	if ($__vars['xf']['options']['whatsAppShare']) {
		$__compilerTemp1 .= '
						<a class="shareButtons-button shareButtons-button--brand shareButtons-button--whatsApp" data-href="https://api.whatsapp.com/send?text={title}&nbsp;{url}">
							<i aria-hidden="true"></i>
							<span>' . 'WhatsApp' . '</span>
						</a>
					';
	}
	$__compilerTemp1 .= '

					';
	if ($__vars['xf']['options']['emailShare']) {
		$__compilerTemp1 .= '
						<a class="shareButtons-button shareButtons-button--email" data-href="mailto:?subject={title}&amp;body={url}">
							<i aria-hidden="true"></i>
							<span>' . 'Электронная почта' . '</span>
						</a>
					';
	}
	$__compilerTemp1 .= '

					';
	if ($__vars['xf']['options']['webShare']) {
		$__compilerTemp1 .= '
						<a class="shareButtons-button shareButtons-button--share is-hidden"
							data-xf-init="web-share"
							data-title="' . $__templater->escape($__vars['pageTitle']) . '" data-text="' . $__templater->escape($__vars['pageDesc']) . '" data-url="' . $__templater->escape($__vars['pageUrl']) . '"
							data-hide=".shareButtons-button:not(.shareButtons-button--share)">

							<i aria-hidden="true"></i>
							<span>' . 'Поделиться' . '</span>
						</a>
					';
	}
	$__compilerTemp1 .= '

					';
	if ($__vars['xf']['options']['linkShare'] AND (!$__vars['hideLink'])) {
		$__compilerTemp1 .= '
						<a class="shareButtons-button shareButtons-button--link is-hidden" data-clipboard="{url}">
							<i aria-hidden="true"></i>
							<span>' . 'Ссылка' . '</span>
						</a>
					';
	}
	$__compilerTemp1 .= '
				';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
		';
		$__templater->includeCss('share_controls.less');
		$__finalCompiled .= '

		<div class="shareButtons ' . ($__vars['iconic'] ? 'shareButtons--iconic' : '') . '" data-xf-init="share-buttons" data-page-url="' . $__templater->escape($__vars['pageUrl']) . '" data-page-title="' . $__templater->escape($__vars['pageTitle']) . '" data-page-desc="' . $__templater->escape($__vars['pageDesc']) . '" data-page-image="' . $__templater->escape($__vars['pageImage']) . '">
			';
		if (!$__templater->test($__vars['label'], 'empty', array())) {
			$__finalCompiled .= '
				<span class="shareButtons-label">' . $__templater->escape($__vars['label']) . '</span>
			';
		}
		$__finalCompiled .= '

			<div class="shareButtons-buttons">
				' . $__compilerTemp1 . '
			</div>
		</div>
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
}
),
'share_clipboard_input' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'label' => '!',
		'text' => '!',
		'successText' => '',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	';
	$__templater->includeCss('share_controls.less');
	$__finalCompiled .= '

	';
	$__vars['id'] = $__templater->preEscaped($__templater->func('unique_id', array(), true));
	$__finalCompiled .= '

	<div class="shareInput" data-xf-init="share-input" data-success-text="' . $__templater->escape($__vars['successText']) . '">
		';
	if ($__vars['label']) {
		$__finalCompiled .= '
			<label class="shareInput-label" for="' . $__templater->escape($__vars['id']) . '">' . $__templater->escape($__vars['label']) . '</label>
		';
	}
	$__finalCompiled .= '
		<div class="inputGroup inputGroup--joined">
			<div class="shareInput-button inputGroup-text js-shareButton is-hidden"
				data-xf-init="tooltip" title="' . $__templater->filter('Скопировать в буфер обмена', array(array('for_attr', array()),), true) . '">

				<i aria-hidden="true"></i>
			</div>
			' . $__templater->formTextBox(array(
		'class' => 'shareInput-input js-shareInput',
		'value' => $__vars['text'],
		'readonly' => 'true',
		'id' => $__vars['id'],
	)) . '
		</div>
	</div>
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

';
	return $__finalCompiled;
}
);