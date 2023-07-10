
<main>
    <br>
	<section class="section">
        <br>
		<div class="container">
            <br>
            <div class="row justify-content-center" style="background-color:whitesmoke;border-color:whitesmoke ">
                <br>
<body>
<div class="pt-8">
                                    <h5 class="card-title text-center pb-0 fs-4"><?php
                                        $temp="0";
                                        foreach($plats as $p){
                                            $temp=$p;
                                        }
                                ?>
<h3 class="card-title text-center pb-0 fs-4">Régime: <?php echo $temp['reg'] ; ?></h3>
</br>
<h5 class="card-title text-center pb-0 fs-4">Plats contenus</h5>
    <table class="table table-striped"   id="filter">
        <thead>
            <tr>
                <th scope="col">Plat</th>
                <th scope="col">Type</th>
                <th scope="col">Categorie</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($plats); $i++) {
            ?>
                <tr>
                    <td><?php echo $plats[$i]['plat']; ?></td>
                    <td><?php echo $plats[$i]['types']; ?></td>
                    <td><?php echo $plats[$i]['categ']; ?> </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <hr>

    <h5 class="card-title text-center pb-0 fs-4">Activités sportives contenues</h5>
    <table class="table table-striped"   id="filter">
        <thead>
            <tr>
                <th scope="col">Activité sportive</th>
                <th scope="col">Quantité</th>
                <th scope="col">Unité</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($activites); $i++) {
            ?>
                <tr>
                    <td><?php echo $activites[$i]['act']; ?></td>
                    <td><?php echo $activites[$i]['quantite']; ?></td>
                    <td><?php echo $activites[$i]['unite']; ?> </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <hr>
    <h5 class="card-title text-center pb-0 fs-4">Prix du régime: <?php
                                     $temp="0";
                                     foreach($plats as $p){
                                            $temp=$p;
                                     }
                                     echo $temp['prix']; ?> Ar </h5>
</body>
</div>
</div>
</section>
</main>
<br>
<script src="<?php echo base_url('assets/js/filtrage.js'); ?>"></script>