<style>
  input{
    border-color:lightgrey ;
    font-size: 14px;
    padding: 5px 10px;
    border-radius: 8px;
    outline: none;
    background-color: var(--background);
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
<body>

        <center style="margin-bottom: 20px; background:transparent;">
            <input type="text" id="filter0" onkeyup="filter0()" placeholder="Filtrer par Regime">
            <input type="text" id="filter1" onkeyup="filter1()" placeholder="Filtrer par Duree">
            <input type="text" id="filter2" onkeyup="filter2()" placeholder="Filtrer par Prix">
        </center>

    <table class="table table-striped"   id="filter">
        <thead>
            <tr>
                <th scope="col">Regime</th>
                <th scope="col">Duree</th>
                <th scope="col">Prix</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($list); $i++) {
            ?>
                <tr>
                    <td><?php echo $list[$i]['nom']; ?></td>
                    <td><?php echo $list[$i]['duree']; ?></td>
                    <td><?php echo $list[$i]['prix']; ?> Ar</td>
                    <td>
                        <form action="<?php echo base_url('Regime/updatePage'); ?>" method="post">
                            <input type="hidden" name="idRegime" value="<?php echo $list[$i]['idRegime']; ?>">
                            <input type="hidden" name="nom" value="<?php echo $list[$i]['nom']; ?>">
                            <input type="hidden" name="duree" value="<?php echo $list[$i]['duree']; ?>">
                            <input type="hidden" name="prix" value="<?php echo $list[$i]['prix']; ?>">
                            <button type="submit" class="btn btn-success" style="color:white"><i class="bi bi-pencil-square"></i></button>
                        </form>
                    </td>
                    <td>
                        <form action="<?php echo base_url('Regime/delete'); ?>" method="post">
                            <input type="hidden" name="idRegime" value="<?php echo $list[$i]['idRegime']; ?>">
                            <button type="submit" class="btn btn-danger" style="color:white"><i class="bi bi-trash-fill"></i></button>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <hr>
</body>
</div>
</div>
</section>
</main>
<br>
<script src="<?php echo base_url('assets/js/filtrage.js'); ?>"></script>