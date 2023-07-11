  <style>
    table {
      border-collapse: collapse;
    }

    table, th, td {
      border: 1px solid black;
      padding: 5px;
    }
  </style>
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
        if (!empty($dataTC)) {
          $regimes = array_keys(reset($dataTC));
          foreach ($regimes as $regime) {
            echo "<th scope='col'>$regime</th>";
          }
        }
        ?>
      </tr>
    </thead>
    <tbody>
      <?php
      if (!empty($dataTC)) {
        foreach ($dataTC as $categorie => $regimes) {
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