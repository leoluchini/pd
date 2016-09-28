$.fn.inlineEdit = function() {

    $(this).hover(function() {
        $(this).addClass('hover');
    }, function() {
        $(this).removeClass('hover');
    });

    $(this).click(function() {

        var elem = $(this);
        var replaceWith = $('<input class="form-control input-editable" name="'+elem.data('name')+'" type="text" />');
        replaceWith.val(elem.html());
        elem.hide();
        elem.after(replaceWith);
        replaceWith.focus();

        replaceWith.blur(function() {

            if ($(this).val() != "") {
                elem.text($(this).val());
                $.ajax({
                    url:  elem.data('url'),
                    type: "PUT",
                    data: $(this).serialize(),
                })
            }

            $(this).remove();
            elem.show();
        });
    });
}
