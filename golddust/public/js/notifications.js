		$( document ).ready(function () {
												
			 $.get('/notifications', function (data) {
				 console.log(data);
				 if(data && data.length > 0) {

					 // messages badge
					 $("#note-messages").html(count_notifications(data, "type", "AppNotificationsNewMessage"));
					 
					 var nc = data.length - count_notifications(data, "type", "AppNotificationsNewMessage");
					 
					 if (nc > 0) {
						 
						 // notification badge
						 $("#notifications").html(" ");
					 	 $("#note-notifications").html("!");
						 
						 // notification dropdown
						 for(var i = 0; i < nc; i++) {
							 /* disabling for now
							 // FOR MESSAGES
							 if (data[i]['type'] == "NewMessage") {
								$("#notifications").append("<li><a href='messages'>"+ data[i]['data']['type'] +": </br> From: "+ data[i]['data']['author_name'] +"</a></li>");
							 }
							 */
						 }
						 
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