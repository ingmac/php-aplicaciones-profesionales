<?php $this->layout('layouts/layout'); ?>
<h1>Separando las vistas</h1>
<p>Estamos haciendo la separación de las vistas</p>

<?php $this->insert('partials/some-markup', ['courseTitle' => 'El Titulo']); ?>

<?php $this->start('footerLinks') ?>

<p>
    <a>Buenas</a>
    <a>Buenas 1</a>
    <a>Buenas 2</a>
</p>
<?php $this->stop() ?>

<?php foreach($manuals as $manual): ?>
    <?= $manual['manual_name']; ?>
<?php endforeach ?>