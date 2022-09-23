<?php

class Mensagem {
    public static function mostrar () {
        if(isset($_SESSION["msg"])) {
            $mensagem = $_SESSION["msg"];
            unset($_SESSION["msg"]);
            return "<script>
            M.toast({
                html: '$mensagem'
            });
            </script>";
        }
    }
}