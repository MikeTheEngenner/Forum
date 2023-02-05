<?php
// FROM HASH: 772bf6a781774712de039b1f17b7931e
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.fr-toolbar .fr-more-toolbar.fr-expanded{
	background-color: @xf-editorBg;	 
}

.fr-box {
	.fr-basic {
		&.is-focused {
			border: none;
			border-radius: @xf-borderRadiusSmall;
		}
	}
}
.fr-box.fr-basic {
	border-radius: @xf-borderRadiusSmall;
	-webkit-border-radius: @xf-borderRadiusSmall;
	border: none;
}

.fr-toolbar.fr-top {
	border-radius: @xf-borderRadiusSmall;
	-webkit-border-radius: @xf-borderRadiusSmall @xf-borderRadiusSmall 0;
}

.fr-toolbar .fr-more-toolbar.fr-expanded {
	background-color: @xf-editorToolsBg;
}

.fr-box .fr-command.fr-btn.fr-open {
	&:not(:hover):not(:focus):not(:active) {
		background: @xf-editorButtonSelectedBg;
	}
}';
	return $__finalCompiled;
}
);