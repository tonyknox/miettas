$(function() {

    $('#recipeModal').on('show.bs.modal', function(event) {

        var id = $(event.relatedTarget).data('myid')

        $.get("/mymethod/" + id, function(data) {

            var modal = $('#methodModal');

            var nm = $(data).find("#name").html()
            nm = "<h4>" + nm + "</h4>";
            modal.find('#name-text').html(nm);

            var fn = $(data).find("#method").html()
            fn = "<h5>Method</h5>" + fn;
            modal.find('#method-text').html(fn);
        });
    });