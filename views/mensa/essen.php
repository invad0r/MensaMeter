
<div data-role="listview" data-inset="true">
    <?php
    foreach ($this->essenList as $key => $value) {
        echo "<li>" . $value['name'] . "</li>";
    }
    ?>
</div>