# Pagina-de-Login

          <ul>
            <li>Oque você verá aqui?</li>
            <li>Preparando o Formulário do login.php</li>
            <li>Recebendo e Validando os Dados</li>
            <li>Criando uma página restrita</li>
            <li>Criando Sessão</li>
         </ul>
          <ol>
            <li>index.php</li>
            • Aqui temos uma página inicial comum todos os usuários, e nela um link para direcionar a página de login.php
            <li> login.php</li>
            • Este arquivo terá um formulário em que o usuário poderá digitar um login e uma senha em nosso exemplo vamos
            usar (admin/1234).
            <li> validarLogin.php</li>
            • Aqui receberemos os dados do login, e devemos fazer a seguinte regra:
            • Se foi digitado um login e uma senha, validar comparando com (admin/1234);
            • Se estiver correto: Ir para um outro arquivo: paginaRestrita.php
            • Caso esteja errado: Voltar para para login.php
            • Caso o usuário não tenha digitado uma dessas informações (login/senha), voltar para a página de login.php
            <li>paginaRestrita.php</li>
            • Aqui vamos simular uma página que só podemos ter acesso caso o usuário tenha digitado corretamente o dados do
            login
          </ol>
        
