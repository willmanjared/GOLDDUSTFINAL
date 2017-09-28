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
							 if (data[i]['type'] !== "NewMessage") { console.log(data[i]['data']); }
							 if (data[i]['data']['resource'] == 'project') {
								 $("#notifications").append("<li><a href='#'>"+ data[i]['data']['resource'] +" "+ data[i]['data']['action'] +"<br/>"+ data[i]['data']['title'] +"</a></li>");
								 if($("#business-dashboard-feed")) { appendProjectNote(data[i]['data']); }
							 }
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
		
			
			function appendProjectNote(data) {
				var r = "<div class='panel panel-default'><div class='panel-heading'>";
				
				r += "" + ucfirst(data['action']) + " " + ucfirst(data['resource']) + "";
				
				r += "</div><div class='panel-body'>";
				
				r += "<div class='project-note-body'>";
				
				r += data['body'];
				
				r += "<br/>";
				
				r += "<a href='/"+ data['resource'] +"s/"+ data["projects_id"] + ">"+ data['title'] +"</a>";
				
				r += "</div>";
				
				r += "<div class='project-note-actions'>";
				
				r += "";
				
				r += "</div>";
				
				r += "</div>";
				
				r += "</div>";
				
				$("#business-dashboard-feed").append(r);
				
			}


// ADD TO GLOBAL JS FUNCTIONS
function ucfirst(string) 
{
    return string.charAt(0).toUpperCase() + string.slice(1);
}