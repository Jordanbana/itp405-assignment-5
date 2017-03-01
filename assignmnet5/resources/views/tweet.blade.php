<!DOCTYPE html>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<html>
  <head>
    <meta charset="utf-8">
    <title>Twitter Clone</title>
  </head>
  <body>



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
                 <td><a href="/tweets/{{ $tweets->id }}/delete" class = "btn btn-primary"> X </a></td>
               </tr>
             </table>
           </div>
    </div>




  </body>
</html>
