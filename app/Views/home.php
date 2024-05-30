<?php include('template/header.php');?>

<section id="home" class="py-2">

<div class="container">

  <div class="row w-100 m-0 align-items-center">
    <div class="col-md-6">
      <h1 class="alfa-slab-one-regular" style="font-size: 3.5em;">Organize suas Rotas e otimize seu tempo</h1>
        <div class="pe-5">
          <form action="map" method="post">
            <div class="mt-3">
              <input type="text" class="form-control p-3" name="origem" id="origem" placeholder="Origem" required>
            </div>
            <div class="mt-3">
              <input type="text" class="form-control p-3" name="destino" id="destino" placeholder="Destino" required>
            </div>

            <?php if (isset($error_message)): ?>
              <div class="alert alert-danger mt-3">
                  <?= $error_message ?>
              </div>
            <?php endif; ?>

            <div class="mt-3">
              <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="transit_mode" value="bus" checked>
                <label class="form-check-label text-white">Ônibus</label>
              </div>
              <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="transit_mode" value="subway">
                <label class="form-check-label text-white">Metrô</label>
              </div>
              <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="transit_mode" value="fast">
                <label class="form-check-label text-white">Mais Rápida</label>
              </div>
            </div>
            <div class="mt-3">
              <button type="submit" id="calcularRota" class="btn btn-outline-dark btn-block">Calcular rotas</button>
            </div>
          </form>
        </div>
    </div>
    <div class="col-md-6 foto-home">
      <img style="border-radius: 10px;" width="100%" src="../assets/img/img_home.png">
    </div>
  </div>
</div>

</section>

<?php include('template/footer.php');?>

<script src="<?= config('GoogleMapsConfig')->getPlaceScriptUrl(); ?>"></script>
<script src="../scripts/place.js"></script>