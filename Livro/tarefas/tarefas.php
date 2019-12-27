<html>
    <head>
        <title>Gerenciador de tarefas</title>
    </head>
    <body>
        <h1>Gerenciador de tarefas</h1>

        <form>
            <fieldset>
                <legend>Nova tarefa</legend>
                <label>
                    Tarefa:
                    <input type="text" name="nome" />
                </label>
                <input type="submit" value="Cadastrar" />
            </fieldset>
        </form>

        <!-- Funcao isset verifica se a variavel existe -->
        <?php

            $lista_tarefas = array();
            echo gettype($lista_tarefas);

            if(isset($_GET['nome']))
            {
                $lista_tarefas = $_GET['nome'];
            }

        ?>

        <table>
            <tr>
                <th>Tarefas</th>
            </tr>
            
            <?php
            foreach ($lista_tarefas as $tarefa) : ?>
                <tr>
                    <td>
                        <?php echo $tarefa; ?> 
                    </td>
                </tr>
            
            <?php endforeach; ?>
            


        </table>

    </body>
</html>