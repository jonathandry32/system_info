<main>
  <div class="container">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="card mb-3" style="margin-top: 50px;">
              <div class="card-body">
                <div class="pt-4 pb-3">
                    <h5 class="card-title text-center pb-0 fs-4">Regime convenable</h5>
                </div>
                    <table class="table">
                        <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Payer</th>
                        </tr>
                        <?php for($i=0;$i<count($resultat);$i++){ ?>
                            <tr>
                                <td><?php echo $resultat[$i]['nom']; ?></td>
                                <td><?php echo $resultat[$i]['prix']; ?></td>
                                <td>
                                    <form action="<?php echo base_url('objectif/payer');?>" method="post">
                                        <input type="hidden" name="idRegime" value="<?php echo $resultat[$i]['idRegime']; ?>">
                                        <button type="submit" class="btn btn-primary" style="color:white">Choisir</button>
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