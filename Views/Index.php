
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
<div class="container">
    <form method="post">
        <div class="row">
            <div class="col-25">
                <label for="string">Input</label>
            </div>
            <div class="col-75">
                <input aria-label="string" type="text" name="string" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="string">Sort Strategy</label>
            </div>
            <div class="col-75">
                <select aria-label="sort type" name="sortType" required>
                    <option value="" disabled selected>
                        Select your option
                    </option>
                    <option value="BubbleSort">Bubble sort</option>
                    <option value="QuickSort">Quick sort</option>
                </select>
            </div>
        </div>
        <div class="row">
            <input type="submit">
        </div>
    </form>
</div>
</body>
</html>