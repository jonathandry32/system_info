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
        <center><h2>Modifier le régime</h2></center>
        <br>
        <form action="<?php echo base_url('Regime/updateRegime');?>" method="POST">
            <input type="hidden" name="idRegime" value="<?php echo $idRegime;?>">
            <input type="hidden" name="nom" value="<?php echo $nom;?>">
            <input type="hidden" name="duree" value="<?php echo $duree;?>">
            <input type="hidden" name="prix" value="<?php echo $prix;?>">
            <div>
                <h5>Nom:</h5>
                <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $nom;?>" required>
            </div>
            <div>
                <h5>Duree:</h5>
                <input type="number" class="form-control" id="duree" name="duree" value="<?php echo $duree;?>" required>
            </div>
            <div>
                <h5>Prix:</h5>
                <input type="number" class="form-control" id="prix" name="prix" value="<?php echo $prix;?>" required>
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