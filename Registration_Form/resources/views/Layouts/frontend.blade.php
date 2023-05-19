<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">

    </head>
    <body>
        <div>
            @include('Layouts.includes.header')
            @include('Layouts.includes.form')
            @include('Layouts.includes.footer')

        </div>
        <script src="{{ asset('frontend/js/jquery-3.6.4.min.js') }}"></script>
        <!--<script src="{ { asset('frontend/js/bootstrap5') }}"></script>-->
        <script>
            $(document).ready(function() {
                $('#button').click(function() {
                    $.ajax({
                        url: "{{ route('rapidapi.getActor' , ['date' => "+ $('#birthdate').val() +"]) }}",
                        type: "GET",
                        success: function(data) {
                            data.forEach(element => {
                                $("#actors").append("<p>"+element['name']+"</p>");
                            });
                        }
                    });
                });
            });

            $('#form').submit(function(event){
                event.preventDefault();
                var formData = $(this).serialize();
                var isAjax = $(this).find('input[name="ajax"]').val();

                $.ajax({
                    url: "{{ route('submit.form') }}",
                    method: 'POST',
                    data: formData,
                    success: function(response){
                        if(isAjax){
                            if(response.status == 1){
                                $('#form')[0].reset();
                                alert(response['msg']);
                            }else{
                                $.each(response['error'], function (prefix, val) {
                                $('span.' + prefix + '_error').text(val[0]);
                    });
                            }
                        }
                    }
                });
            });

        </script>
    </body>
</html>
