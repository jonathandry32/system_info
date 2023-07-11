  <style>
    table {
      border-collapse: collapse;
    }

    table, th, td {
      border: 1px solid black;
      padding: 5px;
    }
  </style>
  <?php
  $pivotData = array(
    "Viande" => array(
      "Régime 1" => 10,
      "Régime 2" => 20,
      "Régime 3" => 30
    ),
    "Poisson" => array(
      "Régime 1" => 40,
      "Régime 2" => 50,
      "Régime 3" => 60
    ),
    "Volaille" => array(
      "Régime 1" => 70,
      "Régime 2" => 80,
      "Régime 3" => 90
    )
  );
  ?>

  <main>
    <br>
	<section class="section">
        <br>
		<div class="container">
            <br>
            <div class="row justify-content-center" style="background-color:whitesmoke;border-color:whitesmoke ">
                <br>
                <div class="card mb-3">
                <div class="card-body">
                <div class="pt-4 pb-3">
                  <h5 class="card-title text-center pb-0 fs-4">Tableau croisé des repartitions de regimes</h5>
                </div>
                <table class="table table-borderless">
    <thead>
      <tr>
        <th>Catégorie</th>
        <?php
        if (!empty($pivotData)) {
          $regimes = array_keys(reset($pivotData));
          foreach ($regimes as $regime) {
            echo "<th scope='col'>$regime</th>";
          }
        }
        ?>
      </tr>
    </thead>
    <tbody>
      <?php
      if (!empty($pivotData)) {
        foreach ($pivotData as $categorie => $regimes) {
          echo "<tr>";
          echo "<th>$categorie</th>";
          foreach ($regimes as $valeur) {
            echo "<td>$valeur</td>";
          }
          echo "</tr>";
        }
      }
      ?>
    </tbody>
  </table>
                <hr>
            </div>
            </div>
</div>
</div>
</section>
</main>
<br>
<script src="<?php echo base_url('assets/js/filtrage.js'); ?>"></script>