
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Controle de LED Arduino</title>
</head>
<body>
    <h1>Controle de LED via Arduino</h1>

    <p>Status atual: <strong><?php echo $status; ?></strong></p>

    
    <h3>Usando GET</h3>
    <a href="?acao=ligar"><button>Ligar LED</button></a>
    <a href="?acao=desligar"><button>Desligar LED</button></a>

 
    <h3>Usando POST</h3>
    <form method="post">
        <button name="acao" value="ligar">Ligar LED</button>
        <button name="acao" value="desligar">Desligar LED</button>
    </form>
    
    <?php
$status = "Desconhecido";

// Define a porta serial do Arduino
$portaSerial = "\\\.\\com14"; 
//$portaSerial = "COM3"; // Windows, ajuste conforme necessário


function enviarParaArduino($comando) {
    global $portaSerial;
    $fp = fopen($portaSerial, "w");
    if ($fp) {
        fwrite($fp, $comando);
        fclose($fp);
        return true;
    }
    return false;
}


if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
    if ($acao == "ligar") {
        if(enviarParaArduino('1')) $status = "LED Ligado (GET)";
    } elseif ($acao == "desligar") {
        if(enviarParaArduino('0')) $status = "LED Desligado (GET)";
    }
}


if (isset($_POST['acao'])) {
    $acao = $_POST['acao'];
    if ($acao == "ligar") {
        if(enviarParaArduino('1')) $status = "LED Ligado (POST)";
    } elseif ($acao == "desligar") {
        if(enviarParaArduino('0')) $status = "LED Desligado (POST)";
    }
}
?>


</body>
</html>