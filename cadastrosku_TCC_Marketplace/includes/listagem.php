<?php

$resultados = '';
foreach($sku  as $cads){
  $resultados .= '<tr>
                    <td>'.$cads->idsku.'</td>
                    <td>'.$cads->Nome_sku.'</td>
                    <td>'.$cads->estoque.'</td>
                    <td>'.$cads->preco.'</td>
                    <td>'.($cads->ativo == 's' ? 'Ativo' : 'Inativo').'</td>
                    <td>'.$cads->idsku.'<button type="button" class="btn btn-primary">Editar</button></td>
                  </tr>';
}


?>

<main>

    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success">Cadastrar novo item</button>
        </a>
    </section>

    <section>

        <table class="table mt-3">

            <thread>
                <tr>
                    <th>ID Item</th>
                    <th>Nome</th>
                    <th>Estoque</th>
                    <th>Preço</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thread>
            <tbody>

                <?=$resultados?>

            </tbody>

        </table>


</main>