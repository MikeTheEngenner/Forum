<?php
// FROM HASH: 31862d16c26829d0d504a8b351ce69dc
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<a href="javascript:" class="notice-dismiss js-enablePushDismiss"></a>

<div data-xf-init="push-cta">
	<div class="u-alignCenter">
		<div class="js-initialMessage">
			' . '' . $__templater->escape($__vars['xf']['options']['boardTitle']) . ' запрашивает Ваше разрешение на <a href="' . $__templater->func('link', array('account/preferences', ), true) . '" class="js-enablePushLink">включение push-уведомлений</a>.' . '
		</div>
		<div class="js-dismissMessage" style="display: none">
			' . 'Мы настоятельно рекомендуем включить push-уведомления на данном устройстве, чтобы Вы могли быть в курсе последних событий на сайте.' . '
			<ul class="listInline listInline--bullet" style="margin-top: 5px">
				<li><a href="' . $__templater->func('link', array('account/preferences', ), true) . '" class="js-enablePushLink">' . 'Включить уведомления' . '</a></li>
				<li><a href="javascript:" class="js-dismissTemp">' . 'Спросить меня в следующий раз' . '</a></li>
				<li><a href="javascript:" class="js-dismissPerm">' . 'Никогда не спрашивать снова' . '</a></li>
			</ul>
		</div>
	</div>
</div>

';
	$__templater->inlineJs('
	jQuery.extend(true, XF.config, {
		skipPushNotificationSubscription: true
	});
');
	return $__finalCompiled;
}
);