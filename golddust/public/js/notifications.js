		$( document ).ready(function () {
												
			 $.get('/notifications', function (data) {
				 console.log(data);
				 if(data && data.length > 0) {
           
					 $("#notifications").html(" ");
					 
						// notification badge
					 $("#note-notifications").html("!");

					 // messages badge
					 $("#note-messages").html(count_notifications(data, "type", "AppNotificationsNewMessage"));
					 
					 // notification dropdown
					 for(var i = 0; i < data.length; i++) {
					  	$("#notifications").append("<li><a href='messages'>"+ data[i]['data']['type'] +": </br> From: "+ data[i]['data']['author_name'] +"</a></li>");
				 	 }
					 
				 }
				 
			 });
			
		});
		
		function count_notifications(arr, i, v) {
			var count = 0;
			for(var c = 0; c < arr.length; c++) {
				if (arr[c][i].replace(/[^a-zA-Z ]/g, "") == v) {
					count++;
				}
			}
			if(count > 0) {
				return count;
			}
		}