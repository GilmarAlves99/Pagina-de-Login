# Pagina-de-Login

         
<h4>Oque você verá aqui?</h4>
•Preparando o Formulário do login.php
•Recebendo e Validando os Dados
•Criando uma página restrita
•Criando Sessão
<h4>index.php</h4>
• Aqui temos uma página inicial comum todos os usuários, e nela um link para direcionar a página de login.php
<h4>login.php</h4>
• Este arquivo terá um formulário em que o usuário poderá digitar um login e uma senha em nosso exemplo vamos
usar (admin/1234)
<h4>validarLogin.php</h4>
• Aqui receberemos os dados do login, e devemos fazer a seguinte regra:
• Se foi digitado um login e uma senha, validar comparando com (admin/1234);
• Se estiver correto: Ir para um outro arquivo: paginaRestrita.php
• Caso esteja errado: Voltar para para login.php
• Caso o usuário não tenha digitado uma dessas informações (login/senha), voltar para a página de login.php
<h4>paginaRestrita.php</h4>
• Aqui vamos simular uma página que só podemos ter acesso caso o usuário tenha digitado corretamente o dados do
login
        
