<!DOCTYPE html>
<html>
<head>
    <title>Teams Management CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>

<div class="container">
    @yield('content')
</div>

</body>
<script>
    $(document).ready(function() {
        // Submit the search form when the search input field changes
        $('#search-input').on('input', function() {
            $('form#search-form').submit();
        });
    });
</script>
</html>
