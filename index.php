<?php include("inc/header.php"); ?>

<section class="case-text">
        <div class="card">
            <div class="card-header">
                <h1>CHANGE TEXT CASE - Convert Case</h1>
            </div>
            <div class="card-body">
                <p>Change Text Case is a handy web application that enables you to change the text case of any given
                    text. Simply copy and paste the text into the text area below and click the required text case.
                </p>
                <?php include("componets/form_field.php"); ?>
                <div id="error-msg"></div>
            </div>
        </div>
</section>

<script src="assets/js/jQuery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" />
<script>
    var input_id = '#textCase';
    var output_id = '#textCase';
    const NEW_ERROR_MESSAGE = '#error-msg';
    function count() {
        setTimeout(function () {
            var val = $.trim($('#textCase').val());
            chars = val.length;
            if (!chars) {
                words = 0;
            } else {
                words = val.replace(/\s+/gi, ' ').split(' ').length;
            }
            $("#count_").html(words);
            $("#count_character").html(chars);
        }, 500);
    }



    $("#toggle_case").click(function () {
        if ($.trim($(input_id).val()) == '') {
            $(output_id).attr('placeholder', toggle_case($(input_id).attr('placeholder')));
        } else {
            $(output_id).val(toggle_case($(input_id).val()));
        }
    });
    function toggle_case(str) {
        return str.split('').reduce(function (str, char) {
            return str + (char.toLowerCase() === char
                ? char.toUpperCase()
                : char.toLowerCase());
        }, '');
    }


    //Sentence Case
    $("#sentence_case").click(function () {
        if ($.trim($(input_id).val()) == '') {
            $(output_id).attr('placeholder', sentence_case($(input_id).attr('placeholder')));
        } else {
            $(output_id).val(sentence_case($(input_id).val()));
        }
    });
    function sentence_case(a) {
        a = a.toLowerCase();
        var b = true;
        var c = "";
        for (var d = 0; d < a.length; d++) {
            var e = a.charAt(d);
            if (/\.|\!|\?|\n|\r/.test(e)) {
                b = true;
            } else if ($.trim(e) != "" && b == true) {
                e = e.toUpperCase();
                b = false;
            }
            c += e;
        }
        return c;
    }

    //Lower Case
    $("#lower_case").click(function () {
        if ($.trim($(input_id).val()) == '') {
            $(output_id).attr('placeholder', $(input_id).attr('placeholder').toLowerCase());
        } else {
            $(output_id).val($(input_id).val().toLowerCase());
        }
    });
    // capitalized Case
    $("#capitalized_case").click(function () {
        if ($.trim($(input_id).val()) == '') {
            $(output_id).attr('placeholder', uc_words($(input_id).attr('placeholder').toLowerCase()));
        } else {
            $(output_id).val(uc_words($(input_id).val().toLowerCase()));
        }
    });
    function uc_words(a) {
        return (a + "").replace(/^(\S)|\s+(\S)/g, function (a) {
            return a.toUpperCase();
        });
    }

    //Upper case
    $("#upper_case").click(function () {
        if ($.trim($(input_id).val()) == '') {
            $(output_id).attr('placeholder', $(input_id).attr('placeholder').toUpperCase());
        } else {
            $(output_id).val($(input_id).val().toUpperCase());
        }
    });

    //alternating Case
    $("#alternating_case").click(function () {
        if ($.trim($(input_id).val()) == '') {
            $(output_id).attr('placeholder', alternating_case($(input_id).attr('placeholder')));
        } else {
            $(output_id).val(alternating_case($(input_id).val()));
        }
    });
    function alternating_case(a) {
        a = a.toLowerCase();
        var b = "";
        for (var c = 0; c < a.length; c++) {
            var d = a.charAt(c);
            if (c % 2) {
                b += d.toUpperCase();
            } else {
                b += d;
            }
        }
        return b;
    }

    function file_download() {
        var text_ = $(input_id).val();
        if (text_ == '') {
            new_error_message(NEW_ERROR_MESSAGE, 'error', 'No content found to download.');
            return false;
        }
        var element = document.createElement('a');
        element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text_));
        element.setAttribute('download', 'ConvertCase.txt');
        element.style.display = 'none';
        document.body.appendChild(element);
        element.click();
        document.body.removeChild(element);
    }

    $('i.bi.bi-copy').click(function () {
        var copyText = document.getElementById("textCase");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(copyText.value);
        alert("Copied the text: " + copyText.value);
    })

    $('i.bi.bi-eraser').click(function () {
    document.getElementById("textCase").value = "";
})
</script>


<?php include("inc/footer.php"); ?>