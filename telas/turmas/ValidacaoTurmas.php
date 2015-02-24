<?php

include_once 'telas/includes/funcoesDeApoio.php';

$temErros = false;
$errosValidacao = array();

if (temPost()) {
    $projeto = array();

//Validação  NOME
    if (isset($_POST['curso']) && strlen($_POST['curso']) > 5) {
        $projeto['curso'] = $_POST['curso'];
    } else {
        $temErros = true;
        $errosValidacao['curso'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de aluno inválido!</h4>'
                . 'Digite corretamente o nome do Curso'
                . '</div>';
    }

    //Validação  professor
    if (isset($_POST['professor']) && strlen($_POST['professor']) > 5) {
        $projeto['professor'] = $_POST['professor'];
    } else {
        $temErros = true;
        $errosValidacao['professor'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de aluno inválido!</h4>'
                . 'Digite corretamente o nome do Professor'
                . '</div>';
    }
//Validação Codigo Turma
    if (isset($_POST['codigot']) && strlen($_POST['codigot']) < 0) {
        $projeto['codigot'] = $_POST['codigot'];
    } else {
        $temErros = TRUE;
        $errosValidacao['codigot'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>RG inválido!</h4>'
                . 'Digite o codigo da Turma: <strong>999.888.777</strong>'
                . '</div>';
    }

//Validação  Carga Horaria
    if (isset($_POST['CargaH']) && strlen($_POST['CargaH']) > 5) {
        $projeto['CargaH'] = $_POST['CargaH'];
    } else {
        $temErros = true;
        $errosValidacao['CargaH'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de aluno inválido!</h4>'
                . 'Digite a carga horaria do curso determinado'
                . '</div>';
    }

    //Validação  Turno
    if (isset($_POST['Turno']) && strlen($_POST['Turno']) > 5) {
        $projeto['Turno'] = $_POST['Turno'];
    } else {
        $temErros = true;
        $errosValidacao['Turno'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de aluno inválido!</h4>'
                . 'Digite corretamente o nome do Curso'
                . '</div>';
    }

    //Validação Periodo
    if (isset($_POST['Periodo']) && strlen($_POST['Periodo']) > 5) {
        $projeto['Periodo'] = $_POST['Periodo'];
    } else {
        $temErros = true;
        $errosValidacao['Periodo'] = ''
                . '<div class="alert alert-error">'
                . '<button type="button" class="close" data-dismiss="alert">×</button>'
                . '<h4>Nome de aluno inválido!</h4>'
                . 'Digite corretamente o nome do Curso'
                . '</div>';
    }
    if (!$temErros) {
        header('Location: index.php?pg=turmaCadastrar');
        die();
    }

    
    
    
 }
$projeto = array(
    'id' => 0,
    'curso' => (isset($_POST['curso'])) ? $_POST['curso'] : '',
    'professor' => (isset($_POST['professor'])) ? $_POST['professor'] : '',
    'codigot' => (isset($_POST['codigot'])) ? $_POST['codigot'] : '',
    'CargaH' => (isset($_POST['CargaH'])) ? $_POST['CargaH'] : '',
    'Turno' => (isset($_POST['Turno'])) ? $_POST['Turno'] : '',
    'Periodo' => (isset($_POST['Periodo'])) ? $_POST['Periodo'] : '',
    
);

include_once 'telas/turmas/turmaCadastrar.php';