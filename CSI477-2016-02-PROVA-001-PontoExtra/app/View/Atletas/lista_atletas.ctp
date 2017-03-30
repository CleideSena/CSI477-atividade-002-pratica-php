

<body background="../img/fundo.jpg" bgproperties="fixed" width=100% height=100% >
</br>  <center><b><p class="fixed">  </br></p> </b> <center>


        <center><div class="btn btn-info">
            <div class="form-top-left">
                   <img src="../img/esportes1.jpg" " height="160px" width="200px""> </center>


  <br/><p class="lead"><a><a><a/><strong> <br/>Atletas cadastrados:</p></strong>
</div>


<div class="form-top container top-content form-top row">
  <div class="row">
    <br/>
      <div class="col-md-6 col-sm-offset-1">

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
              <?php foreach ($atletas as $p): ?>
                <tr>
                  <td>
                    <?php echo $p['Atleta']['id']; ?>
                  </td>
                  <td>
                    <?php echo $p['Atleta']['nome']; ?>
                  </td>
                  <td>
                    <?php echo $p['Atleta']['login']; ?>
                  </td>
                  <td>
                    <?php echo $p['Atleta']['senha']; ?>
                  </td>
                </tr>
              <?php endforeach; ?>
          </tbody>
          </table>
      </div>
    </div>
