$(document).ready(function() {
    
    var skillIcons = {
      "javascript": '<i class="devicons devicons-javascript_badge" title="Javascript"></i>',
      "jquery": '<i class="devicons devicons-jquery" title="jQuery"></i>',
      "sass": '<i class="devicons devicons-sass" title="Sass"></i>',
      "css": '<i class="devicons devicons-css3" title="CSS3"></i>',
      "html": '<i class="devicons devicons-html5" title="HTML5"></i>',
      "compass": '<i class="devicons devicons-compass" title="Compass"></i>',
      "bootstrap": '<i class="devicons devicons-bootstrap" title="Bootstrap"></i>',
      "react": '<i class="devicons devicons-react" title="React.js"></i>',
      "node": '<i class="devicons devicons-nodejs" title="Node.js"></i>'
    }
    
    
    
    $(".project-cover").on("click", function() {
        var id = this.id;

          $(".modal-body .modal-title").html(projectData[id].title)
          $(".modal-body .modalThumb").html("<img class='img-responsive' src=" + projectData[id].thumbnail + ">");
          console.log(projectData[id].skills)
          $(".modal-footer .skill-icons").html("")
          for (var i = 0; i < projectData[id].skills.length; i++) {
            $(".modal-footer .skill-icons").append(skillIcons[projectData[id].skills[i]])
          }
          $(".modal-footer .demo-open").attr("href", projectData[id].link);
          $(".description").html(projectData[id].description);
        $('#myModal').modal('show');
    })    
    
    
})





