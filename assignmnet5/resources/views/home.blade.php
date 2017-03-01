<!DOCTYPE html>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<html>
  <head>
    <meta charset="utf-8">
    <title>Twitter Clone</title>
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
        <form action="/" method="post">
          {{ csrf_field() }}
          <div class="col-md-6">
            <div class="form-group">
                <label for="title">Tweet</label>
                <!-- <input type="text" name="title" class="form-control" id="title"> -->
                <textarea class="form-control" name="tweet" id="title" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tweet</button>
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
             @foreach ($tweets as $tweet)
               <tr>
                 <td>{{ $tweet->id }}</td>
                 <td>{{ $tweet->tweet}}</td>
                 <td><a href="/tweets/{{ $tweet->id }}" class = "btn btn-primary"> View </a></td>
                 <td><a href="/tweets/{{ $tweet->id }}/delete" class = "btn btn-primary"> X </a></td>
                 <td><a href="/tweets/{{ $tweet->id }}/edit" class = "btn btn-primary"> Edit </a></td>

               </tr>
             @endforeach
             </table>
           </div>
    </div>




  </body>
</html>
