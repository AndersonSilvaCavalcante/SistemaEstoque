<?php
    include_once 'session/iniciarsessao.php';
?>
<script type="text/javascript" src="pesquisaF.js"></script>

<body>
    <div class="container col-md-12">
        <strong class="text-white">Buscar Produto:</strong><br />
        <input type="text" id="busca" class="form-control" placeholder="Digite o código do produto" onkeyup="pFornecedor(this.value)" />
    </div>
    <br>
    <div id="resultado">
    </div>
    <br /><br />
</body>