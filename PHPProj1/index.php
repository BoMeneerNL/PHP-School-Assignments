<?php error_reporting(E_ERROR | E_PARSE); ?>
<?php
/*
 using random characters to change amounts
 0x0 = "prod1a"
 0x1 = "prod2a"
 */
if(isset($_GET['0x0']) || isset($_GET['0x1'])){
    if($_GET['serve'] == "gegevens"){
        header("location: index?serve=gegevens");
    }
    else if(isset($_GET['0x0'])){
        setcookie('prod1a',$_GET['0x0']);
        header("location: index");
    }
    else if(isset($_GET['0x1'])){
        setcookie('prod1a',$_GET['0x1']);
        header("location: index");
    }

}
if($_GET['serve'] != "allowcookies" && $_GET['serve'] != "morecookieinfo"){
    if ($_COOKIE['Allowed'] != "allowed") {
        header("location: index?serve=allowcookies");
    }
}
if(isset($_GET['provincie']) && isset($_GET['straatnaam'])) {
    setcookie("provincie",$_GET['provincie']);
    header("location: index");
}
include 'scripts/PHP/PHP-BGScripts/vartable.php';
include_once 'scripts/PHP/PHPstatic/header.php';
    if (!empty($title) && $_GET['serve'] != "allowcookies") {
        echo "<title>" . $title . "</title>";
    }
    if ($_GET['serve'] != "allowcookies" || $_GET['serve'] != "betalen"){
        include_once 'scripts/PHP/PHPstatic/nav.php';
}

?>
<?php
if($_GET['serve'] != "allowcookies" && $_GET['serve'] != "gegevens" && $_COOKIE['serving'] != "gegevens" && $_GET['serve'] != "betalen" && !isset($_GET['provincie']) || !isset($_COOKIE['provincie'])){
    echo('
              
    <div class="itmcase" id="item1">
        <figure class="bg-gray-100 rounded-xl p-6 h-1/6 w-2/6 mx-10 my-5">
                <div class="pt-1 right pr-2 space-y-4">
                  <figcaption class="font-medium">
                    <div class="text-cyan-600">
                      '. $names[0] .'
                    </div>
                    <div class="text-gray-500">
                      '.$prices[0].'€ <i>p.s</i>
                    </div>
                  </figcaption>
                     <form id ="prod1form">
                        <label>Kies het aantal, het maximale per bestelling is 13</label>
                          <input type="number" id="quan88tity" name="0x0" min="1" max="13">
                          <input id="prod1btn" type="submit" value="verander">
                     </form>
                </div>
              </figure>
    </div>
    <div class="itmcase" id="item2">
        <figure class="bg-gray-100 rounded-xl p-6 h-1/6 w-2/6 mx-10 my-5">
                <div class="pt-1 right pr-2 space-y-2">
                  <figcaption class="font-medium">
                    <div class="text-cyan-600">
                      '. $names[1] .'
                    </div>
                    <div class="text-gray-500">
                      '.$prices[1].'€ <i>p.s</i>
                    </div>
                  </figcaption>
                    <form id ="prod2form">
                        <label>Kies het aantal, het maximale per bestelling is 20</label>
                          <input type="number" id="quan88tity" name="0x1" min="1" max="20">
                          <input id="prod2btn" type="submit" value="verander">
                     </form>
                </div>
              </figure>
    </div>
');
}
if($_GET['serve'] == "gegevens"){
    include_once "scripts/PHP/PHPstatic/afrekenen.php";
}
if($_GET['serve'] == "morecookieinfo"){
    require_once 'scripts/PHP/PHPstatic/morecookieinfo.php';
}
if($_GET['serve'] == "allowcookies"){
    include "scripts/PHP/PHPstatic/acceptmycookies.php";
}
?>
<?php
if($_GET['serve'] != "betalen" && $_COOKIE['betalen'] == "ja"){
    header("location: index?serve=betalen");
}
if ($_GET['serve'] == "betalen" || $_COOKIE['betalen'] == "ja"){
    include 'scripts/PHP/PHPstatic/bestelt.php';
}
else if($_GET['serve'] == "betalen" && $_COOKIE['betalen'] != "ja"){
    header("location: index");
}
?>
<?php
if($_GET['serve'] != "allowcookies") {
    if (http_response_code() != 400) {
        include_once 'scripts/PHP/PHPstatic/footer.php';
    }
}
include_once  'scripts/PHP/PHPstatic/scriptimport.php';
?>