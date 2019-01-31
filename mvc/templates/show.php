<!-- templates/show.php -->
<?php $title = $survey["Question"] ?>

<?php ob_start() ?>
<?php echo $survey["Question"]; ?>
    <h1><?= $survey["Question"]; ?></h1>
    
    <table class="table table-bordered table-responsive results-table">

    </table>

    <div class="chart-container"></div>

    <script src="/mvc/templates/d3pie.js"></script>

<script>
$(document).ready(function() {
var survey = <?= json_encode($survey); ?>;
postResultsTable(survey);
createChart(survey);
function buttonAction() {
  $(".voteButton").on("click", function(event) {
    var voteData = {
       ID: survey.ID,
       vote: event.target.id    
     }
     console.log("vote button clicked");
     $.ajax({
        type: "POST",
        url: "/mvc/vote",
        data: voteData,
        success: function(response) {
            survey = JSON.parse(response);
            console.log("vote successful");
            postResultsTable(survey);
            createChart(survey);
            buttonAction();
        }
      })
  })
};
buttonAction();
function postResultsTable(survey) {

  var resultString = "";
  resultString += '<table class="table table-bordered table-responsive results-table">';
  resultString += '<tr><td>' + survey.OptionA + '</td><td>' + survey.VoteA + '</td><td><div class="btn btn-default voteButton" id="VoteA">Vote</div></td></tr>';
  resultString += '<tr><td>' + survey.OptionB + '</td><td>' + survey.VoteB + '</td><td><div class="btn btn-default voteButton" id="VoteB">Vote</div></td></tr>'; 
  resultString += '<tr><td>' + survey.OptionC + '</td><td>' + survey.VoteC + '</td><td><div class="btn btn-default voteButton" id="VoteC">Vote</div></td></tr>'; 
  resultString += '</table>';
  
  $(".results-table").html(
		resultString
  )

}

})

</script>



<?php $content = ob_get_clean() ?>

<?php include "layout.php" ?>