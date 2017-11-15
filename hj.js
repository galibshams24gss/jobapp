$(function() {
  $("#fileToUpload").on('change', function() {
    // Display image on the page for viewing
    readURL(this, "preview");

  });
});

function readURL(input, tar) {
  if (input.files && input.files[0]) { // got sth

    // Clear image container
    $("#" + tar).removeAttr('src');

    $.each(input.files, function(index, ff) // loop each image 
      {

        var reader = new FileReader();

        // Put image in created image tags
        reader.onload = function(e) {
          $('#' + tar).attr('src', e.target.result);
        }

        reader.readAsDataURL(ff);

      });
  }
}