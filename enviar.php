	<?php
		$to = 'recepcao.pousadasonhodocowboy@gmail.com';
        $subject = 'Mensagem enviada via site...';
        $nome = $_POST['nome'];
        $telefone = $_POST['tel'];
        $msg = $_POST['mensagem'];
        $email = $_POST['email'];
        $mensagem = "
        <html>
        <head>
        <title>Enviando...</title>
        <meta http-equiv=Content-Type content=text/html; charset=iso-8859-1>
        </head>
        <body>
          <p style='background:red;color:white;'>Contato gerado pelo cliente através do site Sonho do Cowboy</p>
          <hr>
          <h3 style='margin:0;padding:0;'>Nome: $nome</h3>
          <h4 style='margin:0;padding:0;'>Fone: $telefone</h4>
          <hr>
          <h4 style='margin:0;padding:0;'>Mensagem: $msg</h4>
        </body>
        </html>
        ";
        $dest = $_POST['email'];
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $headers .= "From: " .$dest;
        mail($to, $subject, $mensagem, $headers);
    ?>
        <script>
		alert('Enviado com Sucesso.');
	    </script>
	    <meta http-equiv="Refresh" content="0; url=index.html">