<? php
incluem  'connect.php' ;
if ( isset ( $ _POST [ 'sub' ])) {
    $ t = $ _POST [ 'texto' ];
    $ u = $ _POST [ 'usuário' ];
    $ p = $ _POST [ 'passagem' ];
    $ c = $ _POST [ 'cidade' ];
    $ g = $ _POST [ 'gen' ];
    if ( $ _FILES [ 'f1' ] [ 'nome' ]) {
    move_uploaded_file ( $ _FILES [ 'f1' ] [ 'tmp_name' ], "imagem /" . $ _FILES [ 'f1' ] [ 'nome' ]);
    $ img = "imagem /" . $ _FILES [ 'f1' ] [ 'nome' ];
    }
    $ i = "inserir em reg (nome, nome de usuário, senha, cidade, imagem, gênero) valor ('$ t', '$ u', '$ p', '$ c', '$ img', '$ g ') " ;
    mysqli_query ( $ con , $ i );
}
?>

< html >
    < cabeça >
        < meta  charset = " UTF-8 " >
        < título > </ título >
    </ head >
    < corpo >
        < form  method = " POST " enctype = " multipart / form-data " >
            < mesa >
                < tr >
                    < td >
                        Nome
                        < input  type = " text " name = " text " >
                    </ td >
                </ tr >
                < tr >
                    < td >
                        Nome do usuário
                        < input  type = " text " name = " user " >
                    </ td >
                </ tr >
                < tr >
                    < td >
                        senha
                        < input  type = " senha " name = " pass " >
                    </ td >
                </ tr >
                < tr >
                    < td >
                        cidade
                        < selecionar  nome = " cidade " >
                            < option  value = "" > -selecionar- </ option >
                            < option  value = " knp " > kanpur </ option >
                            < option  value = " lko " > lucknow </ option >
                    </ td >
                </ tr >
                < tr >
                    < td >
                        Gênero
                        < input  type = " radio " name = " gen " id = " gen " value = " male " > masculino
                        < input  type = " radio " name = " gen " id = " gen " value = " female " > feminino
                    </ td >
                </ tr >
                < tr >
                    < td >
                        Imagem
                        < input  type = " file " name = " f1 " >
                    </ td >
                </ tr >
                < tr >
                    < td >
                        < input  type = " submit " value = " submit " name = " sub " >
                               
                    </ td >
                </ tr >



                < tr >
                    < td >
                        < A  href = " login.php " > Acesso </ a >
                    </ td >
                </ tr >
            </ mesa >
    </ body >
</ html >
