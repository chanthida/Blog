<!DOCTYPE html>

<html>
<head>
<title>Post</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<style>		
		.title { font-size: 1.5em; font-weight: bold; }
		.header { font-size: 1.7em; font-weight: bold; }
		.subtitle { font-size: 1.6em; font-weight: bold; }	
		.name { font-size: 1em; color: red;  font-weight: bold;}	
		.role { font-size: 1em;  }	
		.place { font-size: 0.8em; }	
		.avatar { width:100px; }
		.col3  {  
			text-align: center;
			border-left: 1px solid #ccc;
		}	
		.panel  {box-shadow: 5px 5px 5px rgba(192,192,192,0.3); }
		.bg-container {
		  background-color: rgb(242, 242, 242);		  
		}
		.pagination li a, .pagination>li>span { 			
			margin: 0 5px;			
			color: #000000 !important;
			border: 0px
		}
		.pagination>li.active>a {
		  border-radius: 50% !important;
		  color: white !important;
		  background: #cc0000!important;			 	  
		}
	

		
	</style>
</head>

<body>		   
	<div class="container">
		<p class="header">MAQE Forums</p>
		<p class="subtitle">Subtitle</p>
		<p class="title">Posts</p>

		@php
			$i=0;			
		@endphp

		 @foreach ($posts as $post)
		  <div class="panel panel-default">
		    
		    @if($i % 2 == 0)
		    	<div class="panel-body">
		    @else
		    	<div class="panel-body bg-container">
		    @endif

		    @php
		    	$i++;
		    @endphp
		    	<div class="col-xs-3">
			    	<img src="{{$post['image_url']}}" class="img-responsive">
			    </div>	
			    <div class="col-xs-7">	    	
			    	<div class="title">{{$post['title']}}</div>
					<div>{{$post['body']}}</div>				
					
					<p>
						<i class="text-muted">
						<i class="fa fa-clock-o" aria-hidden="true"></i> 
						@php
							echo \Carbon\Carbon::createFromTimeStamp(strtotime($post['created_at']))->diffForHumans();
						@endphp
						</i>
					</p>
				</div>

				 <div class="col-xs-2 col3">
				 	
						@foreach ($authors as $author)
							@if($author['id'] == $post['author_id'] )
							<img src="{{$author['avatar_url']}}" class="img-circle avatar">
								
								<div class="name">{{$author['name']}}</div>
								<div class="role">{{$author['role']}}</div>
								<div class="place"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$author['place']}}	</div>							
							@endif
						@endforeach
					
				</div>			
				
			</div>			

		  </div>
		  @endforeach
		<div class="row">
		    <div class="col-xs-offset-4">
			    <ul class="pagination">
	              <li><a href="#">Previous</a></li>
	              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
	              <li><a href="#">2</a></li>
	              <li><a href="#">3</a></li>
	              <li><a href="#">4</a></li>
	              <li><a href="#">5</a></li>
	              <li><a href="#">Next</a></li>
	            </ul>
		    </div>
		</div>
		 
	</div>



</body>
</html>





