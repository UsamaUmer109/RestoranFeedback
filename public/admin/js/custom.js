$(document).on("click", ".updateRatingStatus", function(){
    var status       = $(this).children("i").attr("status");
    var rating_id    = $(this).attr("rating_id");
    console.log(status, rating_id);
    $.ajax({
        headers:    {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type:'post',
        url: '/admin/updateRatingStatus',
        data: {status:status, rating_id:rating_id},
        success:function(resp){
            if (resp['status'] == 0) {
                $("#rating-"+rating_id).html("<i class='fas fa-toggle-off' aria-hidden='true' status='Inactive'></i>")
            } else  if (resp['status'] == 1) {
                $("#rating-"+rating_id).html("<i class='fas fa-toggle-on' aria-hidden='true' status='Active'></i>")
            }
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
            alert("Error: " + error);
        }
    });
});
