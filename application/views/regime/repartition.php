  <style>
    table {
      border-collapse: collapse;
    }

    table, th, td {
      border: 1px solid black;
      padding: 5px;
    }
  </style>
  <h1>Tableau croisé</h1>
  <?php
  // Données de test
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

  <table id="pivotTable">
    <thead>
      <tr>
        <th>Catégorie</th>
        <?php
        // Affiche les en-têtes de colonne pour les régimes
        if (!empty($pivotData)) {
          $regimes = array_keys(reset($pivotData));
          foreach ($regimes as $regime) {
            echo "<th>$regime</th>";
          }
        }
        ?>
      </tr>
    </thead>
    <tbody>
      <?php
      // Affiche les données du tableau croisé
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
