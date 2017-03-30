  <body background="app/webroot/img/fundo1.jpg" bgproperties="fixed" >

  <center><div class="btn btn-info">
      <div class="form-top-left">
             <img src="app/webroot/img/logo.png" " height="160px" width="200px""> </center>

                 </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                      <li class="active">
                          <center><p><a href="<?php echo Router::url(array('controller' => 'procedimentos', 'action' => 'index')); ?>"
                              class="btn btn-default btn-lg">HOME</a></p></center>
                      </li>
                      <li>
                         <center><p><a href="<?php echo Router::url(array('controller' => 'pacientes', 'action' => 'index_login')); ?>"
              class="btn btn-default btn-lg">PACIENTE</a></p></center>
                      </li>
                      <li>
                          <center><p><a href="<?php echo Router::url(array('controller' => 'administradores', 'action' => 'index')); ?>"
               class="btn btn-default btn-lg">ÁREA ADMINISTRATIVA</a></p></center>
                      </li>
                  </ul>
             </div>

        <div class="container-fluid">
                      <div id="myCarousel" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                <li data-target="#myCarousel" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <center><img class="slide-img" src="app/webroot/img/slide0.jpg" style="width:70%"></center>
                                </div>
                                <div class="item">
                                  <center><img class="slide-img" src="app/webroot/img/slide1.jpg" style="width:70%"></center>
                                </div>
                                <div class="item">
                                  <center><img class="slide-img" src="app/webroot/img/slide2.jpg" style="width:70%"></center>
                                </div>
                                <div class="item">
                                  <center><img class="slide-img" src="app/webroot/img/slide3.jpg" style="width:70%"></center>
                                </div>
                                <div class="item">
                                  <center><img class="slide-img" src="app/webroot/img/slide4.jpg" style="width:70%"></center>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#mycarousel-example-generic" role="button" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

                            </a>
                            <a class="right carousel-control" href="#mycarousel-example-generic" role="button" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

                            </a>
                    </div>
                </div>
  </div>
  </div>

</boby>
