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
        <center><h2>Inserer un nouveau régime</h2></center>
        <br>
        <form class="row g-3 needs-validation" action="<?php echo base_url('Regime/insertRegime');?>" method="POST" novalidate>
            <div class="row mb-3">
                <label for="nom" class="col-sm-3 col-form-label">Nom</label>
                <div class="col-sm-9">
                    <input type="text" name="nom" class="form-control" id="nom" required>
                    <div class="invalid-feedback">Nom obligatoire!</div>
                </div>
            </div>           
            <br>
            <div class="row mb-3">
                <label for="duree" class="col-sm-3 col-form-label">Duree</label>
                <div class="col-sm-9">
                    <input type="number" name="duree" class="form-control" id="duree" required>
                    <div class="invalid-feedback">Duree obligatoire!</div>
                </div>
            </div>           
            <br>
            <div class="row mb-3">
                <label for="duree" class="col-sm-3 col-form-label">Prix</label>
                <div class="col-sm-9">
                    <input type="number" name="prix" class="form-control" id="prix" required>
                    <div class="invalid-feedback">Prix obligatoire!</div>
                </div>
            </div> 
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Plats à ajouter</label>
                <?php for($i=0; $i<count($plats); $i++){ ?>
                    <div class="col-sm-9">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="plat" id="plat">
                                <label class="form-check-label" for="plat">
                                    <?php echo $plats[$i]['plat']; ?>
                                    <?php echo $plats[$i]['types']; ?>
                                    <?php echo $plats[$i]['prix']; ?>
                                    <?php echo $plats[$i]['picture']; ?>
                                </label>
                        </div>
                    </div>
               <?php } ?>            
            </div>           
                            <br>          
            <br>
            <center><button type="submit" class="btn btn-primary" >Ajouter</button></center>
            <hr>
        </form>
    </div>

    <!-- <script src="<?php //echo base_url('assets/js/uploader.js') ?> " defer></script> -->
</body></div>
</div>
</section>
</main>
<br>