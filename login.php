<? php

// Conexão com banco de dados 
incluem 'connect.php' ;

if ( isset ( $ _POST [ 'sub' ])) {
    $ u = $ _POST [ 'usuário' ];
    $ p = $ _POST [ 'passagem' ];
    $ s = "selecione * de reg onde nome de usuário = '$ u' e senha = '$ p'" ;   
   $ qu = mysqli_query ( $ con , $ s );
   if ( mysqli_num_rows ( $ qu )> 0 ) {
      $ f = mysqli_fetch_assoc ( $ qu );
      $ _SESSION [ 'id' ] = $ f [ 'id' ];
      cabeçalho ( 'localização: home.php' );
   }
   else {
       echo  'nome de usuário ou senha não existe' ;
   }
  
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
                        < input  type = " submit " name = " sub " value = " submit " >
                    </ td >
                </ tr >

                < tr >
                    < td >
                        < input  type = " submit " value = " Register " name = " reg " >
                               
                    </ td >
                </ tr >

                < tr >
                    < td >
                        < A  href = " reg.php " > Registrar </ a >
                    </ td >
                </ tr >
                
            </ mesa >
    </ body >
</ html >
