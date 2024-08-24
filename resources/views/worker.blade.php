<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <form action="{{route('worker.create')}}" method="POST" enctype="multipart/form-data">
    @csrf
        Worker_Type<input type="text" name="work_type"><br>
        Work_Hour<input type="number" name="work_hour"><br>
        Work_Price<input type="number" name="work_price"><br>
        Rating<input type="number" name="rating"><br>
        Image<input type="file" name="image"><br>
        <button type="submit">Submit</button>

    </form>
</body>
</html>