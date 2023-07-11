
<main>
    <br>
	<section class="section">
        <br>
		<div class="container">
            <br>
            <div class="row justify-content-center" style="background-color:whitesmoke;border-color:whitesmoke ">
                <br>
<body>
<form class="row g-3 needs-validation" action="<?php echo base_url('Gold/choose');?>" method="POST" novalidate>
<div class="pt-8">
<h3 class="card-title text-center pb-0 fs-4">Gold</h3>
</br>
<h5 class="card-title text-center pb-0 fs-4">Prix: <?php echo $gold['prix']; ?> Ar</h5>
<h5 class="card-title text-center pb-0 fs-4">Remise <?php echo $gold['remise']; ?> % sur tous les régimes</h5>
<input type="hidden" name="prix" value="<?php echo $gold['prix']; ?>">
    <table class="table table-striped"   id="filter">
        <thead>
            <tr>
                <th scope="col">Regime</th>
                <th scope="col">Prix avec remise</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($list); $i++) {
            ?>
                <tr>
                    <td><?php echo $list[$i]['nom']; ?></td>
                    <td><?php echo ($list[$i]['prix'])-(($list[$i]['prix']*$gold['remise'])/100); ?> Ar</td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <hr>
    <center><button type="submit" class="btn btn-primary" >Payer</button></center>
    </form>
</body>
</div>
</div>
</section>
</main>
<br>
<script src="<?php echo base_url('assets/js/filtrage.js'); ?>"></script>