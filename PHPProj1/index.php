<?php
error_reporting(E_ERROR | E_PARSE);
?>
<?php
if($_GET['serve'] != "allowcookies"){
    if ($_COOKIE['Allowed'] != "allowed") {
        header("location: index.php?serve=allowcookies");
    }
}

if(http_response_code() != 200){
    include_once 'errors/error' . http_response_code() . ".php";
}
include 'scripts/PHP/PHP-BGScripts/vartable.php';
include_once 'scripts/PHP/PHPstatic/header.php';
if(http_response_code() != 400){


if (!empty($title) && $_GET['serve'] != "allowcookies") {
    echo "<title>" . $title . "</title>";
}
if($_GET['serve'] != "allowcookies")
include_once 'scripts/PHP/PHPstatic/nav.php';
}
if($_GET['handler'] == "allowedcookies"){

}
?>
<?php
if($_GET['serve'] != "allowcookies"){
    echo('
    <div id="item1">
    
    </div>
    <form id ="bestelfinishform" style="display: none;">
        <select name="prov" id="">
            <option value="Groningen">Groningen</option>
            <option value="Friesland">Friesland/Fryslân</option>
            <option value="Drenthe">Drenthe</option>
            <option value="Overijssel">Overijssel</option>
            <option value="Flevoland">Flevoland</option>
            <option value="Gelderland">Gelderland</option>
            <option value="Utrecht">Utrecht</option>
            <option value="Noord-Holland">Noord-Holland</option>
            <option value="Zuid-Holland">Zuid-Holland</option>
            <option value="Zeeland">Zeeland</option>
            <option value="Noord-Brabant">Noord-Brabant</option>
            <option value="Limburg">Limburg</option>
    
            <input type="submit" name="submit" value="betalen">
    </form>
');
}
else{
    include 'scripts/PHP/PHPstatic/acceptmycookies.php';
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


