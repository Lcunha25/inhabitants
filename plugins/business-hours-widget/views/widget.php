<!-- This file is used to markup the public-facing widget. -->
<?php
    if( strlen(trim($monday_friday)) > 0 ){ ?>
        <p>
        <span class="weekday">
        Monday to Friday:
        </span>
        <?php echo $monday_friday; ?>
        </p>
    <?php
    }
?>
<!-- This file is used to markup the public-facing widget. -->
<?php
    if( strlen(trim($saturday)) > 0 ){ ?>
        <p>
        <span class="weekday">
        Saturday:
        </span>
        <?php echo $saturday; ?>
        </p>
    <?php
    }
?>
<!-- This file is used to markup the public-facing widget. -->
<?php
    if( strlen(trim($sunday)) > 0 ){ ?>
        <p>
        <span class="weekday">
        Sunday:
        </span>
        <?php echo $sunday; ?>
        </p>
    <?php
    }
?>