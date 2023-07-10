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
        <center><h2>Modifier le plat</h2></center>
        <br>
        <form action="<?php echo base_url('Plat/updatePlat');?>" method="POST">
            <input type="hidden" name="idPlat" value="<?php echo $idPlat;?>">
            <input type="hidden" name="nom" value="<?php echo $nom;?>">
            <input type="hidden" name="types" value="<?php echo $types;?>">
            <input type="hidden" name="prix" value="<?php echo $prix;?>">
            <div>
                <h5>Nom:</h5>
                <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $nom;?>" required>
            </div>
            <label class="col-sm-3 col-form-label">Catégorie</label>
                <div class="col-sm-9">
                    <select class="form-select" aria-label="Default select example" name="types">
                        <?php for ($i=0;$i<count($list);$i++){ ?>
                            <option value="<?php echo $list[$i]['idTypePlat']; ?>"> <?php echo $list[$i]['nom']; ?> </option>
                            <?php } ?>
                    </select>
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