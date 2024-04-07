<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtendo os dados do formulário
    $cnpj = $_POST["cnpj"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $data_nascimento = $_POST["data_nascimento"];
    $banco = $_POST["banco"];
    $agencia = $_POST["agencia"];
    $conta = $_POST["conta"];
    $responsavel = $_POST["responsavel"];
    $telefone_responsavel = $_POST["telefone_responsavel"];

    // Montando uma string com os dados
    $dados = "CNPJ: $cnpj\nCPF: $cpf\nE-mail: $email\nTelefone: $telefone\nData de Nascimento: $data_nascimento\nBanco: $banco\nAgência: $agencia\nConta: $conta\nResponsável: $responsavel\nTelefone do Responsável: $telefone_responsavel\n";

    // Defina o caminho para a pasta onde deseja salvar os dados
    $caminho = "C:\Users\gerso\Desktop\form.lastingsistemas\dados.form/";

    // Nome do arquivo para salvar os dados (você pode usar uma data e hora única, por exemplo)
    $nome_arquivo = "formulario_" . date("Ymd_His") . ".txt";

    // Caminho completo para o arquivo
    $caminho_arquivo = $caminho . $nome_arquivo;

    // Tente abrir o arquivo para escrita
    if ($arquivo = fopen($caminho_arquivo, "w")) {
        // Escreva os dados no arquivo
        fwrite($arquivo, $dados);
        // Feche o arquivo
        fclose($arquivo);
        // Redirecione de volta para a página do formulário ou para outra página de confirmação
        header("Location: formulario.html");
        exit();
    } else {
        echo "Erro ao abrir o arquivo para escrita.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>