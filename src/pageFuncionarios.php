<?php include ("../src/session.php") ?>
<?php include ("../src/components/header.php") ?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Funcionários </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link rel="shortcut icon" href="../../so-icon.svg" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="../public/css/sidebar.css">
        <link rel="stylesheet" type="text/css" href="../public/css/table.css">

        <script src="components/sweetalert.js"></script>
        <script src="components/sweetalert2.all.min.js"></script>
    </head>
    <body>

        <script>
            $('.btn-del').on('click', function(e) {
                 e.preventDefault();
                const href = $(this).attr('href')

                    Swal.fire({
                        title: 'Você tem certeza?',
                        text: 'Os dados serão deletados',
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Excluir',
                    }).then((result) => {
                        if (result.value) {
                            document.location.href = href;
                        }
                    })
            })
            </script>
    

        <!--========== CONTENTS ==========-->
        <main>
            <section>

                <p>
                    Funcionários
                    <a class="btn-new" href="Funcionarios/formCadastro_F.php">
                        Novo Funcionário
                    </a>
               </p>
               
                <div class='container'>        
                    <table id="tabela">
                        <thead>
                            <tr>
                                <th> Id </th>
                                <th> Nome </th>
                                <th> Função </th>
                                <th> Email </th>
                                <th> Celular </th>
                                <th> Visualizar </th>
                                <th> Editar </th>
                                <th> Excluir </th>                    
                            </tr>
                        </thead>
                        <tbody> 
                            <tr>

                            <?php
                                if (isset($_SESSION['msg'])) {
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                }

                                $query_funcionario = "SELECT * FROM funcionarios ORDER BY id ASC";
                                $result_funcionario = $conn->prepare($query_funcionario);
                                $result_funcionario->execute();

                                while ($row_funcionario = $result_funcionario->fetch(PDO::FETCH_ASSOC)){
                                    extract($row_funcionario);
                                    echo "<td> $id </td>";
                                    echo "<td> $nome </td>";
                                    echo "<td> $funcao </td> ";
                                    echo "<td> $email </td> ";
                                    echo "<td> $celular </td> ";
                                    echo "<td> <a  href='View/detalhesF.php?id=".$row_funcionario['id'] ."'> <i class='bx bxs-user-detail bx-sm'></i> </a> </td> </td> ";
                                    echo "<td> <a href='View/formEditarF.php?id=".$row_funcionario['id'] ."'> <i class='bx bxs-edit bx-sm'></i> </a> </td>";
                                    echo "<td> <a class='btn-del' href='excluirF.php?id=".$row_funcionario['id'] ."'> Excluir </a> </td>";
                                    echo "<tr>";
                                }
                            ?>

                        </tr>

                    </table>

            </section>
        </main>

        <!--========== MAIN JS ==========-->
        <script src="../public/scripts/sidebar.js"> </script>
        <script src="components/jquery-3.6.0.min.js"></script>
        
        <script src="components/sweetalert.js"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </body>
</html>