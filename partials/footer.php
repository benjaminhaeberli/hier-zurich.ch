<?php
  $jsPath = $_SERVER['DOCUMENT_ROOT'] . '/dist/app.js';
  $jsURL = '/dist/app.js?v=' . filemtime($jsPath);
?>
    <footer>
        <p>© <?php echo date("Y"); ?> HIER Film</p>
    </footer>
    <script src="<?= $jsURL ?>" defer></script>
</body>
</html>
