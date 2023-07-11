<main>
    <br>
	<section class="section">
        <br>
		<div class="container">
            <br>
            <div class="row justify-content-center" style="background-color:whitesmoke;border-color:whitesmoke ">
                <br>
<body>
    <div class="cont">
        <center><h2>Calculer mon IMC</h2></center>
        <br>
        <form class="row g-3 needs-validation" action="<?php echo base_url('IMC/calculerIMC');?>" method="POST" novalidate>
            <div class="row mb-3">
                <label for="duree" class="col-sm-3 col-form-label">Poids</label>
                <div class="col-sm-9">
                    <input type="number" name="poids" class="form-control" id="poids" required>
                    <div class="invalid-feedback">Poids obligatoire!</div>
                </div>
            </div>           
            <br>
            <div class="row mb-3">
                <label for="duree" class="col-sm-3 col-form-label">Taille</label>
                <div class="col-sm-9">
                    <input type="number" name="taille" class="form-control" id="taille" required>
                    <div class="invalid-feedback">Taille obligatoire!</div>
                </div>
            </div> 
            </br>
            <center><button type="submit" class="btn btn-primary" >Calculer</button></center>
            <hr>
        </form>
    </div>

    <?php if(isset($imc)) { ?>
        <center><h3>Votre IMC: <?php echo $imc ; ?></h3></center>
        <table class="table table-hover">
            <th>Indice de masse corporelle(IMC)</th>
            <th>Interprétation selon l'OMS</th>
            
                <?php for($i=0; $i<count($pourcentages); $i++){ ?>
                    <tr>
                        <td> <?php echo $pourcentages[$i]['minvaleur']; ?> à  <?php echo $pourcentages[$i]['maxvaleur']; ?></td>
                        <td><?php echo $pourcentages[$i]['libelle']; ?></td>
                    </tr>
                <?php } ?>
           
        </table>
    <?php } ?>

    <!-- <script src="<?php //echo base_url('assets/js/uploader.js') ?> " defer></script> -->
</body></div>
</div>
</section>
</main>
<br>