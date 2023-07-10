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
        <center><h2>Inserer une nouvelle activité sportive</h2></center>
        <br>
        <form class="row g-3 needs-validation" action="<?php echo base_url('Activite/insertActivite');?>" method="POST" novalidate>
            <div class="row mb-3">
                <label for="nom" class="col-sm-3 col-form-label">Nom</label>
                <div class="col-sm-9">
                    <input type="text" name="nom" class="form-control" id="nom" required>
                    <div class="invalid-feedback">Nom obligatoire!</div>
                </div>
            </div>           
            <br>
            <div class="row mb-3">
                <label for="duree" class="col-sm-3 col-form-label">Quantite</label>
                <div class="col-sm-9">
                    <input type="number" name="qtt" class="form-control" id="qtt" required>
                    <div class="invalid-feedback">Quantite obligatoire!</div>
                </div>
            </div>           
            <br>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Unite</label>
                <div class="col-sm-9">
                    <select class="form-select" aria-label="Default select example" name="unite">
                        <?php for ($i=0;$i<count($unites);$i++){ ?>
                            <option value="<?php echo $unites[$i]['idUnite']; ?>"> <?php echo $unites[$i]['nom']; ?> </option>
                            <?php } ?>
                        </select>
                </div>
            </div>  
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