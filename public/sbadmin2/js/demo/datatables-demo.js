// Call the dataTables jQuery plugin
$(document).ready(function() {
  $("#dataTable").DataTable({
      language: {
          emptyTable: "Belum ada data !",
      },
  });
});
