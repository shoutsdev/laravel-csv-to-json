<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10 Sweet Alert Confirm Delete Example - shouts.dev</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <form action="{{ route('json.converter') }}" method="post" enctype="multipart/form-data">@csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="csv_file">CSV File</label>
                    <input type="file" name="csv_file" id="csv_file" class="form-control">
                </div>
            </div>
            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
