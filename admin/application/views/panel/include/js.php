<script src="<?= base_url(); ?>assets/panel_assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="<?= base_url(); ?>assets/panel_assets/dist/js/jquery-ui.min.js"></script>
<script src="<?= base_url(); ?>assets/panel_assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/panel_assets/dist/js/app.min.js"></script>
<?php
foreach ($js as $item => $value) {
    echo '<script src="' . (is_numeric($item) ? base_url('assets/panel_assets/' . $value) : (!$value?$item:'')) . '"></script>' . PHP_EOL;
}
?>