<main>
  <div class="container">
  </br>
    <section class="section">
    </br>
      <div class="container">
      </br>
        <div class="row justify-content-center">
        </br>
            <div class="card mb-3">

              <div class="card-body">
                <div class="pt-4 pb-3">
                    <h5 class="card-title text-center pb-0 fs-4"> Valider les codes </h5>
                </div>
                    <table class="table"  id="filter">
                        <tr>
                                <th scope="col"> Utilisateur </th>
                                <th scope="col"> Date </th>
                                <th scope="col"> Code </th>
                                <th scope="col"> Montant </th>
                                <th>Valider</th>
                        </tr>
                        <?php for($i=0;$i<count($list);$i++){ ?>
                            <tr>
                                <td><?php echo $list[$i]['utilisateur']; ?></td>
                                <td><?php echo $list[$i]['date']; ?></td>
                                <td><?php echo $list[$i]['code']; ?></td>
                                <td><?php echo $list[$i]['montant']; ?></td>
                                <td>
                                    <form action="<?php echo base_url('Monnai/valider');?>" method="post">
                                        <input type="hidden" name="idUsere" value="<?php echo $list[$i]['idUtilisateur']; ?>">
                                        <input type="hidden" name="idCode" value="<?php echo $list[$i]['idCode']; ?>">
                                        <input type="hidden" name="montant" value="<?php echo $list[$i]['montant']; ?>">
                                        <button type="submit" class="btn btn-primary" style="color:white">Valider</button>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>

          </div>
        </div>
      </div>

    </section>

  </div>
</main>