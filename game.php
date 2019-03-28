<?php
session_start();

require 'includes/db.php';
require 'includes/def.php';

$theHTML = "";
$successMsg = "";

if ( isset( $_SESSION['user_id'] ) ) {
} else {
    header("Location: http://sofe2720.veloxcloud.ca/login.php");
}
?>




<!DOCTYPE html>
<html>

  <head>
  <meta charset="utf-8">

  <title>SudokuMAX</title>

  <link rel="stylesheet" href="gamestyle.css">

</head>
<script type="text/javascript">
    function theme(cssFile, cssLinkIndex) {

    var oldlink = document.getElementsByTagName("link").item(cssLinkIndex);

    var newlink = document.createElement("link");
    newlink.setAttribute("rel", "stylesheet");
    newlink.setAttribute("type", "text/css");
    newlink.setAttribute("href", cssFile);

    document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);
}
</script>
<body>
<center><h1>SudokuMAX</h1><br>

 <div id="sudokuBoard">
                        <table cellspacing="0" cellpadding="0">
                            <tr>
                                <td class="boardCellGroupA">
                                    <table cellspacing="1" cellpadding="0">
                                        <tr>
                                            <td class="boardCell">
                                                <div id="00" class="staticValue">
                                                    <span>6</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="01" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="02" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="boardCell">
                                                <div id="10" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="11" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="12" class="staticValue">
                                                    <span>4</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="boardCell">
                                                <div id="20" class="staticValue">
                                                    <span>2</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="21" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="22" class="staticValue">
                                                    <span>8</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td class="boardCellGroupB">
                                    <table cellspacing="1" cellpadding="0">
                                        <tr>
                                            <td class="boardCell">
                                                <div id="03" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="04" class="staticValue">
                                                    <span>9</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="05" class="staticValue">
                                                    <span>8</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="boardCell">
                                                <div id="13" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="14" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="15" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="boardCell">
                                                <div id="23" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="24" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="25" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td class="boardCellGroupA">
                                    <table cellspacing="1" cellpadding="0">
                                        <tr>
                                            <td class="boardCell">
                                                <div id="06" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="07" class="staticValue">
                                                    <span>2</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="08" class="staticValue">
                                                    <span>4</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="boardCell">
                                                <div id="16" class="staticValue">
                                                    <span>8</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="17" class="staticValue">
                                                    <span>3</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="18" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="boardCell">
                                                <div id="26" class="staticValue">
                                                    <span>1</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="27" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="28" class="staticValue">
                                                    <span>9</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td class="boardCellGroupB">
                                    <table cellspacing="1" cellpadding="0">
                                        <tr>
                                            <td class="boardCell">
                                                <div id="30" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="31" class="staticValue">
                                                    <span>6</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="32" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="boardCell">
                                                <div id="40" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="41" class="staticValue">
                                                    <span>9</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="42" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="boardCell">
                                                <div id="50" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="51" class="staticValue">
                                                    <span>5</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="52" class="staticValue">
                                                    <span>1</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td class="boardCellGroupA">
                                    <table cellspacing="1" cellpadding="0">
                                        <tr>
                                            <td class="boardCell">
                                                <div id="33" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="34" class="staticValue">
                                                    <span>8</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="35" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="boardCell">
                                                <div id="43" class="staticValue">
                                                    <span>1</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="44" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="45" class="staticValue">
                                                    <span>4</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="boardCell">
                                                <div id="53" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="54" class="staticValue">
                                                    <span>2</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="55" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td class="boardCellGroupB">
                                    <table cellspacing="1" cellpadding="0">
                                        <tr>
                                            <td class="boardCell">
                                                <div id="36" class="staticValue">
                                                    <span>3</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="37" class="staticValue">
                                                    <span>5</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="38" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="boardCell">
                                                <div id="46" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="47" class="staticValue">
                                                    <span>8</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="48" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="boardCell">
                                                <div id="56" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="57" class="staticValue">
                                                    <span>9</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="58" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td class="boardCellGroupA">
                                    <table cellspacing="1" cellpadding="0">
                                        <tr>
                                            <td class="boardCell">
                                                <div id="60" class="staticValue">
                                                    <span>5</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="61" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="62" class="staticValue">
                                                    <span>6</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="boardCell">
                                                <div id="70" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="71" class="staticValue">
                                                    <span>2</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="72" class="staticValue">
                                                    <span>9</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="boardCell">
                                                <div id="80" class="staticValue">
                                                    <span>7</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="81" class="staticValue">
                                                    <span>8</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="82" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td class="boardCellGroupB">
                                    <table cellspacing="1" cellpadding="0">
                                        <tr>
                                            <td class="boardCell">
                                                <div id="63" class="editValue error">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="64" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="65" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="boardCell">
                                                <div id="73" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="74" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="75" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="boardCell">
                                                <div id="83" class="staticValue">
                                                    <span>5</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="84" class="staticValue">
                                                    <span>1</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="85" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td class="boardCellGroupA">
                                    <table cellspacing="1" cellpadding="0">
                                        <tr>
                                            <td class="boardCell">
                                                <div id="66" class="staticValue">
                                                    <span>9</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="67" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="68" class="staticValue">
                                                    <span>8</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="boardCell">
                                                <div id="76" class="staticValue">
                                                    <span>5</span>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="77" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="78" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="boardCell">
                                                <div id="86" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="87" class="editValue">
                                                    <input/>
                                                </div>
                                            </td>
                                            <td class="boardCell">
                                                <div id="88" class="staticValue">
                                                    <span>6</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                     <a href="#" onclick="theme('gamestyle.css', 0);"> Dark Theme   </a> 
                     <a href="#" onclick="theme('alternategamestyle.css', 0);">Light Theme</a>
                </center>
            </body>
            </html>




