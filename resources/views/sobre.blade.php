@extends('layouts.index')

@section('content')
<section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="assets/img/testimonial-2.jpg" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s">Nome: </span> <span>Pedro Augusto de Agostini</span></p>
                      <p><span class="title-s">Perfil: </span> <span>Front-End Developer</span></p>
                      <p><span class="title-s">Email: </span> <span>contatopedrodeagostini@gmail.com</span></p>
                      <p><span class="title-s">Telefone: </span> <span>(14) 99108-4904</span></p>
                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                  <p class="title-s">Skills</p>
                  <span>HTML</span> <span class="pull-right">75%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>CSS</span> <span class="pull-right">70%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>PHP</span> <span class="pull-right">25%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>JAVASCRIPT</span> <span class="pull-right">15%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>SQL SERVER</span> <span class="pull-right">40%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Sobre mim
                    </h5>
                  </div>
                  <p class="lead">
                    Estudante de Análise e Desenvolvimento de Sistemas, sou uma pessoa que gosta de adquirir novos aprendiazados, e
                    realizando pesquisas, encontrei a área de desenvolvimento, onde me interessei pelo assunto e decidi que queria seguir
                    minha carreira profissional na área, me aprofundei e iniciei cursos para me aprofundar e me especializar em linguagens
                    como: <strong>HTML & CSS</strong> e <strong>SQL SERVER</strong>.
                  </p>
                  <br>
                  <p class="lead">
                    <strong><em>"Você pode encarar um erro como uma besteira a ser esquecida ou como um resultado
                        que aponta uma nova direção" (Steve Jobs)</em></strong>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection