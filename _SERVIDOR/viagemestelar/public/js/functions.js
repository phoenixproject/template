(function($) {
  
  RemoveTableRow = function(item) {
    
    var tr = $(item).closest('tr');

    tr.fadeOut(400, function() {
      tr.remove();  
    });

    return false;
  }
})(jQuery);

(function($) {
  AddTableRow = function() {

    var newRow = $("<tr>");
    var cols = "";

    cols += '<td>&nbsp;</td>';
    cols += '<td>&nbsp;</td>';
    cols += '<td>&nbsp;</td>';
    cols += '<td>&nbsp;</td>';
    cols += '<td>';
    //cols += '<button onclick="RemoveTableRow(this)" type="button">Remover</button>';
    cols += '<button class="btn btn-large btn-danger" onclick="RemoveTableRow(this)" type="button">Remover</button>';
    cols += '</td>';

    newRow.append(cols);
    $("#products-table").append(newRow);

    return false;
  };
})(jQuery);