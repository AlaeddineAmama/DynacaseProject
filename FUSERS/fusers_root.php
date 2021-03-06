<?php
/*
 * @author Anakeen
 * @package FDL
*/

function fusers_root(Action & $action)
{
    $jslinks = array(
        array(
            "src" => $action->parent->getJsLink("lib/jquery/jquery.js")
        ) ,
        array(
            "src" => $action->parent->getJsLink("lib/jquery-ui/js/jquery-ui.js")
        ) ,
        array(
            "src" => $action->parent->getJsLink("lib/jquery-dataTables/js/jquery.dataTables.js")
        ) ,
        array(
            "src" => $action->parent->AddJsRef($action->GetParam("CORE_JSURL") . "/logmsg.js")
        ) ,
        array(
            "src" => $action->parent->AddJsRef($action->GetParam("CORE_PUBURL") . "/FDL/Layout/common.js")
        ) ,
        array(
            "src" => $action->parent->AddJsRef($action->GetParam("CORE_JSURL") . "/subwindow.js")
        ) ,
        array(
            "src" => $action->parent->AddJsRef($action->GetParam("CORE_JSURL") . "/geometry.js")
        ) ,
        array(
            "src" => $action->parent->AddJsRef($action->GetParam("CORE_JSURL") . "/AnchorPosition.js")
        ) ,
        /*
        array(
            "src" => $action->parent->AddJsRef($action->GetParam("CORE_PUBURL") . "/FDL/Layout/mktree.js")
        ) ,
        */
        array(
            "src" => $action->parent->AddJsRef($action->getParam("CORE_PUBURL") . "/FDC/Layout/setparamu.js")
        ) ,
        array(
            "src" => $action->parent->getJsLink("FUSERS:fusers_mktreeState.js", false)
        ) ,
        array(
            "src" => $action->parent->getJsLink("FUSERS:fusers_mktree.js", false)
        ) ,
        array(
            "src" => $action->parent->getJsLink("FUSERS:fusers_list.js", true)
        )
    );
    
    $action->parent->AddCssRef("css/dcp/jquery-ui.css");
    $action->parent->AddCssRef("lib/jquery-dataTables/css/jquery.dataTables.css");
    $action->parent->AddCssRef("FUSERS:fusers.css", true);
    $action->parent->AddCssRef("WHAT/Layout/size-normal.css");
    
    $action->lay->setBlockData("JS_LINKS", $jslinks);
}
