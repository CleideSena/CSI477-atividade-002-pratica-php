
<body background="../img/fundo1.jpg" bgproperties="fixed">

  <center><div class="btn btn-info">
      <div class="form-top-left">
             <img src="../img/logo.png" " height="160px" width="200px""> </center>

                 </div>

<div class="form-top container top-content form-top row">
  <div class="row">
    <br/>
      <div class="col-md-6 col-sm-offset-1">
        <h4><strong><center>Pacientes</center></strong></h4><br/>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>id</th>
              <th>Nome</th>
              <th>Login</th>
              <th>Senha</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($pacientes as $p): ?>
                <tr>
                  <td>
                    <?php echo $p['Paciente']['id']; ?>
                  </td>
                  <td>
                    <?php echo $p['Paciente']['nome']; ?>
                  </td>
                  <td>
                    <?php echo $p['Paciente']['login']; ?>
                  </td>
                  <td>
                    <?php echo $p['Paciente']['senha']; ?>
                  </td>
                </tr>
              <?php endforeach; ?>
          </tbody>
          </table>
      </div>
    </div>
</boby>
