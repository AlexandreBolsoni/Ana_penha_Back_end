<?php 
include '../php/config.php';

echo criaHeader('Informações');

echo '<div class="content">
      <h1>Bem-vindo à Nossa Clínica de Terapia Ocupacional</h1>
      <p>
          Meu pai era fisioterapeuta e, por conta da influência que tinha dentro de casa, fui para Vitória decidida a fazer Fisioterapia. Foi quando conheci a Terapia Ocupacional e me apaixonei. Me formei em 2004. Na época, minha turma era a segunda do Espírito Santo. Em Colatina não havia nenhum profissional na área, o que me daria a chance de levar a profissão para a minha cidade.
      </p>
      <p>
          Lembro como se fosse hoje dos meus professores e outros conhecidos dizendo: “Você é doida. Ninguém sabe o que é Terapia Ocupacional”. Catorze anos depois me orgulho da escolha que fiz e por ter sido pioneira na profissão na minha cidade. A profissão me possibilita ajudar pessoas com os mais diversos problemas e isso é gratificante.
      </p>

      <h2>Desafio</h2>
      <p>
          Acredito que o maior desafio seja fazer as pessoas conhecerem a profissão, o que é a Terapia Ocupacional. Já ouvi que eu era uma “fisioterapeuta ocupacional” e “psicóloga fisioterapeuta”. Fazer a profissão ser conhecida é, sem dúvidas, o maior desafio.
      </p>

      <h3>Localização</h3>
      <p>Estamos no seguinte endereço:</p>
      <p>Rua Pedro Epichim, número 29, sala 208 - Centro, Colatina - ES, 29700-550</p>
      <p>Google Maps:</p>
      <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.212860122698!2d-40.627601424024775!3d-19.53247292605435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb7a9227796e859%3A0xada9791fb06ea231!2sDra%20Ana%20Penha%20Barros%20Terapeuta%20Ocupacional!5e0!3m2!1spt-BR!2sbr!4v1713823582369!5m2!1spt-BR!2sbr" 
          width="600" 
          height="450" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
      </iframe>

      <p>
          Siga-nos nas redes sociais para se manter atualizado sobre as nossas novidades e dicas de saúde.
      </p>

      <div class="social-media">
          <a href="https://www.facebook.com/anapenhabarrosto/?locale=pt_BR" target="_blank">
              <img src="../Imagens/facebook.png" alt="Facebook">
          </a>
          <a href="https://www.instagram.com/draanapenhabarros/" target="_blank">
              <img src="../Imagens/instagram.png" alt="Instagram">
          </a>
        </div>
          <h2>Marque um horário ou tire Duvidas ia WhatsApp</h2>
          <a class="zapzap" id="zapzap" href="https://wa.me/552731311804" >
              <img id="zapzap" src="../Imagens/whatsapp.png" alt="WhatsApp">
          </a>
      
  </div>
';

echo criaFooter();