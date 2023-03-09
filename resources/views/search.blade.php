<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pham Tuan Ngoc</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css')}}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:40px">
            <h4>Bai Thi Pham Tuan Ngoc</h4><hr>
            <form action="{{ route('web.search') }}" method="GET">
                <div class="form-group">
                    <label for="">Nhap Ten Sach </label>
                    <input type="text" class="form-control" name="query" placeholder="Search here....." value="{{ request()->input('query') }}">
                    <span class="text-danger">@error('query'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
            <hr>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>BookID</th>
                    <th>Author</th>
                    <th>Tittle</th>
                    <th>ISBN</th>
                    <th>Pub year</th>
                    <th>Available</th>
                </tr>
                </thead>
                <tr>
                    <td>1</td>
                    <td>101</td>
                    <td>11</td>
                    <td>Lean PHP</td>
                    <td>A06162</td>
                    <td>2019</td>
                    <td>90</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>102</td>
                    <td>99</td>
                    <td>Lean HTML</td>
                    <td>A06163</td>
                    <td>2022</td>
                    <td>60</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>103</td>
                    <td>30</td>
                    <td>Lean Laravel</td>
                    <td>A06164</td>
                    <td>2020</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>104</td>
                    <td>50</td>
                    <td>Lean C</td>
                    <td>A06165</td>
                    <td>2021</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>105</td>
                    <td>50</td>
                    <td>Lean Boostrap</td>
                    <td>A06166</td>
                    <td>2014</td>
                    <td>10</td>
                </tr>
            </table>
            <hr>
            <br>
            <br><br>
            @if(isset($countries))
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>BookID</th>
                        <th>Author</th>
                        <th>Tittle</th>
                        <th>ISBN</th>
                        <th>Pub year</th>
                        <th>Available</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($countries) > 0)
                        @foreach($countries as $countrie)
                            <tr>
                                <td>{{ $countrie->id }}</td>
                                <td>{{ $countrie->bookid }}</td>
                                <td>{{ $countrie->authorid }}</td>
                                <td>{{ $countrie->title }}</td>
                                <td>{{ $countrie->ISBN }}</td>
                                <td>{{ $countrie->pub_year }}</td>
                                <td>{{ $countrie->available }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr><td>No result found!</td></tr>
                    @endif
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
</body>
</html>
