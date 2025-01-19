$(function () {
    //$('.spinner').spinner();

    $.ajaxSetup({
        async: false,
        error: function (jqXHR, exception) {
            console.log(exception);
            if (jqXHR.status === 0) {
                alert('Not connect.\n Verify Network.');
            } else if (jqXHR.status == 404) {
                alert('Requested page not found. [404]');
            } else if (jqXHR.status == 500) {
                alert('Internal Server Error [500].');
            } else if (exception === 'parsererror') {
                alert('Requested JSON parse failed.');
            } else if (exception === 'timeout') {
                alert('Time out error.');
            } else if (exception === 'abort') {
                alert('Ajax request aborted.');
            } else {
                alert('Uncaught Error.\n' + jqXHR.responseText);
            }
        }
    });



    //$("#datepicker").datepicker({
    //    changeMonth: true,
    //    changeYear: true,
    //    showOtherMonths: true,
    //    selectOtherMonths: true,
    //    showAnim: "slideDown"
    //});

})

$(document).ajaxStart(function () {
    $("#loading").fadeIn(300);
});


$(document).ajaxComplete(function () {
    $("#loading").fadeOut(300);
});

//Dropdown ReUsable Component Start
function GetDropdownData(ddlSource, ddldestination, url) {

    $(ddldestination).empty();
    $(ddldestination).append('<option value="">Looding...</option>');

    $.getJSON(url, { id: $(ddlSource).val() }, function (data) {
        let items = JSON.parse(data);
        if (items.length == 0) {
            ResetDropdown(ddldestination);
        }
        else {

            $(ddldestination).empty();

            $(ddldestination).append('<option value="">-Select-</option>');

            $.each(items, function (i, item) {
                $(ddldestination).append('<option value="'
                    + item.Id + '">' +
                    item.Name + '</option>');
            });
        }
    });
}

function CascadeDropdown(params, ddldestination, url) {

    $(ddldestination).empty();
    $(ddldestination).append('<option value="">Looding...</option>');

    let items = GetDataAjaxCall(params, url);
    if (items.length == 0) {
        ResetDropdown(ddldestination);
    }
    else {
        Enable(ddldestination);
        $(ddldestination).empty();

        $(ddldestination).append('<option value="">-Select-</option>');
        $.each(items, function (i, item) {
            $(ddldestination).append('<option value="'
                + item.Id + '">' +
                item.Name + '</option>');
        });
    }
}
//All type of ajax call 
function GetDataAjaxCall(params, url) {
    var items = null;
    $.getJSON(url, params, function (data) {
        items = JSON.parse(data);
    });

    return items;
}


function ResetDropdown(ddldestination) {
    $(ddldestination).empty();
    $(ddldestination).append('<option value="">None</option>')
}

function Disable(selector) {
    $(selector).prop('disabled', true);
}

function Enable(selector) {
    $(selector).prop('disabled', false);
}

//Dropdown ReUsable Component END
