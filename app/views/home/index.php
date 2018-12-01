<div class="container">
  <div class="jumbotron jumbotron-fluid mt-4">
    <div class="container">
      <h1 class="display-4 ml-4">Halo perkenalkan</h1>
        <ul class="list-group ml-4">
        <?php foreach ($data['bio'] as $bio): ?>
          <li class="list-group">
            Nama saya : <?= $bio['nama']; ?>
          </li>
        <?php endforeach ?>
        </ul>
      <hr class="my-4">
      <p class="lead">
        <a class="btn btn-primary btn-lg ml-4" href="<?= BASEURL; ?>/home/detail/<?= $bio['id']; ?>" role="button">Tentang Saya</a>
      </p>
    </div>
  </div>
</div>
