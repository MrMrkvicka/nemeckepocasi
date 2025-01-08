<?= $this->extend("layout/shablona"); ?>
<?= $this->section("title"); ?><title>Stanice zemi</title><?= $this->endSection(); ?>
<?= $this->section("obsah"); ?>
<style>
    .perfect-size{
        height: 200px;
        width: auto;
    }
</style>
<?php
?>
<div class="row justify-content-center">
    <h1 class="col-4 text-center justify-content-center">Seznam stanic <?= $bundesland->name ?></h1>

</div>
<div class="row">

    <?php

    foreach ($station as $row) {
    ?>
        <div class="col-xl-4 col-md-6 col-sm-12 p-2">
            <div class="card">
                <div class="card-header text-center">
                    <p><?= anchor("stanice/" . $row->S_ID, $row->place)  ?></p>
                </div>
                <div class="card-body mx-auto">
                    <ul>
                        <ol>Zeměpisná šířka <?= $row->geo_latitude ?></ol>
                        <ol>Zeměpisná délka <?= $row->geo_longtitude ?></ol>
                        <ol>Nadmořská výška <?= $row->height ?></ol>
                    </ul>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<?= $this->endSection(); ?>