<?php
// FROM HASH: 67b175d238752dc80811714e32b408a8
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.p-sectionLinks, .p-header-content {
	display: none;
}

.p-nav-inner {
	align-items: center;
} 

.p-nav-list {
	> li {
		margin-left: 21px;
		&:first-child {
			margin-left: 32px;
		}
	}
}
.p-nav-smallLogo {
	display: block;
	max-width: ~"@{xf-publicLogoWidth}px";
	margin-left: -20px;
	margin-right: 20px;
	img {
		max-height: ~"@{xf-publicLogoHeight}px";
	}
}

.p-navSticky {
	box-shadow: 4px 4px 35px 12px rgba(189,0,40,0.4);
}


.p-navgroup {
	border-radius: @xf-borderRadiusMedium;
	display: flex;
	align-items: center;
	&--guest {
		color: @xf-textColor;
		font-size: 14px;
		background: none;
		text-transform: uppercase;
		.p-navgroup-link {
			border-left: 0;
			&:last-of-type {
				padding: 15px;
				margin-right: 15px;
			}
			&.p-navgroup-link--logIn {
				order: 1;
				display: flex;
				align-items: center;
				justify-content: center;
				width: 150px;
				height: 50px;
				line-height: 20px;
				background: xf-diminish(@xf-buttonBg, 21.2%);
				border-radius: 20px;
				background: -moz-radial-gradient(circle, @xf-buttonBg 0%, @xf-buttonPrimaryBg 100%);
				background: -webkit-radial-gradient(circle, @xf-buttonBg 0%, @xf-buttonPrimaryBg 100%);
				background: radial-gradient(circle, @xf-buttonBg 0%, @xf-buttonPrimaryBg 100%);
				filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="@xf-buttonBg", endColorstr="@xf-buttonPrimaryBg", GradientType=1);
				box-shadow: 4px 4px 35px 12px rgba(189,0,40,0.4);
				&:hover {
					.m-transition();
					opacity: 0.9;
				}
			}
		}
	}
}

[data-logged-in="false"] {
	.p-nav-opposite  {
		margin-right: 0;
	}
	.p-navgroup-link--search {
		display: none;
	}
}


@media (max-width: @xf-publicNavCollapseWidth)
{
	.p-navgroup-link--whatsnew
	{
		display: none;
	}
}';
	return $__finalCompiled;
}
);