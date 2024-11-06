<!-- Structure HTML -->

<div class="card mt-4 mx-auto p-2" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Nom Prénom</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Envoyé le : <?= $data['created_at'] ?></h6>
    <p class="card-text"><?= $data['text'] ?></p>
  </div>
</div>