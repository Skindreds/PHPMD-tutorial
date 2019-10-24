<?php

$sn_executou_phpmd = false;
if(file_exists('erros.html')){
   $sn_executou_phpmd = true;
}
if($sn_executou_phpmd){
   $tx_principal = 'No quadro abaixo você pode ver os erros que o PHPMD encontrou. Corrija estes erros e execute o PHPMD novamente';
   $inc_iframe = 'erros.html';
} else {
   $tx_principal = 'Para executar o PHPMD você deve seguir os seguintes passos:';
   $inc_iframe = 'configurando_phpmd.html';
}
?>

<html>
<head></head>
<body>
<h1>Uma página maneira, de um projeto maneiro.</h1>
<p><?= $tx_principal?></p>

<iframe src="<?= $inc_iframe?>" id="iframe" style="width: 100%; height: 500px;" onload="validaIframe()">

</iframe>
<script type="application/javascript">
    function validaIframe() {
        iframe = document.getElementById('iframe');
        if(iframe.contentWindow.document.getElementsByTagName("table")[0].getElementsByTagName("tr").length == 1){
            window.location.href = "project/pagina2.php"
        }
    }
</script>
</body>
</html>
