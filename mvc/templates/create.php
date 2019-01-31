<!-- templates/create.php -->
<?php session_start(); ?>
<?php $title = "Create New Survey" ?>

<?php ob_start() ?>
   <h2>Create New Survey</h2>

<div>
 <form method="post" name="create-form" action="create" autocomplete="off"> <!-- PHP add form functionality here -->
    <hr style="clear: both"/>
        <div class="form-group" id="survey-title">
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-tag"></span></span>
            <input type="text" name="survey-title" class="form-control" value="Enter a name for your survey" onClick="this.select()" maxlength="40" />
          </div> <!-- /input-group -->
        </div> <!-- /form-group -->

<div class="form-group" id="survey-title">
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-question-sign"></span></span>
            <input type="text" name="opt-1" class="form-control" value="Enter the first voting option" onClick="this.select()" maxlength="40" />
          </div> <!-- /input-group -->
        </div> <!-- /form-group -->


<div class="form-group" id="survey-title">
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-question-sign"></span></span>
            <input type="text" name="opt-2" class="form-control" value="Enter the second voting option" onClick="this.select()" maxlength="40" />
          </div> <!-- /input-group -->
        </div> <!-- /form-group -->

 
<div class="form-group" id="survey-title">
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-question-sign"></span></span>
            <input type="text" name="opt-3" class="form-control" value="Enter the third voting option" onClick="this.select()" maxlength="40" />
          </div> <!-- /input-group -->
        </div> <!-- /form-group -->        
        
   
<input type="submit" class="btn btn-success pull-right" id="submit" value="Submit">
   
           
           
       
    </form>

</div>



<?php $content = ob_get_clean() ?>

<?php include "layout.php" ?>