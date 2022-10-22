<h2 class="mapTitle">Carte</h2>
<article class="mapPage">
    <p>Appuyer sur la geocache que vous avez trouvé pour voir son nom.</p>
    <!-- display message errors or success -->
    <?php if (!empty($messages['errors'])) { ?>
        <ul>
            <?php foreach ($messages['errors'] as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php } ?>

    <?php if (!empty($messages['success'])): ?>
        <ul>
        <?php foreach ($messages['success'] as $success): ?>
            <li><?= $success ?></li>
        <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <!-- END message errors or success -->
    <div id="map" style="width:100%; height:30vh;"><div class="userPosition"></div>
    </div>
    <h3>liste des géo-caches</h3>

    <!-- display geocache list -->
    <ul id="geoCacheList">
    <?php foreach ($geoCaches as $geoCache): ?> 
    
        <li class="<?= intval($geoCache['id']) ?>">
            <p>Géocache : <?= htmlspecialchars($geoCache['name']) ?></p>
            <button
                    data-lat="<?= htmlspecialchars($geoCache['lat']) ?>"
                    data-lng="<?= htmlspecialchars($geoCache['lng']) ?>"
                    data-id="<?= intval($geoCache['id']) ?>"  class="itemList" >
                    Répondre</button>
            <button class="itemForm close"  data-id="<?= intval($geoCache['id']) ?>">Cacher  les  réponses</button>
            <form enctype="multipart/form-data" action="index.php?p=map" method="post">
                <div class="responseForm">
                    <input type="hidden" name="geocacheId" value="<?= htmlspecialchars($geoCache['id']) ?>"/>
                    <p>Quel est la bonne réponse?</p>
                    <div>
                        <input type="radio" id="case1" name="group2" value="resp1" checked >
                        <label for="case1"><?= htmlspecialchars($geoCache['resp1']) ?></label>
                    </div>
                    <div>
                        <input type="radio" id="case2" name="group2" value="resp2">
                        <label for="case2"><?= htmlspecialchars($geoCache['resp2']) ?></label>
                    </div>
                    <div>
                        <input type="radio" id="case3" name="group2" value="resp3">
                        <label for="case3"><?= htmlspecialchars($geoCache['resp3']) ?></label>
                    </div>
                </div>
                <p>
                    <img src="./assets/img/high-voltage-sign-min.png" alt="Logo caution">
                    Avant de valider votre réponse,</br>
                     vérifiez que vous avez bien choisi le thème et la réponse.
                </p>
                <button type="submit">Valider ma réponse</button>
            </form>
        </li>
        <?php endforeach; ?>
    </ul>
    <!-- END display geocache list -->

    <div>
        <!--  CHANGER PHOTO  -->
        <img src="./assets/img/dessin2.png" alt="Bandes de copine">
    </div>
</article>