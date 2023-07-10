<main>
    <br>
	<section class="section">
        <br>
		<div class="container">
            <br>
            <div class="row justify-content-center" style="background-color:whitesmoke;border-color:whitesmoke ">
                <br>
<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Activite</th>
                <th scope="col">Quantite</th>
                <th scope="col">Unite</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($list); $i++) {
            ?>
                <tr>
                    <td><?php echo $list[$i]['act']; ?></td>
                    <td><?php echo $list[$i]['quantite']; ?></td>:
                    <td><?php echo $list[$i]['unite']; ?></td>
                    <td>
                        <form action="<?php echo base_url('Activite/updatePage'); ?>" method="post">
                            <input type="hidden" name="idActivite" value="<?php echo $list[$i]['idActivite']; ?>">
                            <input type="hidden" name="nom" value="<?php echo $list[$i]['act']; ?>">
                            <input type="hidden" name="quantite" value="<?php echo $list[$i]['quantite']; ?>">
                            <input type="hidden" name="unite" value="<?php echo $list[$i]['unite']; ?>">
                            <button type="submit" class="btn btn-success" style="color:white"><i class="bi bi-pencil-square"></i></button>
                        </form>
                    </td>
                    <td>
                        <form action="<?php echo base_url('Activite/delete'); ?>" method="post">
                            <input type="hidden" name="idActivite" value="<?php echo $list[$i]['idActivite']; ?>">
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