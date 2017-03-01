<!DOCTYPE html>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Tweet</title>
  </head>
  <body>


<!--   Success and Erro messages  --------------->
    <div class="row">
          <div class="col-xs-12">
              @if (session('successStatus'))
                 <div class="alert alert-success" role="alert">
                    {{ session('successStatus') }}
                  </div>
                @endif

              @if (count($errors) > 0)
                <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
          </div>
    </div>



<!--   FORM  --------------->
    <div class="container">
        <form action="/tweets/{{ $tweets->id }}" method="post">
          {{ csrf_field() }}
          <div class="col-md-6">
            <div class="form-group">
                <label for="title">Tweet</label>
                <!-- <input type="text" name="title" class="form-control" id="title"> -->
                <textarea class="form-control" name="tweet" id="title" rows="3"> {{ $tweets->tweet }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>


    <!--  Displaying Tweets   ------------->
        <div class="row">
               <div class="col-xs-12">
                 <table class="table table-striped">
                   <thead>
                     <tr>
                       <th>ID</th>
                       <th>Tweet</th>
                     </tr>
                   </thead>
                   <tbody>
                   <tr>
                     <td>{{ $tweets->id }}</td>
                     <td>{{ $tweets->tweet}}</td>


                   </tr>
                 </table>
               </div>
        </div>





  </body>
</html>
