<style>
    .apropos {
        display: flex;
        justify-content: start;
        align-items: center;
        flex-direction: column;
        gap: 1rem;
        padding: 2rem;
        background: rgb(244, 244, 244);
        border-radius: 5px;
    }

    .field {
        width: 70%;
        color: rgb(114, 114, 114);
    }

    .field span {
        color: rgb(47, 47, 47);
        font-weight: 700;
        padding-right: 3rem;
    }
</style>
<main>
  <div class="container">
    <section class="section">
    </br>
      <div class="container">
        <div class="card mb-12" style="margin-top: 50px;">
            <div class="card-body">
                
            <div class="pt-12 pb-3">
                  <h5 class="card-title text-center pb-0 fs-4">Evolution de la taille de l'utilisateur</h5>
                </div> 
                <div> 
                    <canvas id="myChart"></canvas>
                </div>
          </div>
        </div>
       </div>

    </section>

  </div>
</main><!-- End #main -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        <?php
          foreach($tailleData as $td){
            echo "'".$td['daty']."',";
          }  
        ?>
      ],
      datasets: [{
        label: 'Taille (cm)',
        data: [
          <?php
            foreach($tailleData as $td){
              echo $td['taille'].",";
            }  
          ?>
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
 