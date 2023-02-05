<?php
// FROM HASH: 314ab57285de45439ecfceb8bf06ff20
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.userBanner {
    font-size: 75%;
    font-weight: 400;
    font-style: normal;
    padding: 1px 6px;
    border: 1px solid transparent;
    border-radius: 2px;
    text-align: center;
    display: inline-block;
}
.userBanner.userBanner--staff {
    color: white;
	background: #eb2e4a;
    background-color: #eb2e4a;
    border-color: #eb2e4a;
    box-shadow: 0px 0px 7px #eb2e4a;
}

' . $__templater->includeTemplate('evolverp_fonts.less', $__vars) . '
' . $__templater->includeTemplate('evolverp_app_nav.less', $__vars) . '
' . $__templater->includeTemplate('evolverp_app_body.less', $__vars) . '
' . $__templater->includeTemplate('evolverp_app_footer.less', $__vars) . '
' . $__templater->includeTemplate('evolverp_node_list.less', $__vars) . '
' . $__templater->includeTemplate('evolverp_structured_list.less', $__vars) . '
' . $__templater->includeTemplate('evolverp_editor_base.less', $__vars) . '
' . $__templater->includeTemplate('evolverp_core_input.less', $__vars) . '

.userBanner.my-style
{
    color: white;
	background: #eb2e4a;
    background-color: #eb2e4a;
    border-color: #eb2e4a;
    box-shadow: 0px 0px 7px #eb2e4a;
}

.userBanner.my-style.moder
{
    color: white;
	background: #2e4aeb;
    background-color: #2e4aeb;
    border-color: #2e4aeb;
    box-shadow: 0px 0px 7px #2e4aeb;
}

.userBanner.my-style.helper
{
    color: white;
	background: #d0d312;
    background-color: #d0d312;
    border-color: #d0d312;
    box-shadow: 0px 0px 7px #d0d312;
}

.userBanner.my-style.kurator
{
    color: white;
	background: #b494f4;
    background-color: #b494f4;
    border-color: #b494f4;
    box-shadow: 0px 0px 7px #b494f4;
}';
	return $__finalCompiled;
}
);