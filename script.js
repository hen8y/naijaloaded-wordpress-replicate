$(document).ready(function()
{$("#comment").submit(function(e)
{var postData=new FormData(this);e.preventDefault();var formURL=$(this).attr("action");$.ajax({url:formURL,type:"POST",enctype:'multipart/form-data',data:postData,contentType:false,processData:false,cache:false,success:function(data,textStatus,jqXHR)
{$("#hidethis").hide();$("#simple-msg").html(data);location.reload();},error:function(jqXHR,textStatus,errorThrown)
{$("#simple-msg").html('<pre><code class="prettyprint">AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</code></pre>');}});});});