<?php
// FROM HASH: 2fc3cad51287db427aab7286855c189e
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.evolveRP-nodeIcons(@unreadImage; @readImage: false; @height: 40px; @width: 40px) {
	.node {
		.node-icon i {
			&:before {
				content: none;
			}

			.node--read& {
				& when (@readImage = false) {
					-webkit-filter: grayscale(100%);
					filter: grayscale(100%);
				}
			}

			.node--forum&,
			.node--category& {
				& when (isurl(@unreadImage)) {
					background: @unreadImage no-repeat;
				}
				& when (ispixel(@height)), (ispixel(@width)) {
					height: @height;
					width: @width;
				}

				.node--read& when (isurl(@readImage)) {
					background: @readImage no-repeat;
				}
			}

			.node--page& {
				& when (isurl(@unreadImage)) {
					background: @unreadImage no-repeat;
				}
				& when (ispixel(@height)), (ispixel(@width)) {
					height: @height;
					width: @width;
				}
			}

			.node--link& {
				& when (isurl(@unreadImage)) {
					background: @unreadImage no-repeat;
				}
				& when (ispixel(@height)), (ispixel(@width)) {
					height: @height;
					width: @width;
				}
			}
		}
	}
}

.evolveRP-nodeIcons(url("' . $__templater->func('asset', array('icon', ), true) . '/node.png"); url("' . $__templater->func('asset', array('icon', ), true) . '/node.png"); 36px; 46px);

.node-stats 
{
	width: 150px;
	font-family: \'Gotham Pro Light\';
	.pairs.pairs--rows {
		>dt {
			color: #fff;
		}
	}
}

.node-body {
	padding: 0 @xf-blockPaddingH;
}

.node-icon {
	padding: 0;
}

.node-title {
 	a {
		font-size: 14px;
		color: @xf-textColor;
		font-weight: @xf-fontWeightNormal;
		font-family: \'Gotham Pro Medium\';
	}
}

.node-description {
	font-size: 14px;
    color: @xf-textColor;
    font-family: \'Gotham Pro Light\';
}

.node-meta
{
	font-size: @xf-fontSizeSmallest;
}';
	return $__finalCompiled;
}
);