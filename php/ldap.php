<?php

class LDAP {
        const LDAP_HOST = "ldap.caixa";
        const LDAP_BASE = "o=caixa";
        const LDAP_PORT = 489;

        private $ldap_conn;
        private $filtro;
        private $search;

        public function __construct(){

                try{
                        $this->ldap_conn = ldap_connect(self::LDAP_HOST, self::LDAP_PORT);
                        
                } catch (Exception $e){
                        echo $e->getMessage();
                }
                ldap_set_option($this->ldap_conn, LDAP_OPT_PROTOCOL_VERSION, 3);
        }

        public function getUserData($iduser){
                $this->filtro = "uid=" . $iduser;

                if($this->ldap_conn){

                        $this->search = ldap_search($this->ldap_conn, self::LDAP_BASE, $this->filtro);

                        $info = ldap_count_entries($this->ldap_conn, $this->search);

                        if($info > 0){

                                $ldap_first = ldap_first_entry($this->ldap_conn, $this->search);

                                if($ldap_first){

                                        $dados = ldap_get_entries($this->ldap_conn, $this->search);



                                        $first = $dados[0];
                                        // print_r($first);
                                        $userdata["matricula"] = $first["co-usuario"][0];
                                        $primeiro_nome = explode(" ", $first["no-usuario"][0]);
                                        $userdata["primeiro_nome"] = $primeiro_nome[0];
                                        $userdata["nome_completo"] = $first["no-usuario"][0];
                                        $userdata["funcao"] = $first["no-funcao"][0];
                                        $userdata["cod_unidade"] = $first["nu-lotacaofisica"][0];
                                        $userdata["unidade"] = $first["nu-lotacaofisica"][0]." - ".$first["no-lotacaofisica"][0];
                                        $userdata["email"] = $first["mail"][0];
                                        

                                        return $userdata;
                                }
                        }
                }
        }


}

?>
