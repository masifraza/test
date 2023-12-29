<?php
$arr = array('one','two','three','four','five');
$html = "<div>";
foreach($arr as $value){
    $html .= $value.'<br />';
}
$html .= "</div>"; 
echo "adding a line for the first time";
echo "adding another line";
?>

<script type="text/javascript">     
    function PrintDiv() {    
		alert("printer...");
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>
