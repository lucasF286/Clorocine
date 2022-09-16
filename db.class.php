<?php 

class db {

    //host
    private $host = 'localhost';

    //usuario
    private $usuario = 'root';

    //senha
    private $senha = '';

    //bd
    private $database = 'filmes';

    public function conecta_myslq(){
        //cria a conexao mysql
        $con = mysqli_connect($this->host, $this->usuario,$this->senha,$this->database);

        //ajustar o charset de comunicação entre a aplicação e o banco de dados
        mysqli_set_charset($con, 'utf8');

        //verificar se houve erro de conexão
        if(mysqli_connect_errno()){
            echo 'Erro ao tentar conectar com o banco de dados Sql:'.mysqli_connect_error();
        }

        return $con;
    }

}

?>
