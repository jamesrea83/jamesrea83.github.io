<!-- templates/list.php -->
<?php session_start(); ?>
<?php $title = "List of Surveys!" ?>

<?php ob_start() ?>
   <h2>Surveys</h2>

<ul class="list-group">
        <?php 
            foreach ($surveys as $outer) {
                echo "<li class='list-group-item input-group'><a href='/mvc/show/" . $outer["ID"] . "'><div class='btn btn-default btn-block survey-link'>"  . $outer["Question"] . "</div></a></li>";
            } 
        ?>
</ul>

<form action="/mvc/create">
    <input class="btn btn-success pull-right" type="submit" value="Create new survey" />
</form>


<?php $content = ob_get_clean() ?>

<?php include "layout.php" ?>