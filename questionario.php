<?php
require_once 'include/db.php';
require_once 'include/phpLib_questionarios.php';

session_start();
$cadastro_nome          = (string)$_SESSION['cadastro_nome'];

// pegar o questionario
$questionarios = phpLibQuestionarios_getAll_questionarios();

if(!$questionarios) {
    echo 'nao tem nenhum questionário cadastrado';
    exit;
}

$questionario   = $questionarios[0];
// buscar as perguntas
$idQuestionario = $questionario['idQuestionario'];
$ref_perguntas      = phpLibQuestionarios_getAll_perguntas_de_um_determinado_questionario($idQuestionario);

$perguntas = array();
foreach($ref_perguntas as $ref){
    // definições das perguntas
    $idPergunta = $ref['idPergunta'];
    $pergunta   = phpLibQuestionarios_get_pergunta($idPergunta);
    //$perguntas[] = $pergunta;
    
    // em busca das alternativas de cada pergunta
    $ref_alternativas = phpLibQuestionarios_getAll_perguntas_ref_alternativas($idPergunta);
    $alternativas = array();
    foreach($ref_alternativas as $refAlternativa){
        $idAlternativa = $refAlternativa['idAlternativa'];
        $altenativa     = phpLibQuestionarios_get_alternativa($idAlternativa);
        $alternativas[] = $altenativa;
    }
    
    $pergunta['alternativas'] = $alternativas;
    
    $perguntas[] = $pergunta;
}

?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Questionário</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="cover.css" rel="stylesheet">
    </head>

    <body>
        <div class="site-wrapper">
            <div class="site-wrapper-inner">
                <div class="cover-container">
                    <div class="masthead clearfix">
                        <div class="inner">
                            <h3 class="masthead-brand"><?php echo 'Olá ' . $cadastro_nome?></h3>
                            <nav>
                                <ul class="nav masthead-nav">
                                    <li><a href="index_prova.php">Home</a></li>
                                    <li><a href="#">Sobre</a></li>
                                    <li><a href="#">Contatos</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <h1 class="text-center text-primary"><?php echo $questionario['nomeQuestionario']; ?></h1>
                    
                    <!-- laço das perguntas -->
                    <div class="inner cover">
                        <h1 class="cover-heading">Campo para inserir a pergunta</h1>
                        
                        <!-- laço percorrendo as alternativas -->
                        <p class="lead">Aqui será o espaço para o radio box para as repostas</p>
                        <hr>
                    </div>
                    
                   
                    <div class="mastfoot">
                        <div class="inner">
                            <p>Feito Por:  <a href="http://getbootstrap.com">Renan Nóbrega</a>, by <a href="https://twitter.com/mdo">Graphis Design</a>.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </body>
</html>
