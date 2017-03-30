<body background="../img/fundo.jpg" bgproperties="fixed" width=100% height=100% >
</br>  <center><b><p class="fixed">  </br></p> </b> <center>


        <center><div class="btn btn-info">
            <div class="form-top-left">
                   <img src="../img/esportes1.jpg" " height="160px" width="200px""> </center>

  <br/><p class="lead"><a><strong>   ÁREA ADMINISTRATIVA. </strong> <br/>Lista de Registros Solicitados:</p>
</div>

<div class="form-top container top-content form-top row">
  <div class="row">
    <br/>
      <div class="col-md-6 col-sm-offset-1">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Atleta</th>
              <th>Data</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($registros as $e): ?>
                <tr>
                  <td>
                    <?php echo $e['Evento']['nome']; ?>
                  </td>
                  <td>
                    <?php echo $e['Atleta']['nome']; ?>
                  </td>
                  <td>
                    <?php echo $e['Registro']['data']; ?>
                  </td>
                </tr>
              <?php endforeach; ?>
          </tbody>
          </table>
      </div>
    </div>
