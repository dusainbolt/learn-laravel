<?php
function getCurURL()
{
    if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
        $pageURL = "https://";
    } else {
        $pageURL = 'http://';
    }
    if (isset($_SERVER["SERVER_PORT"]) && $_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}

/*
 * @params menuName: class, user
 * @xu ly check url hien tai cua website neu giong voi menuName thi return active
 */
function checkActiveMenu($menuName)
{
    $currentUrl = getCurURL();
    return strpos($currentUrl, $menuName) > 0 ? "active" : "";
}

function getStatusTextClass($value){
    switch ($value){
        case STATUS_CLASS_ACTIVE:
            return "Hoat dong";
        case STATUS_CLASS_INACTIVE:
            return "Ngung hoat dong";
        default:
            return "";
    }
}

function getStatusTextSubject($value){
    switch ($value){
        case STATUS_SUBJECT_ACTIVE:
            return "Hoat dong";
        case STATUS_SUBJECT_INACTIVE:
            return "Ngung hoat dong";
        default:
            return "";
    }
}

?>
