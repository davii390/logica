<?php
$alunos = [];
$aluno_1 = ['nome'=> 'Pelé', 'materia' => 'Fisica', 'nota' =>9];

foreach($aluno_1 as $registro){
    echo '<h1>'. $registro . '<br><h1>';
}

if ($aluno_1 ['nota']>=7){
    echo '<h1>' . ' aprovado</h1> <br>';
}

elseif ($aluno_1 ['nota']<7 && $aluno_1 ['nota']>5){
    echo $aluno_1['nome'] . ' em recuperação';
}

else{
    echo '<h1>' . $aluno_1 ['nome'] . ' reprovado </h1>';
}

echo '______________________________________________________________________________________________________________________________________<br>';

$aluno_2 = ['nome'=> 'Pablo' , 'materia' => 'Geografia ', 'nota' => 5];

foreach($aluno_2 as $registro){
    echo '<h1>'. $registro . '<br><h1>';
}

if ($aluno_2 ['nota']>=7){
    echo '<h1>' . ' aprovado</h1>';
}

elseif ($aluno_2 ['nota']<7 && $aluno_2 ['nota']>5){
    echo $aluno_2['nome'] . ' em recuperação';
}

else{
    echo '<h1>'  . ' reprovado </h1>';
}