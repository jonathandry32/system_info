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
        <center><h2>Modifier l'activité sportive</h2></center>
        <br>
        <form action="<?php echo base_url('Activite/updateActivite');?>" method="POST">
            <input type="hidden" name="idActivite" value="<?php echo $idActivite;?>">
            <input type="hidden" name="nom" value="<?php echo $nom;?>">
            <input type="hidden" name="quantite" value="<?php echo $quantite;?>">
            <input type="hidden" name="unite" value="<?php echo $unite;?>">
            <div>
                <h5>Nom:</h5>
                <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $nom;?>" required>
            </div>
            <div>
                <h5>Quantite:</h5>
                <input type="number" class="form-control" id="duree" name="quantite" value="<?php echo $quantite;?>" required>
            </div>
            <label class="col-sm-3 col-form-label">Unite</label>
                <div class="col-sm-9">
                    <select class="form-select" aria-label="Default select example" name="unite">
                        <?php for ($i=0;$i<count($unites);$i++){ ?>
                            <option value="<?php echo $unites[$i]['idUnite']; ?>"> <?php echo $unites[$i]['nom']; ?> </option>
                            <?php } ?>
                    </select>
                </div>
            <br>
            <center><button type="submit" class="btn btn-primary" >Modifier</button></center>
            <hr>
        </form>
        <hr>
    </div>
</body>
</div>
</div>
</section>
</main>
<br>