function changeBackground(img, author, linkPicture) {
	$("#wrap .background").eq(1).css('background', "url('" + img + "') no-repeat center center fixed");
	$("#wrap .background").eq(1).css('-webkit-background-size', 'cover');
	$("#wrap .background").eq(1).css('-moz-background-size', 'cover');
	$("#wrap .background").eq(1).css('-o-background-size', 'cover');
	$("#wrap .background").eq(1).css('background-size', 'cover');
	
	// Bild ersteinmal im Hintergrund laden:
	$("img.hidden").attr("src", img);
	// Wenn Bild komplett fertig geladen wurde, ändere Hintergrund:
	$("img.hidden").one("load", function() {
		$("#wrap .background").first().appendTo('#wrap').fadeOut(1000);
		$("#wrap .background").first().fadeIn(1000);
		
		$("#author").text(author);
		$("#linkPicture").attr("href", linkPicture);
	}).each(function() {
	  if(this.complete) $(this).load();
	});
}

$(document).ready(function(){
	$("#wrap .background").hide();
	getFlickr(0);
	$("form#anfrage").submit(function(){
		$.ajax({
			url:"ajax/getSpeise.php",
			type:"POST",
			async:false,
			dataType:"json",
			data:$("form#anfrage").serialize(),
			success:function(result){
				var data = new Object();
				$("h2").html("Unsere Idee: " + result["speise"]);
				getFlickr(result["flickr"]);
			}
		});
		// Submit wird beendet, Seite wird nicht neu geladen
		return false;
	});
});

var flickrRequest = null;

function getFlickr(flickrId) {
	// Wenn ein neuer FlickrRequest erstellt wurde, sollen die noch laufenden abgebrochen werden:
	if (flickrRequest != null) {
		flickrRequest.abort();
	}
	flickrRequest = $.ajax({
		url:"ajax/getFlickr.php",
		type:"POST",
		async:true,
		dataType:"json",
		data:"id="+flickrId,
		success:function(result){
			var author = result['author'];
			changeBackground(result['url'], author['username'], author['linkPicture']);
		}
	});
}