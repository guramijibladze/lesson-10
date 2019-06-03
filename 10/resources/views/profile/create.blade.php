<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<form action="{{ route('profile.store') }}" method="POST">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">სათაური</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="შეავსეთ ველი" required>
                        </div>
                        <div class="form-group">
                            <label for="description">აღწერა</label>
                            <textarea name="description" class="form-control" id="description" rows="3" placeholder="აღწერეთ"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <button type="submit" ><b>დამატება</b></button>
                    </div>
                </div>
            </div>
        </div>
</form>
</body>
</html>