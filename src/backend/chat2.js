$(document).ready(function(){
  $('.message-submit').click(function() {
       insertMessage();
    });
});
$(window).on('keydown', function(e) {
  if (e.which == 13) {
    insertMessage();
    return false;
  }
});
function insertMessage() {
  msg = $('.message-input').val();
  $('<div class="message message-personal">'+msg+'</div>').appendTo('.messages-content').addClass('new');
  $('.message-input').val(null);
  sendtodf(msg);
}

var accessToken = "02d0d610c320489b9635c4afc3a1bd06";
var baseUrl = "https://api.dialogflow.com/v1/query?v=20150910";

function sendtodf(msg) {
			$.ajax({
				type: "POST",
				url: baseUrl,
				contentType: "application/json; charset=utf-8",
				dataType: "json",
				headers: {
					"Authorization": "Bearer " + accessToken
				},
				data: JSON.stringify({
					query: msg,
					lang: "en",
					sessionId: "mysessionid"
				}),
				success: function(data) {

					processResponse(data);

				},
				error: function() {
					processResponse("Internal Server Error");
				}
		});
		}
function processResponse(data) {
    if(data.result.fulfillment.displayText == null){
      var responsedisplay=data.result.fulfillment.speech;
    }
    else{
      var responsedisplay=data.result.fulfillment.displayText;
    }
		var responsespeech = data.result.fulfillment.speech;
    responsiveVoice.speak(responsespeech);
    $('<div class="message loading">'+responsedisplay+'</div>').appendTo('.messages-content').addClass('new');
}
