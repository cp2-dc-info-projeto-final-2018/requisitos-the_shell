<!DOCTYPE html>


<?php for ($i = 0; $i <= (count($Turmas) - 1) ; $i++) { ?>
        <tr class="Linhas">
          <th class="Celulas"><a name="Turma" href="Turma.php?id_turma=<?= $Turmas[$i]["id_turma"] ?>"><?= $Turmas[$i]["nome"] ?></a></th>
          <th class="Celulas"> <?= $Turmas[$i]["serie"] ?></th>
          <th class="Celulas"> <?= count(ListaAlunosDaTurma($Turmas[$i]["id_turma"])) ?></th>
          <th class="Celulas">
            <?php<?php for ($i = 0; $i <= (count($Turmas) - 1) ; $i++) { ?>
        <tr class="Linhas">
          <th class="Celulas"><a name="Turma" href="Turma.php?id_turma=<?= $Turmas[$i]["id_turma"] ?>"><?= $Turmas[$i]["nome"] ?></a></th>
          <th class="Celulas"> <?= $Turmas[$i]["serie"] ?></th>
          <th class="Celulas"> <?= count(ListaAlunosDaTurma($Turmas[$i]["id_turma"])) ?></th>
          <th class="Celulas">
           
</html>

