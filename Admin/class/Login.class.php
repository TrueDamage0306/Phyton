<?php

// Definiendo clase Login
class Login {

    private $tabela, $campoID,$campoNombres, $campoLogin, $campoSenha;

    function  __construct($tabela = 'usuarios', $campoID = 'id', $campoNombres = 'nombre',$campoApellidos = 'apellido',$campoLogin = 'usuario', $campoSenha = 'clave', $campoNivel = 'nivel') {

            // Iniciando session
            session_start();

            // Definiendo atributos
            $this->tabela = $tabela;
            $this->campoID = $campoID;
            $this->campoLogin = $campoLogin;
            $this->campoSenha = $campoSenha;
            $this->campoNombres = $campoNombres;
            $this->campoApellidos = $campoApellidos;
            $this->campoNivel = $campoNivel;
    }

    // ------------------------------------------------------------------------


    function getLogin() {
        return $_SESSION[$this->campoLogin];
    }
    function getNombres() {
        return $_SESSION[$this->campoNombres];
    }
    function getApellidos() {
        return $_SESSION[$this->campoApellidos];
    }
    function getNivel() {
        return $_SESSION[$this->campoNivel];
    }
    // ------------------------------------------------------------------------

    function getID() {
        return $_SESSION[$this->campoID];
    }

    // ------------------------------------------------------------------------


    function logar($login, $senha, $redireciona = null) {
    include("../db/conexion.php");

        $login = mysqli_real_escape_string($conectar, $login);
        $senha = mysqli_real_escape_string($conectar,$senha);

        // Verifica si existe
        $query = mysqli_query($conectar,"SELECT {$this->campoID}, {$this->campoNombres}, {$this->campoApellidos}, {$this->campoLogin}, {$this->campoSenha}, {$this->campoNivel}
                             FROM {$this->tabela}
                             WHERE {$this->campoLogin} = '{$login}' AND {$this->campoSenha} = '{$senha}'");

        // Se encontrado un usuario
        if(mysqli_num_rows($query) > 0)
        {
            // Instanciando usuario
            $usuario = mysqli_fetch_object($query);

            // Registrando sessão
            $_SESSION[$this->campoID] = $usuario->{$this->campoID};
            $_SESSION[$this->campoLogin] = $usuario->{$this->campoLogin};
            $_SESSION[$this->campoSenha] = $usuario->{$this->campoSenha};
            $_SESSION[$this->campoNombres] = $usuario->{$this->campoNombres};
            $_SESSION[$this->campoApellidos] = $usuario->{$this->campoApellidos};
            $_SESSION[$this->campoNivel] = $usuario->{$this->campoNivel};

            // Se informado redirecionamento
            if ($redireciona !== null)
                header("Location: {$redireciona}");
            else
                return true;
        }
        else
            return false;
    }

    // ------------------------------------------------------------------------


    function verificar($redireciona = null) {
        if(isset($_SESSION[$this->campoID]) and isset($_SESSION[$this->campoLogin]) and isset($_SESSION[$this->campoSenha]))
            return true;
        else
        {
            if ($redireciona !== null)
                header("Location: {$redireciona}");
            return false;    
        }

    }

    // ------------------------------------------------------------------------

  

    function logout($redireciona = null) {
        // Limpa a Sessão
        $_SESSION = array();
        // Destroi a Sessão
        session_destroy();
        // Modifica o ID da Sessão
        session_regenerate_id();
        // Se informado redirecionamento
        if ($redireciona !== null)
            header("Location: {$redireciona}");
    }

}
?>