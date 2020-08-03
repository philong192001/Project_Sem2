function actionDelete(event){
	let urlRequest = $(this).data('url');
	let that = $(this);
	event.preventDefault()
	Swal.fire({
		title: 'Are you sure?',
		text: "You won't be able to revert this!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, delete it!'
	}).then((result) => {
		if (result.value) {
			$.ajax({
				type:'GET',
				url: urlRequest,
				success:function(data){
					if (data.code == 200) {
						that.parent().parent().remove();
						Swal.fire(
							'Deleted!',
							'Your file has been deleted.',
							'success'
							)
					}else{
						Swal.fire(
							'Delete Failed!',
							'Your file no has been deleted.',
							'FAILED ????'
							)
					}
				},
				error:function(){

				}
			});
			
		}
	})
}

$(function() {
	$(document).on('click','.action_delete',actionDelete);

}); 