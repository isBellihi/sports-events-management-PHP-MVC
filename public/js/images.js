$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class=\"alert alert-success col-xs-2 col-sm-2 col-md-2 nnah\">" +
          	"<button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\" class=\"glyphicon glyphicon-remove\"></span></button>" +
            "<img class=\" col-xs-12 col-sm-12 col-md-12 nnahs\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/>" +
            "</div>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });
          
          // Old code here
          /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
          }).insertAfter("#files").click(function(){$(this).remove();});*/
          
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});