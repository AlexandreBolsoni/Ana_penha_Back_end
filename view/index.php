<?php 
include 'php/config.php';


echo alertaInicio();

echo criaHeader();

echo '
    <div class="px-4 py-5 my-5 text-center">
      <img class="d-block mx-auto mb-4" src="Imagens/01.png" alt="" width="20%">
      <h1 class="display-5 fw-bold text-body-emphasis">Auto Confiança</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Lembre-se de que cada dia é uma nova oportunidade para se reinventar, aprender algo novo e
          buscar seus sonhos. Não se limite por suas circunstâncias atuais. Você tem o poder de moldar seu futuro e
          criar a vida que deseja viver. Acredite em si mesmo e vá em frente!</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <button type="button" style="background-color: rgba(45, 187, 50, 0.878); border-color: #ffffff; color: #000;"
            class="btn btn-outline-info  btn-lg px-4"><a href="#sobre-mim" " style=" border-color: #ffffff; color: #000;
              text-decoration: none;">Sobre Mim</a></button>
          <button type="button" class="btn btn-outline-secondary  btn-lg px-4 "
            style="background-color: #00000034; border-color: #ffffff;"><a style="text-decoration: none;"
              href="#formacoes" ">Formações</a></button>
        </div>
      </div>
    </div>

    <div class=" b-example-divider">
        </div>

        <div class="bg-dark text-secondary px-4 py-5 text-center">
          <div class="py-5">
            <h1 class="display-5 fw-bold text-white">Terapia Ocupacional</h1>
            <div class="col-lg-6 mx-auto">
              <p class="fs-5 mb-4">A terapia ocupacional ajuda as pessoas a desenvolver habilidades e estratégias para
                realizar atividades exercidas, promovendo a autonomia e independência.</p>
            </div>
          </div>
        </div>
      </div>


      <div id="sobre-mim" class="px-4 py-5 my-5 text-center">

        <h1 class="display-5 fw-bold text-body-emphasis">Sobre mim</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">Graduada em Terapia Ocupacional na Faculdade de Ciências e Saúde de São Pedro (Faesa);
            Pós-graduada em Membro Superior com Ênfase em Mão pela Faculdade de Ciências Médicas de Minas Gerais; Curso
            de Adaptações e Orteses para Membros Superiores na Associação Brasileira Beneficente de Reabilitação
            (ABBR)-RJ; Curso a
            Capacitação em Baixa Visão realizada pelo departamento de Oftalmologia da Universidade Federal de São Paulo
            (UNIFESP) / Hospital São Paulo (HSP); Curso de Hipnose Regressiva - Técnicas Terapêuticas com Wilkins P.
            Mattos;
            Curso de Confecção de Órteses em PVC para Membros Superiores e Inferiores pelo Instituto
            Nonato Castro; Curso de Self-Healing Practitioner/ Educador Training pela School for Self-Healing e Curso de
            Fundamentos de Neurovisão Aplicados à Prática, realizado em SP e ministrado pela Optometrista Comportamental
            e Instrutora em Self-Healing Maria Fernanda Leite Ribeiro.</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">

          </div>
        </div>
      </div>


      <div id="formacoes" class="px-4 py-5 my-5 text-center">

        <h1 class="display-5 fw-bold text-body-emphasis">Formações</h1>
        <div class="col-lg-6 mx-auto">
          <h5>Agende Seu horario</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Saude Fisica</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Traumato-Ortopedia e
                Reumatologia</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">self-healing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Neurologia Adulto e
                lInfanto-Juvenil</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Consciência Corporal e
                Relaxamento</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Confecção de órtese</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Saúde mental:Holistica e
                Hipnose e regressão</a></li>
          </ul>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">

          </div>
        </div>
      </div>';
echo criaFooter();
