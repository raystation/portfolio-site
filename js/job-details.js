$(document).ready(function() {
  $(".original-job-button").click(function() {
    $(".original-job-details").toggleClass("hide");
  });
  $(".original-job-button-minimal").click(function() {
    $(".original-job-details").toggle();
  });
});