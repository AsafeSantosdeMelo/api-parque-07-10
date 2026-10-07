<?php
$rota = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$rota = rtrim($rota, '/') . '/';

if ($rota == '/parque/') {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode([
        "mensagem" => "Bem-vindo ao Parque de Diversões!",
        "brinquedos" => [
            "/parque/carrinhobatebate/",
            "/parque/rodagigante/",
            "/parque/montanharussa/",
            "/parque/carrossel/",
            "/parque/barcodireto/",
            "/parque/casasustos/",
            "/parque/torrequeda/"
        ]
    ], JSON_UNESCAPED_UNICODE);

} elseif ($rota == '/parque/carrinhobatebate/') {
    echo "Você ta no Carro Bate-Bate brinque";

} elseif ($rota == '/parque/rodagigante/') {
    echo "Você ta na Roda Gigante se divirta";

} elseif ($rota == '/parque/montanharussa/') {
    echo "Você ta na Montanha Russa Divirta-se";

} elseif ($rota == '/parque/carrossel/') {
    echo "Você ta no Carrossel Divirta-se";

} elseif ($rota == '/parque/barcodireto/') {
    echo "Você ta no Barco Direto Divirta-se";

} elseif ($rota == '/parque/casasustos/') {
    echo "Você ta na Casa dos Sustos Divirta-se";

} elseif ($rota == '/parque/torrequeda/') {
    echo "Você ta na Torre de Queda Divirta-se";


}