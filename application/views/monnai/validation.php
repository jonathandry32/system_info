<main>
  <div class="container">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="card mb-3" style="margin-top: 50px;">

              <div class="card-body">
                <div class="pt-4 pb-3">
                    <h5 class="card-title text-center pb-0 fs-4"> Valider les codes </h5>
                </div>
                    <table class="table"  id="filter">
                        <tr>
                                <th scope="col"> Utilisateur </th>
                                <th scope="col"> Code </th>
                                <th scope="col"> Montant </th>
                                <th>Valider</th>
                        </tr>
                        <?php for($i=0;$i<count($list);$i++){ ?>
                            <tr>
                                <td><?php echo $list[$i]['utilisateur']; ?></td>
                                <td><?php echo $list[$i]['code']; ?></td>
                                <td><?php echo $list[$i]['montant']; ?></td>
                                <td>
                                    <form action="<?php echo base_url('Monnai/valider');?>" method="post">
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
      </div>

    </section>

  </div>
</main>