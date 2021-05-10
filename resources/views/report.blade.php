<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

</head>
<body>
    <div class="container">
        <div class="row">

            <div class="col"></div>
            <div class="col">
                <br>
                <div class="select" style="width: 20rem;">
                    <form action="{{url('/')}}" method="get">
                        <div class="form-group">
                            <select name="country" class="form-control select2">
                                <option value="" holder></option>
                                @foreach($country as $result)
                                <option value="{{$result}}">{{$result}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-block">Select</button>
                        </div>
                    </form>
                </div>

                <div class="card" style="width: 20rem;">
                    
                    <div class="card-body">
                        <h4 class="card-title">COVID-19</h4>
                        
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center">
                            <h4>{{$list_data["country"]}}</h4>
                        </li>
                        <li class="list-group-item text-center text-info">
                            <h4>{{$list_data["confirmed"]}}</h4>
                        </li>
                    </ul>
                    <div class="card-body">
                        <table width="100%">
                            <tr>
                                <th>
                                    <h6 class="text-center">Нас барсан</h6>
                                </th>
                                <th>
                                    <h6 class="text-center">Эдгэрсэн</h6>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <h4 class="text-center text-danger">{{$list_data["deaths"]}}</h4>
                                </td>
                                <td>
                                    <h4 class="text-center text-success">{{$list_data["recovered"]}}</h4>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-footer">
                        <h6 class="text-center">Updated at: {{$list_data["lastUpdate"]}}</h6>
                    </div>
                </div>

            </div>
            <div class="col"></div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>


</body>

</html>
