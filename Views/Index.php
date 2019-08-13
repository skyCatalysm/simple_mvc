<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <form class="p-5 bg-light m-5 row" method="POST">
        <div class="form-group col-md-6">
            <label>Input</label>
            <input type="text" class="form-control" name="string" placeholder="enter string" required>
        </div>
        <div class="form-group col-md-6">
            <label>Sort Strategy</label>
            <select class="form-control" name="sortType" required>
                <option value="" disabled selected>
                    Select your option
                </option>
                <option value="BubbleSort">Bubble sort</option>
                <option value="QuickSort">Quick sort</option>
            </select>
        </div>
        <div class="col-md-6">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
</html>