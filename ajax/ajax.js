// Variablen für das Voting
var speise = -1;
var vote = 0;
// Voting am Anfang off:
$(".voting").hide()

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


function getSpeise(){
	$('div#alert-speichern-success').hide();
	$.ajax({
		url:"ajax/getSpeise.php",
		type:"POST",
		async:false,
		dataType:"json",
		data:$("form#anfrage").serialize(),
		success:function(result){
			$("h2").html("Unsere Idee: " + result["speise"]);
			// Daumen hoch und runter Buttons sollen nicht mehr active sein:
			$(".voting>button.active").removeClass("active");
			//	Voting an:
			$(".voting").show()
			getFlickr(result["flickr"]);
			speise = result["id"];
		}
	});
}

$(document).ready(function(){
	$("#wrap .background").hide();
	getFlickr(0);
	$('div#alert-speichern-success').hide();
	$('div#alert-voting-success').hide();
	$('div#alert-speichern').hide();
	
	$("button#hamming").click(function(){
		getSpeise();
		// Submit wird beendet, Seite wird nicht neu geladen
		return false;
	});
	
	$("button#addSpeise").click(function(){
		$('div#alert-speichern-success').hide();
		$.ajax({
			url:"ajax/addSpeise.php",
			type:"POST",
			async:false,
			dataType:"json",
			data:$("form#anfrage").serialize()+"&speise="+$("input#neueSpeise").val(),
			success:function(result){
				if(!result['success']) {
					$('div#alert-speichern').html(result['message']);
					$('div#alert-speichern').show();
					return false;
				}
				// Das Modal wieder schließen:
				$('div#alert-speichern-success').html(result['message']);
				$('div#alert-speichern-success').show();
				$('#addSpeiseModal').modal('hide')
			}
		});
	});
	
	// Wenn das addSpeiseModel geschlossen wird, wird die Fehlermeldung für das nächste Mal geschlossen und das Input-Feld geleert:
	$('#addSpeiseModal').on('hidden.bs.modal', function (e) {
		$('div#alert-speichern').hide();
		$("input#neueSpeise").val('');
	})
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

function voting(wert) {
	// Kein Buttons mehr active
	$(".voting>button.btn-success").removeClass("btn-success");
	// Kein Focus mehr
	$(".voting>button").blur();
	
	$.ajax({
		url:"ajax/vote.php",
		type:"POST",
		async:true,
		dataType:"json",
		data:"speise="+speise + "&alt=" + vote + "&neu=" + wert,
		success:function(result){
			if(!result["success"]) {
				alert(result["message"]);
			}
		}
	});
	
	$('div#alert-voting-success').slideDown(300).delay(3000).slideUp(300);
	if (wert == -1){
		getSpeise();
		vote = wert;
		return;
	}
	
	// Wenn Button das zweite mal hintereinander gedrückt wurde, dann ignorieren
	if (wert != vote) {
		var button;
		if (wert == 1) {
			button = "#thumb_up";
		} else {
			button = "#thumb_down";		
		}
		$(button).addClass('btn-success');
		vote = wert;
	} else {
		vote = 0;
	}	
}