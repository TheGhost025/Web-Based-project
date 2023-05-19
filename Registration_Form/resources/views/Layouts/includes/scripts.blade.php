<script src="{{ asset('frontend/js/jquery-3.6.4.min.js') }}"></script>

<script>

$(function () {
    $("#form").on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            ContentType: false,
            data: new FormData(this),
            processData: false,
            dataType: 'json',
            beforeSend: function () {
                $(document).find('span.error-text').text('');
            },
            success: function (data) {
                if (data.status == 0) {
                    $.each(data.error, function (prefix, val) {
                        $('span.' + prefix + '_error').text(val[0]);
                    });
                } else {
                    $('#form')[0].reset();
                    alert(data.msg);
                }
            }
        });
    });
});
</script>
